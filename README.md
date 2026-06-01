# BlackSwan Upload — `upload.php`

> **One PHP file. Move files anywhere.**
> Pull a file from any URL, push files from your PC, relay through a second
> server when the source is blocked, browse and manage FTP/FTPS/SFTP servers,
> and diff-and-sync two servers — all from a single, dependency-free
> `upload.php` you drop in, use, and delete.

<a href="screenshot-full.jpeg" target="_blank"><img src="screenshot.jpeg" style="border-radius:0.5rem;" alt="The upload.php interface: sidebar app shell, upload form with live progress, and the file-tree browser." width="460"></a>

> **Latest release:** v3.0.0 · 2026-06-02<br>
> **Single file:** `upload.php` — no install, no Composer, no CDN, no build step.<br>
> **Zero dependencies:** pure PHP + vanilla JS + vanilla CSS. Works on shared hosting, cPanel, DirectAdmin, managed WordPress.

---

## Why this exists

Sometimes you need to get a file **onto** a server and the usual tools aren't there: `wget`/`ssh` are disabled, it's locked-down shared hosting, or the box simply can't reach the source. You have a browser, a URL, and maybe some FTP credentials.

`upload.php` is the bridge. Upload **this one file**, and the server does the heavy lifting:

- **Server-side pull** — paste a URL and the server downloads it directly. No more "download 2 GB to my laptop, then re-upload over FTP."
- **Relay around blocks** — if your server can't reach the source (geo-block, firewall), route the fetch through a second server that can.
- **Manage remote servers** — browse, upload to, download from, rename, move, and delete files over FTP/FTPS/SFTP, right from the browser.
- **Keep two servers in sync** — compare a whole tree by relative path and push only what's missing or different.

Then click **Self-Destruct** and it's gone.

---

## What it does

### 📤 Upload
| Mode | What it does |
| --- | --- |
| **Upload from URL** | Server fetches any URL straight to disk, with live top-bar progress, size, elapsed time and ETA. Optional **archive extraction** (`.zip .tar .tar.gz .tgz .gz`) and a **WordPress installer** mode (extract → move to root → keep latest theme → wipe default plugins → `Disallow: /`). **Bulk:** paste many URLs, one per line, with per-item rows, retry, and a counter. |
| **Upload from PC** | Pick files from your device and upload them to the server with a **real, per-file progress bar** (true byte progress). Selected files are listed before upload with **per-item remove**; pick again to add more. Bulk multi-file supported. |
| **MITM Relay** | When the server can't reach the source, a second server running this same script fetches it for you: A → asks Relay to fetch → A downloads from Relay → A optionally tells Relay to delete. Single or bulk. |

### 🗂️ Browse
| Tool | What it does |
| --- | --- |
| **File Explorer** | An expandable, lazy-loading **tree** of the local server. Click a folder to load just it, or **Load full tree** to walk everything (capped for safety). Copy HTTP URLs, multi-select bulk delete/copy, rename, duplicate, move, delete. Shows size, modified time, and **octal + symbolic permissions** with plain-language tooltips. |
| **FTP Explorer** | Connect to **FTP / FTPS (TLS) / SFTP** (self-signed certs OK) and browse the remote tree the same way. **Click a folder to make it the current target.** Rename / move / duplicate / delete remotely; copy bare path or full HTTP URL; **save any file down to this server** with a progress row. **Upload into the current folder** from **PC, URL, or Relay** — bulk, with per-item progress, **Stop**, and **Retry**. Set an **Initial Directory** so a connection opens straight into `/public_html` (or anywhere). |

### 🔄 Sync
| Tool | What it does |
| --- | --- |
| **FTPS Sync** | Two panes, each independently **Local** or **FTP/FTPS/SFTP**, each with its own **Root folder**. Compare diffs the entire tree by each file's path **relative to its root** (so `/public_html/x.zip` lines up with `/w2w/x.zip`), flagging *identical / differs / only-left / only-right*. Differing & one-side-only files are **auto-selected**. **Sync** in either direction — recreating sub-folders on the destination — via **Direct** (download+upload through this server), **Plain FTP**, **Relay (MITM)**, or **FXP** (best-effort, falls back to Direct). The queue has a **progress bar, per-item progress, Stop (whole queue or a single item), Retry (per item or all failed)**, and **unchecks each file as it succeeds** so a re-run only does what's left. |

### 🛠️ Tools
- **PHP Info** — curated server diagnostics in-page, full native `phpinfo()` one click away.
- **Help** — full CLI reference, web endpoints, **"Removing PHP Limits & Timeouts"** recipes (php.ini / .user.ini / .htaccess / Nginx+FPM), and a plain-English explanation of how **Self-Update** works.
- **Update** — one-click self-update from the GitHub latest release (see below).

### ✨ Interface
- **GitHub-style light/dark UI** with a sidebar app shell, grouped into **Upload · Browse · Sync · Tools**. Collapse / theme controls are icon-only at the bottom; the sidebar collapses to an icon rail (full height) that expands on hover.
- **Collapsible connection forms** — after you connect, the FTP credentials form auto-collapses to a one-line summary (with **Edit**), on both FTP Explorer and FTPS Sync, so the form doesn't eat space while you browse.
- **Saved connections** — store FTP credentials + settings (incl. initial directory) as named profiles and reload them into FTP Explorer or either Sync side in one click (stored unencrypted, in your browser only).
- **No-timeout best effort** — the script raises `max_execution_time`, `memory_limit`, socket timeout and `ignore_user_abort` at runtime so long transfers don't die mid-way (with server-level recipes in Help for hosts that override it).
- Startup **permission banner**, copy-to-clipboard with toasts, mobile-responsive, keyboard-accessible, **self-destruct**, path-traversal hardening, auto file-name from URL.

---

## How it works

`upload.php` is a single PHP file that serves **both** the HTML/CSS/JS front-end **and** a tiny JSON API from the same endpoint:

- **Front-end:** one page, no framework. Views (Upload/Browse/Sync/Tools) are inline sections toggled client-side. The file tree is a generic lazy-loading component reused by File Explorer, FTP Explorer, and both Sync panes.
- **Back-end:** `POST` with an `_a=` action returns JSON — e.g. `ls` / `ls_tree` (local tree), `ftp_ls` / `ftp_tree` (remote tree), `fetch` (URL→server), `upload_local` (PC→server), `mitm_fetch` (relay), `ftp_copy` (FTP→server), `ftp_upload` (PC/URL/relay→FTP), `xfer_direct|ftp|relay|fxp` (sync engine), and `check_update` / `do_update`.
- **Progress:** the browser-side leg of **Upload from PC** and **FTP Explorer → From PC** shows *true* byte progress via `XHR.upload`. Server-side legs (URL fetch, FTP↔server, relay, sync) run as one request and show an honest indeterminate/animated bar with the known size — not a fake percentage.
- **Engine:** cURL-first (handles FTP/FTPS/SFTP URLs, redirects, self-signed certs) with native `ftp_*` / `ssh2` fallbacks.

Everything is stateless: FTP credentials are passed per request and never stored server-side.

---

## Requirements

- **PHP 7.0+** (tested through 8.x).
- **cURL** extension (for URL/FTP/FTPS/SFTP transfers and self-update).
- **ZipArchive** for `.zip` extraction; **PharData** (bundled) for `.tar/.tar.gz/.tgz`.
- For SFTP: cURL with SFTP support **or** the `ssh2` extension.
- Write permission in the folder where `upload.php` lives (for uploads and self-update).

## Install (web)

1. **Download** [`upload.php`](upload.php).
2. **Upload** it (FTP/SFTP/cPanel File Manager) to the target directory.
3. **Open** `https://yoursite.com/upload.php`.
4. Use any mode from the sidebar.
5. **Self-Destruct** when you're done.

## PHP CLI

```bash
php upload.php --url=<URL> --name=<filename> [options]

  --url=<URL>        Source URL                 (required)
  --name=<filename>  Destination filename       (required)
  --folder=<dir>     Sub-directory              (optional)
  --extract          Extract archive after download
  --wpinstall        WordPress installer mode
  --delete           Self-destruct
  --mitm=<URL>       Relay (MITM) server upload.php URL
  --mitm-keep        Keep the file on the relay after transfer
  --help             Show help

# Compare & Sync (recursive, by path relative to each root)
php upload.php --compare --left=<spec> --right=<spec> \
  [--sync --dir=lr|rl --method=direct|ftp|relay|fxp --relay=<URL> --yes]
#   <spec> = local:/abs/path | ftp://user:pass@host:port/root   (ftps:// sftp://)
```

```bash
# WordPress in one line
php upload.php --url=https://wordpress.org/latest.zip --name=wp.zip --wpinstall

# Relay around a block
php upload.php --mitm=https://relay.example.com/upload.php \
  --url=https://blocked-source.com/file.zip --name=file.zip

# Dry-run a sync, then perform it
php upload.php --compare --left=ftp://u:p@a.com/w2w --right=ftp://u:p@b.com/htdocs
php upload.php --compare --left=ftp://u:p@a.com/w2w --right=ftp://u:p@b.com/htdocs \
  --sync --dir=lr --method=direct --yes
```

## Removing PHP limits & timeouts (big / slow files)

The script already calls `set_time_limit(0)` and raises limits at runtime, but many hosts override that. To move large files without `504 / Maximum execution time exceeded`, raise limits at the server level. Find your active `php.ini` under **PHP Info → Loaded Configuration File**.

```ini
; php.ini  (or .user.ini in this folder on PHP-FPM/CGI shared hosting)
max_execution_time = 0
max_input_time = -1
memory_limit = 1024M
upload_max_filesize = 5G     ; only for "Upload from PC"
post_max_size = 5G           ; must be >= upload_max_filesize
default_socket_timeout = 3600
```

```apache
# .htaccess  (Apache + mod_php only)
php_value max_execution_time 0
php_value memory_limit 1024M
php_value upload_max_filesize 5G
php_value post_max_size 5G
```

```nginx
# Nginx + PHP-FPM
client_max_body_size 5G;
fastcgi_read_timeout 3600s;
# php-fpm pool (www.conf):  request_terminate_timeout = 0
```

> **Note:** *Upload from URL*, *MITM Relay*, *FTP Save-to-server*, and *Sync* stream through the server and are bound by `max_execution_time`, **not** `upload_max_filesize`. Only *Upload from PC* is bound by `upload_max_filesize` / `post_max_size`.

The full matrix (including `mod_fcgid`, `mod_proxy_fcgi`, and Apache `Timeout`) is in the in-app **Help** tab.

## Self-Update (from GitHub Releases)

**Update → Check for updates** will:

1. Query the GitHub Releases API for [`amirhp-com/upload-url-to-server`](https://github.com/amirhp-com/upload-url-to-server) and read the **latest** release tag (e.g. `v3.0.0`).
2. Compare that tag to this file's `APP_VER` with `version_compare()`.
3. If newer, download `upload.php` — preferring a release **asset** named `upload.php`, otherwise the raw file at that tag.
4. Verify the download contains a newer `APP_VER`, back up the current file as **`upload.php.bak`**, then overwrite `upload.php` in place.

**Needs:** the file must be writable by PHP, and the server must reach `api.github.com` + `raw.githubusercontent.com`. **Roll back** anytime by restoring `upload.php.bak`.

**Testing it:** run an older copy (lower `APP_VER`) on a writable host and click *Check for updates* — it should offer the latest release and update on confirm. Or from the CLI on the server: `curl -s https://api.github.com/repos/amirhp-com/upload-url-to-server/releases/latest | grep tag_name` to confirm what the script will see.

## Web endpoints

| URL | Action |
| --- | --- |
| `upload.php` | App (all modes/tools). |
| `upload.php?phpinfo=1` | Full native `phpinfo()`. |
| `upload.php?delete=true` | Self-destruct. |
| `POST _a=fetch` / `mitm_fetch` / `del_by_name` | MITM relay JSON API. |
| `POST _a=ftp_upload` | Upload PC/URL/relay file into an FTP folder. |
| `POST _a=xfer_direct\|ftp\|relay\|fxp` | Compare-&-Sync transfer engine. |
| `POST _a=check_update` / `do_update` | Self-update. |

## ⚠️ Security

> This tool is **intentionally permissive** — built to be uploaded, used, and immediately deleted. Treat it as a temporary utility, not part of your app.

- **Always self-destruct** when finished.
- No built-in auth — if it must live for a while, gate it with `.htaccess` Basic Auth or rename it to something unguessable. The page is `noindex,nofollow`.
- Inputs are sanitised against `..`, null bytes, mixed slashes, and leading separators; the browser can't delete the script itself.
- Saved FTP connections are stored **unencrypted in your browser** only.

## Changelog

Full history: [CHANGELOG.md](CHANGELOG.md). Recent highlights:

- **v3.0.0** — FTP Explorer **upload** (PC/URL/Relay, bulk, per-item progress, Stop, Retry) into the **clicked target folder**; **FTP→server download** progress; Sync queue **Stop / Retry / per-item progress / uncheck-on-success**; **collapsible** connection forms (auto-collapse after connect) on FTP Explorer & Sync; **Initial Directory** for FTP connections (saved in profiles); sidebar regrouped into **Upload · Browse · Sync · Tools** with icon-only collapse/theme; footer shows server + your IP; runtime **no-timeout** best-effort + Help recipes for php.ini/.user.ini/.htaccess/Nginx; compare diff **tags** + auto-select; recursive folder sizes.
- **v2.9.0** — GitHub-style redesign, sidebar app shell, inline tool views, Upload-from-PC (bulk).
- **v2.5.0** — MITM Relay bulk mode (`_a=mitm_fetch`).
- **v2.4.0** — FTP folder navigation fix, configurable download-to folder, 1000px layout.
- **v2.3.0** — FTP bulk actions, bulk URL upload, octal permissions, self-update.
- **v2.1.0** — FTP Browser (FTP/FTPS/SFTP).
- **v2.0.0** — MITM relay mode, Phosphor icons, CLI `--mitm`.
- **v1.9.2** — Dark iOS UI, progress + ETA, file browser, PHP CLI mode.

## Contributing

PRs welcome. Keep it a **single file** — features land in `upload.php`. Branch off `main`, update `CHANGELOG.md`, and include a screenshot for UI changes.

## License

MIT — see [LICENSE](LICENSE).

## Disclaimer

Provided as-is. The author accepts no responsibility for misuse, lost data, or security incidents from leaving this script accessible on a production server. Self-destruct it the moment you're done.

— Lead developer: [amirhp-com](https://amirhp.com/)
