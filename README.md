# BlackSwan — Upload File from URL to Web Server

> A single-file PHP utility that pulls any file from a remote URL straight onto your web server, with live progress, MITM relay mode, optional archive extraction, a built-in WordPress installer, file browser, PHP CLI support, and a one-click self-destruct.

<a href="screenshot-full.jpeg" target="_blank"><img src="screenshot.jpeg" style="border-radius: 0.5rem;" alt="Screenshot of the upload.php interface showing the upload form, progress bar, and file browser popup." width="400"></a>

> **Latest release:** v2.4.0 · 2026-05-03<br>
> **Single file:** `upload.php` — drop it in, run it, delete it.<br>
> **Zero dependencies:** pure PHP, vanilla JS, vanilla CSS. No Composer, no CDN, no build step.

---

## Why this exists

Sometimes you need to get a file *onto* a server but `wget` and `ssh` aren't available — shared hosting, locked-down cPanel, DirectAdmin, a managed WordPress host. You have FTP and a URL. That's it.

`upload.php` bridges the gap: upload **this one file**, point it at any URL, and the server pulls the file directly. No more "download to laptop → upload via FTP" detours for a 2 GB archive.

## Features

- **Direct URL → server transfer** with live top-bar progress, file-size readout, elapsed time, and ETA.
- **cURL-based engine** — works on SSL, non-SSL, DirectAdmin, follows redirects, 64 KB buffer, throttled UI updates.
- **Universal archive extraction** (toggle): `.zip`, `.tar`, `.tar.gz`, `.tgz`, `.gz`.
- **WordPress installer mode** (toggle): downloads, extracts, moves to root, keeps only the latest default theme, wipes default plugins, writes a `Disallow: /` `robots.txt`.
- **File browser popup** — navigate directories (including parent dirs), copy file HTTP URLs, delete files/folders with confirmation, multi-select with bulk delete / copy URLs.
- **PHP Info popup** — curated server diagnostics in a modal, full `phpinfo()` in a new tab.
- **Help & CLI guide popup** — documents all PHP CLI flags and web endpoints.
- **PHP CLI mode** — run `php upload.php --url=... --name=...` directly from the terminal.
- **Dark theme** — GitHub-dark-style color palette with brand accent color (my favorite orange).
- **Copy-to-clipboard** buttons for source and destination URL on the completion screen, with toast confirmation.
- **iOS-style toggles**, mobile-responsive form, keyboard-accessible.
- **Self-destruct** — one click (or `--delete` from CLI) and the script removes itself from the server.
- **MITM relay mode** — when your server can't reach a URL directly, route the transfer through a second server running this same script. Server A asks the MITM server to fetch the source, then downloads the file from MITM to A, and optionally auto-deletes it from the relay. Exposes `_a=fetch`, `_a=mitm_fetch`, and `_a=del_by_name` JSON API endpoints used by the caller. Supports bulk mode — paste multiple source URLs (one per line) and relay them through the MITM server sequentially with per-item status, progress bar, and counter.
- **FTP Browser tab** — connect to any FTP, FTPS (TLS), or SFTP server and browse its remote file tree. View Name / Size / Modified / Permissions columns, navigate directories with a breadcrumb bar, delete files, copy the bare remote path or a full HTTP URL (Web Base URL + path) to the clipboard, and pull any file down to the local server in one click. Accepts self-signed and unknown SSL certificates.
- **FTP bulk actions** — checkboxes on every FTP browser row with select-all; bulk Copy URLs and bulk Delete with a single confirmation.
- **Configurable path strip-prefix** — enter a prefix (e.g. `/www`) in the FTP connection form to strip it from remote paths when building Copy URL links.
- **Bulk URL upload** — switch Direct Upload (or MITM Relay) to bulk mode, paste multiple URLs (one per line), and download/relay them to the server sequentially with per-item status rows, progress bar, and counter.
- **Numeric permissions** — both the local file browser and the FTP browser now show symbolic permissions alongside the octal number (e.g. `-rwxr-xr-x 755`) with a hover tooltip describing each access level in plain language.
- **Self-update** — "Update" button in the header checks the GitHub latest release via API; if a newer version is available, downloads and replaces the script in-place (backing up the current file as `upload.php.bak`).
- **Path-traversal hardening** on folder and filename inputs.
- **Auto file-name** suggested from the URL.

## Requirements

- PHP **7.0+** (tested up to 8.x).
- `cURL` extension (almost always enabled).
- `ZipArchive` extension for `.zip` extraction.
- `PharData` extension (bundled with PHP) for `.tar` / `.tar.gz` / `.tgz`.
- Write permissions in the directory where `upload.php` lives.

## Installation (Web)

1. **Download** [`upload.php`](upload.php).
2. **Upload** it via FTP/SFTP/cPanel File Manager to your target directory.
3. **Open** it in your browser: `https://yoursite.com/upload.php`.
4. **Paste** the source URL, set the destination filename and (optionally) a subfolder.
5. **Toggle** "Extract archive" or "WordPress installer" if you need them.
6. Click **Upload File** and watch the progress bar.
7. When done, **click "Self Destruct"** to remove the script.

## PHP CLI Usage

```bash
php upload.php --url=<URL> --name=<filename> [options]

Options:
  --url=<URL>        Source URL to download  (required)
  --name=<filename>  Destination filename     (required)
  --folder=<dir>     Sub-directory            (optional)
  --extract          Extract archive after download
  --wpinstall        WordPress installer mode
  --delete           Self-destruct (removes upload.php)
  --mitm=<URL>       MITM server upload.php URL (required for MITM mode)
  --mitm-keep        Keep file on MITM server after transfer
  --help             Show help
```

### Examples

```bash
# WordPress install
php upload.php --url=https://wordpress.org/latest.zip --name=wp.zip --wpinstall

# Extract archive to subdirectory
php upload.php --url=https://example.com/app.zip --name=app.zip --folder=downloads --extract

# Download a file
php upload.php --url=https://example.com/file.tar.gz --name=archive.tar.gz --extract

# MITM relay — route through a proxy server
php upload.php --mitm=https://turkey.example.com/upload.php --url=https://iran.example.com/file.zip --name=file.zip
```

## URL endpoints

| URL                      | Action                                          |
| ------------------------ | ----------------------------------------------- |
| `upload.php`             | Main upload form.                               |
| `upload.php?phpinfo=1`   | Full native `phpinfo()` in new tab.             |
| `upload.php?delete=true` | Self-destruct — deletes the script.             |
| `upload.php?r=…`         | Cache-busting reload of the form.               |
| `upload.php` (`_a=fetch`) | MITM API: fetch a URL to this server and return JSON with file URL. |
| `upload.php` (`_a=mitm_fetch`) | Relay one source URL through a MITM server to this server (fetch → download → optional delete), returns JSON. Used by MITM bulk mode. |
| `upload.php` (`_a=del_by_name`) | MITM API: delete a file by name/folder from this server. |

## Usage tips

- **WordPress in two clicks**: leave the default URL (`https://wordpress.org/latest.zip`), enable the **WordPress installer** toggle, hit upload.
- **Generic archive**: enable just the **Extract archive** toggle.
- **Subfolder uploads**: type `path/to/subfolder` in the destination folder field.
- **File browser**: click **Files** in the header to browse the server filesystem, copy URLs, and delete items.
- **PHP Info**: click **PHP Info** in the header to see a curated diagnostics panel in a popup.
- **Help**: click **? Help** in the header for CLI usage and web endpoint reference.

## ⚠️ Security notes

> This tool is **intentionally permissive** — it is designed to be uploaded, used, and immediately deleted. Treat it as a temporary utility, not as part of your application.

- **Always self-destruct** when you're done.
- The script does **not** ship with auth. If you need protection during a long upload, drop a `.htaccess` Basic Auth gate next to it, or rename the file to something unguessable.
- The page itself is `<meta name="robots" content="noindex,nofollow">`.
- File and folder inputs are sanitised against `..`, null bytes, mixed slashes, and leading separators.
- The file browser cannot delete the script itself, but can traverse the entire filesystem the PHP process has read access to.

## Changelog

Full history: [CHANGELOG.md](CHANGELOG.md).

Recent highlights:

- **v2.5.0** — MITM Relay bulk mode: paste multiple source URLs and relay them through the MITM server sequentially with per-item progress (new `_a=mitm_fetch` endpoint).
- **v2.4.0** — Fixed FTP folder navigation (SVG click delegation); configurable "Download-to Folder" for FTP Copy-to-Server; wider 1000px layout; bulk mode hides unused filename field.
- **v2.3.0** — FTP bulk actions (checkboxes, bulk Copy URLs, bulk Delete); Direct Upload bulk mode (multi-URL textarea, per-item progress, sequential AJAX downloads); configurable FTP path strip-prefix; numeric (octal) permissions with human-readable tooltips in both file browsers; self-update from GitHub latest release with backup.
- **v2.1.0** — FTP Browser tab: connect to FTP/FTPS/SFTP servers, browse the remote file tree, copy path or full HTTP URL, delete files, and pull any file to the local server. Stateless credential passing, self-signed cert acceptance, localStorage persistence for all fields except password.
- **v2.0.0** — MITM relay mode (proxy-server transfers via `_a=fetch`/`_a=del_by_name` API), Phosphor SVG icons (fully local, no external resources), larger fonts, Direct/MITM tab switcher with localStorage persistence, wider content area (700px), CLI `--mitm`/`--mitm-keep` flags.
- **v1.9.2** — Dark iOS UI, top-bar progress with ETA, file browser popup (AJAX), PHP Info modal, Help/CLI guide popup, PHP CLI mode, minified CSS/JS, semver versioning.
- **v1.8.0** — Inline SVG icon, scoped `delete_file` action with realpath safety, output-buffer padding for proxied hosts.
- **v1.7.0** *(folded into v1.8.0)* — cURL engine, iOS toggles, universal archive extraction, copy buttons, PHP info panel.
- **v1.6.0** — `delete_file` action, `?force=1` cURL switch, inline SVG favicon.
- **v1.4.0** — WordPress installer mode, self-destruct on finish screen.

## Contributing

Pull requests are welcome.

1. Fork the repo.
2. Branch off `main`.
3. Keep the file count low — this project is a **single file**. New features land inside `upload.php`.
4. Update `CHANGELOG.md` under a new version section.
5. Open a PR with a clear description and (if UI changes) a screenshot.

## License

MIT — see [LICENSE](LICENSE).

## Disclaimer

Provided as-is. The author accepts no responsibility for misuse, lost data, or security incidents resulting from leaving this script accessible on a production server. Self-destruct it the moment you're done.

---
