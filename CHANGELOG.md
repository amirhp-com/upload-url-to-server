# Changelog

All notable changes to **BlackSwan Upload File from URL to Web Server** are documented here.

---

## v3.3.0 — 2026-06-02

### Added
- **In-browser text viewer & editor** — files in both the **File Explorer** and **FTP Explorer** can now be opened as text. **View as text** (eye icon) opens a read-only preview; **Edit as text** (pencil icon) opens an editable popup. Code files (`css`, `js`, `ts`, `jsx`, `php`, `html`, `json`, `xml`, `md`, `sql`, `yaml`, `sh`, `py`, `.htaccess`, etc.) get **CodeMirror** syntax highlighting (dark `material-darker` theme, lazy-loaded from CDN); anything else opens as plain text. Binary types (images, video, archives, fonts, …) and files **larger than 10 MB** have View/Edit disabled, with a tooltip explaining why. The server also enforces the 10 MB ceiling and refuses binary (null-byte) content.
- **Save & Save with backup** — the editor has a **Save** button and a **Save with backup** button. The backup option first copies the current file to `<name>.back` (FTP backups are round-tripped through this server), then writes your changes; if the backup step fails, nothing is overwritten. The running `upload.php` itself is protected from being overwritten.
- **Tippy.js tooltips** — all tooltips now render through **Tippy.js** (Popper + Tippy inlined directly in the file, no CDN needed) with a custom dark theme that stays darker than the surface in both light and dark modes. `initTips()` converts `title=` attributes and re-initializes after every dynamic render.

### Changed
- **Row actions consolidated into a single ⋯ menu** — Rename, Duplicate, Move, Delete, Copy URL/path, Save-to-server, plus the new View/Edit are now grouped under one three-dots dropdown per row in both explorers, instead of a cluttered strip of icon buttons. Folders show **Open** + management actions; files show the full set (context-aware, with disabled states).

---

## v3.2.0 — 2026-06-02

### Changed
- **Editable breadcrumb address bar** — the File Explorer and FTP Explorer no longer show a separate path input row. The breadcrumb itself is now editable: clicking a crumb navigates as before, but **clicking the empty space turns the strip into a text input** pre-filled with the current path (focused + selected). Press **Enter** to go, **Esc** or click away to revert to the breadcrumb. This removes the redundant input + **Go** button, leaving a single bar: **Up · breadcrumb · Refresh** (FTP keeps its **Upload** button).
- New shared helpers `fvPathEdit` / `fvPathCancel` (+ `fbPathClick` / `ftpPathClick`); a `_crumbHtml` cache (populated by `fvCrumbs`) restores the breadcrumb instantly on cancel. Removed the dead `fbGo` / `ftpGo` functions and the `#fb-addr` / `#ftp-addr` sync.
- On hover the breadcrumb shows a subtle inset border (`cursor:text`) to signal it's clickable, and aligns to the control height (`--ctl-h`).
- Version bumped to **3.2.0**.

---

## v3.1.2 — 2026-06-02

### Fixed
- **Address-bar control heights** — the **Up / Go / Refresh** buttons in the File / FTP Explorer address bar now match the input height (`--ctl-h`) so inputs and buttons line up (`.fb-bar .btn` sizing).

---

## v3.1.1 — 2026-06-02

### Fixed
- **File / FTP Explorer spacing** — the standalone breadcrumb row (`#fb-path` / `#ftp-path`) sat flush against the bulk-action bar; added `margin-bottom` so the address bar, breadcrumb, and bulk bar are evenly separated.

---

## v3.1.0 — 2026-06-02

### Changed
- **File Explorer and FTP Explorer are now single-folder views** (classic file-manager style) instead of an expandable tree. Clicking a folder **opens into it**; the top bar shows clickable **breadcrumbs**, an **editable address bar** (type a path + Enter, or click **Go**), an **Up** button, and Refresh. The recursive "Load full tree / Collapse" controls were removed from these two views.
- **FTP uploads now always target the folder currently open** — navigate into a folder and the upload panel uploads there (`ftpUpDir` tracks the open directory; the old click-to-set-target tree behaviour is gone).
- **Compare & Sync (FTPS Sync) keeps its expandable tree** unchanged — the diff/relative-path comparison still needs the full recursive view.
- Fixed the collapsed sidebar's footer icons (collapse + theme) to sit **side-by-side when the rail is hovered/expanded** (they only stack vertically while the rail is the narrow 58px icon strip).
- Shared flat-folder renderer (`fvRowsHtml` + `fvCrumbs`) drives both explorers; `ajax_ls` / `ajax_ftp_ls` already returned `path` / `parent` / `breadcrumbs`, now consumed directly.
- Version bumped to **3.1.0**.

---

## v3.0.0 — 2026-06-02

### Added
- **FTP Explorer → Upload** — a new **Upload** button opens an in-browser panel that uploads into the FTP folder you're browsing, from three sources: **From PC** (true per-file byte progress via `XHR.upload`), **From URL** (server downloads then pushes to FTP), and **Relay (MITM)** (fetch via a second server, then push). Bulk supported (multiple files / one URL per line) with per-item rows, **Stop** (whole queue or a single in-flight item via `AbortController`), and **Retry** (per item or all failed). Backed by a new `_a=ftp_upload` endpoint reusing `ftp_upload_from_local` / `mitm_post`.
- **FTP folder navigation** — clicking a folder in the FTP tree now sets it as the **current upload target** (highlighted, shown as `Target: /path`), so you can upload into any sub-folder instead of only the connected root. New generic `onToggle` tree callback.
- **Initial Directory** field for FTP connections — open a connection straight into `/public_html` (or anywhere); persisted to `localStorage` and saved/loaded with connection profiles (added to `FTP_MAP`).
- **Collapsible connection forms** — after a successful connect, the FTP credentials form auto-collapses to a one-line summary (`FTPS · host:port · user`) with an **Edit** button, on both **FTP Explorer** and **FTPS Sync**, freeing vertical space while browsing.
- **FTP→server download progress** — "Save to this server" now shows a progress row (animated, with the known file size) and an OK/error result.
- **Help: Removing PHP Limits & Timeouts** — a new Help section with copy-paste recipes for `php.ini`, `.user.ini`, `.htaccess`, Apache (`Timeout`, mod_fcgid, mod_proxy_fcgi) and Nginx+PHP-FPM. Plus a **Self-Update** Help section explaining exactly how the GitHub-release update works.

### Changed
- **Compare & Sync queue overhaul** — overall progress bar **plus per-item progress**, a **Stop queue** button, **per-item Stop** (cancels the in-flight transfer via `AbortController`), **Retry** (per item and "Retry failed (N)"), and **uncheck-on-success** so each synced file is deselected and a re-run only does what's left.
- **Sidebar regrouped** into **Upload** (URL / PC / MITM) · **Browse** (File Explorer + FTP Explorer) · **Sync** (FTPS Sync) · **Tools**. "FTP Browser" renamed **FTP Explorer**, "Compare & Sync" renamed **FTPS Sync**.
- **Collapse + theme toggles** are now **icon-only, side-by-side at the bottom** of the sidebar; the **IP badge was removed** from the sidebar. Collapsed sidebar now stays **full height**.
- **Upload from PC** lists selected files with **per-item remove** before upload (pick again to add more) and shows a real per-file progress bar.
- **Footer** now shows **Server IP** next to **Your IP**; the release line shows **dates only** (no "released on" text); the GitHub link points to the correct repo.
- **Runtime no-timeout best-effort** — `set_time_limit(0)`, `max_execution_time=0`, `max_input_time=-1`, `default_socket_timeout=3600`, `ignore_user_abort(true)` set on every web request so long transfers don't die mid-way.
- Carried over: compare diff **tags** on nodes + legend, **auto-select** of differing/one-side-only files after Compare, full-tree **loading overlay**, and **recursive folder sizes** (local + FTP).
- Version bumped to **3.0.0**.

---

## v2.9.0 — 2026-05-31

### Added
- **Upload from PC tab** — pick one or more files from your device and upload them **directly** to the server hosting `upload.php`, with a per-file destination folder, an optional filename (single-file), per-item status rows, an overall progress bar, and a live "X / N done" counter. Backed by a new `_a=upload_local` endpoint (`move_uploaded_file`, path-sanitised, auto-creates the sub-folder). Supports **bulk** multi-file selection uploaded sequentially.
- **Collapsible sidebar** — a Collapse toggle rail; when collapsed it shows icons only and the content goes full-width, and hovering the rail reveals the full labels as an overlay (no content reflow). State persists in `localStorage`.

### Changed
- **Full UI redesign** — replaced the iOS theme + horizontal tab bar with a **GitHub-style** light/dark palette (blue/green accents, 6px radii) and a **left sidebar** app shell (Modes + Tools groups). The header is taller with a centered logo and the app name **BlackSwan | Upload/sFTP Tool**.
- **Modes & tools are inline views** — Direct/MITM/FTP/Compare plus File Explorer, PHP Info, Help, and Update all render as full-width inline pages selected from the sidebar (no more pop-up modals). `?view=` deep-links are supported.
- **"Direct Upload" renamed to "Upload from URL"** (with a link icon).
- **PHP Info** — the "Full phpInfo()" button now toggles the full report inline (in an iframe) instead of opening a new tab; the `?phpinfo=1` endpoint still works.
- **Footer** — now shows a Self-Destruct link, `Copyright © <year> BlackSwan` (linking blackswandev.com) under MIT License, the visitor's IP, and the version/build date.
- **Real client IP** — `get_real_IP_address()` now prefers Cloudflare's `CF-Connecting-IP` (then other proxy/real-IP headers) before `REMOTE_ADDR`.
- Unified control sizing (inputs, selects, adjacent buttons share one height), GitHub-style select chevron, removed the focus box-shadow (border-only focus), and a fixed non-scrolling app shell (pinned header/footer, internally-scrolling content).
- Version bumped to 2.9.0.

---

## v2.8.0 — 2026-05-30

### Added
- **Expandable file tree** — the File Browser, FTP Browser, and both Compare panes now render an inline collapsible tree instead of a flat single-directory list. Clicking a folder lazy-loads just that folder (reusing the existing `ls` / `ftp_ls` endpoints); a **Load full tree** button recursively loads every folder at once.
- **Recursive tree endpoints** — new `_a=ls_tree` (local) and `_a=ftp_tree` (FTP/FTPS/SFTP) walk the whole hierarchy in one request, reusing a single FTP connection, returning nested `children` with a safety cap (`TREE_MAX_NODES=2000`, `TREE_MAX_DEPTH=20`) and a `capped` flag.
- **Root-relative Compare** — each Compare side gains a **Root folder** field. Compare now diffs the entire loaded tree by each item's path *relative to its root*, so two servers with different web roots (e.g. `/public_html` vs `/w2w`) line up. Ticking a folder selects its whole subtree.
- **Recursive Sync** — syncing checked files recreates the sub-folder structure on the destination (new `ftp_mkdir_p` + `CURLOPT_FTP_CREATE_MISSING_DIRS` / `ssh2_sftp_mkdir` for remote destinations).
- **Saved FTP connections** — store credentials + settings as named profiles in `localStorage` (`bsu_ftp_profiles`), with a Saved-connections dropdown + Load / Save / Delete in the FTP Browser card and both Compare panes (shared list).
- **CLI compare &amp; sync** — `php upload.php --compare --left=<spec> --right=<spec> [--sync --dir=lr|rl --method=direct|ftp|relay|fxp --relay=<URL> --yes]`, where `<spec>` is `local:/abs/path` or `ftp://user:pass@host:port/root` (also `ftps://`, `sftp://`). Prints a relative-path diff report; `--sync` mirrors source-only + differing files (dry-run unless `--yes`).

### Changed
- Help modal, CLI `--help`, and README updated with the tree, Compare, saved-connections, and CLI-compare documentation.
- Version bumped to 2.8.0.

---

## v2.7.0 — 2026-05-30

### Added
- **Two-pane Compare &amp; Sync tab** — each side is independently Local or an FTP/FTPS/SFTP connection; per-pane folder navigation; a Compare button that diffs by name + size + existence; checkboxes to select items; and sync the checked items in a chosen direction via **Relay (MITM)**, **Direct download+upload**, **Plain FTP**, or **FXP** (best-effort, auto-falls back to Direct). New `_a=xfer_direct/xfer_relay/xfer_ftp/xfer_fxp` endpoints.
- **File operations** — rename / duplicate / move for local files (`_a=rename/move/dup`) and over FTP (`_a=ftp_rename/ftp_move/ftp_dup`).
- **iOS light &amp; dark theme** — refactored the hardcoded dark palette into light + dark token sets driven by `prefers-color-scheme`, with a manual Auto / Light / Dark header toggle (persisted) and the brand orange accent preserved. The tab bar became a connected segmented control.
- **Startup permission check** — a dismissible banner warns when the script cannot read/write its own folder.

### Changed
- Version bumped to 2.7.0.

---

## v2.5.0 — 2026-05-29

### Added
- **MITM Relay bulk mode** — a "Bulk" toggle next to the Source URL field in MITM Relay mode switches between single-URL input and a multi-URL textarea (one URL per line). Each URL is relayed through the MITM server sequentially: the per-item destination filename is derived from the URL, and the shared MITM Server URL, Destination Folder, and "Delete from MITM after transfer" settings apply to every item. Per-item status rows (queued → spinner → ✓ size / ✗ error), an animated progress bar, a "X / N done" counter, and a clickable local URL per success — mirroring Direct Upload bulk mode. Bulk preference is persisted in `localStorage`; the single-input `required` attributes are toggled off in bulk mode so the hidden fields don't block submission.
- **New AJAX endpoint** `_a=mitm_fetch` — relays a single source URL through the MITM server to this server (fetch on relay → download to here → optional delete from relay) and returns JSON (`ok`, `url`, `size`, `mitm_deleted`).

### Changed
- Version bumped to 2.5.0.

---

## v2.4.0 — 2026-05-03

### Fixed
- **FTP folder navigation** — folder names and breadcrumb segments were using inline `onclick` attributes. Clicks landing on the embedded SVG icon instead of the text didn't reliably bubble to the span's handler in all browsers. Replaced with `data-ftpnav` attributes + `addEventListener` delegation attached after each `innerHTML` render. Both the file table and the breadcrumb bar use this pattern.

### Added
- **FTP Download-to Folder** — new "Download-to Folder" input in the FTP connection form. The entered subfolder is passed as `_folder` to every "Copy to Server" (`_a=ftp_copy`) call, so remote files land in a specific directory on this server instead of always the root. Saved and restored via `localStorage`.

### Changed
- Layout max-width widened from 700 px to 1000 px.
- Direct Upload bulk mode now hides the "Destination Filename" field (it is unused when uploading multiple URLs).
- Version bumped to 2.4.0.

---

## v2.3.0 — 2026-05-03

### Added
- **FTP bulk actions** — checkboxes on every row in the FTP Browser, with a select-all toggle in the table header. A bulk action bar (hidden until at least one item is checked) exposes two actions: **Copy URLs** (collects all checked web URLs, applies strip prefix, copies to clipboard) and **Delete Selected** (single confirm dialog → serial delete of all checked items → list reload).
- **Direct Upload bulk mode** — a "Bulk" toggle button next to the URL field switches between single-URL input and a multi-URL textarea. Each URL is downloaded sequentially via the existing `_a=fetch` AJAX endpoint. Status updates per item (queued → spinner → ✓ size + clickable local URL / ✗ error message), an animated progress bar, and a "X / N done" counter. Bulk mode preference is persisted in `localStorage`.
- **Configurable FTP path strip-prefix** — new "Strip Path Prefix" input in the FTP connection form. The entered prefix (e.g. `/www`) is stripped from the left of every remote path before building the Copy URL, so `/www/1/file.mp4` becomes `https://dl.example.com/1/file.mp4`. Saved and restored via `localStorage`.
- **Numeric (octal) permissions** — both the local file browser and the FTP browser now display permissions as `symbolic octal` (e.g. `-rwxr-xr-x 755`). Hovering shows a human-readable tooltip (`Owner: read write exec · Group: read exec · Others: read exec`).
  - PHP `perms_sym_to_octal()` converts symbolic FTP rawlist strings to octal.
  - PHP `perms_int_to_sym()` converts `fileperms()` integers to symbolic strings for the local browser.
- **Self-update from GitHub** — "Update" button in the header nav triggers `_a=check_update`, which queries the GitHub Releases API for the latest version. If a newer release is found, a confirmation dialog offers to run `_a=do_update`: the new `upload.php` is downloaded, its `APP_VER` is verified, the current file is backed up as `upload.php.bak`, and the script is replaced in-place.
- **New AJAX endpoints**: `_a=check_update`, `_a=do_update`.

### Changed
- `ftpRender()` rewritten to support checkboxes, bulk bar, strip prefix, and octal permissions.
- `ajax_ls()` (local file browser) now returns `perms_octal` and `perms_sym` fields alongside existing item data.
- `parse_ftp_rawlist()` now returns `perms_octal` per item.
- Version bumped to 2.2.0.

---

## v2.1.0 — 2026-05-02

### Added
- **FTP Browser tab** — third tab in the form alongside "Direct Upload" and "MITM Relay". Connect to any FTP, FTPS (TLS), or SFTP server and browse its file tree without leaving the page.
- **Connection form** — host, port (default 21), username, password, protocol selector (FTP / FTPS / SFTP), and an optional Web Base URL field. All credentials are posted per-request; no session storage.
- **File tree view** — columns for Name, Size, Modified (human-readable), and Permissions. Directories are clickable; a breadcrumb bar shows the current path with click-to-navigate segments.
- **`_a=ftp_ls` AJAX endpoint** — lists a remote directory. FTP/FTPS uses PHP native `ftp_rawlist()`; SFTP uses `curl sftp://` with libssh2. Returns items sorted directories-first.
- **`_a=ftp_del` AJAX endpoint** — deletes a remote file or directory. FTP/FTPS via `ftp_delete()`/`ftp_rmdir()`; SFTP via the `ssh2` PHP extension if available, otherwise returns a clear unsupported message.
- **`_a=ftp_copy` AJAX endpoint** — pulls a remote file down to the local server using `curl` with an `ftp://`, `ftps://`, or `sftp://` URL. Returns the resulting local HTTP URL.
- **Copy Path button** — copies the bare remote path (e.g. `/backups/db.sql.gz`) to the clipboard.
- **Copy URL button** — combines the optional Web Base URL with the remote path to produce a full HTTP URL (e.g. `https://dl.example.com/backups/db.sql.gz`). Disabled when no base URL is set.
- **Copy to Server button** — transfers the remote file to the directory where `upload.php` lives; shows the resulting local URL in the activity log.
- **Activity log panel** — scrollable, monospace, timestamped entries (connect, list, delete, copy) below the file tree. Includes a Clear button.
- **SSL/TLS acceptance** — FTPS skips peer/host verification via PHP stream context; SFTP and FTP-over-curl use `CURLOPT_SSL_VERIFYPEER=0` / `CURLOPT_SSL_VERIFYHOST=0`. Self-signed and unknown certs are accepted.
- **localStorage persistence** — host, port, username, protocol, and Web Base URL are saved and restored on every tab switch and page reload. Password is never persisted.

### Changed
- Version bumped to 2.1.0.

---

## v2.0.0 — 2026-04-30

### Added
- **MITM relay mode** — new "MITM Relay" tab in the form. Provide a MITM server URL (another server running `upload.php`), the source URL, and a filename. The current server POSTs `_a=fetch` to the MITM server, waits for it to download the file, then downloads from the MITM server directly. Optionally auto-deletes from MITM when done.
- **`_a=fetch` AJAX endpoint** — accepts `url`, `_name`, `_folder`; downloads the URL to this server; returns JSON `{ok, url, path, size, name, folder}`. Used by the MITM caller.
- **`_a=del_by_name` AJAX endpoint** — accepts `_name`, `_folder`; deletes a file by name; returns JSON `{ok, msg}`. Used for MITM cleanup.
- **CLI `--mitm=<URL>`** — MITM relay mode from the terminal; `--mitm-keep` to skip MITM cleanup.
- **Phosphor SVG icons** — all emoji in buttons and modal headers replaced with inline Phosphor SVG paths via a `ph()` helper function. Zero external requests; icons are embedded directly in the PHP file.
- **Mode tab switcher** — "Direct Upload" and "MITM Relay" tabs above the form, with selection persisted in `localStorage`.
- **Wider content area** — `.main` max-width increased from 600 px to 700 px.

### Changed
- Font sizes bumped ~6 % across the board (base `16px` → `17px`; all rem values scaled).
- Version bumped to 2.0.0.

### Notes
- No ZIP extraction or WordPress installer in MITM mode by design.
- Both servers (caller and relay) must run upload.php v2.0.0+.

---

## v1.9.2 — 2026-04-30

### Added
- **Dark theme** — GitHub-dark-style color palette (`#0d1117` background, `#161b22` cards, orange `#f0883e` accent). Replaces the previous light design.
- **Top-bar progress line** — 3 px fixed line at the top of the page fills left-to-right during download. Replaces the old body-background gradient approach.
- **ETA display** — progress area now shows percentage, bytes transferred / total, elapsed time, and estimated time remaining.
- **File browser popup** — AJAX-powered modal (`Files` button in header) to navigate the server filesystem: list dirs/files with human-readable sizes and modification dates, copy HTTP URL per file, delete with confirmation dialog, multi-select checkboxes with bulk "Delete Selected" and "Copy Selected URLs".
- **PHP Info modal** — `PHP Info` button in header opens a dark, curated info panel as a popup instead of navigating away. Full `phpinfo()` still opens in a new tab.
- **Help / CLI guide popup** — `? Help` button opens a modal with PHP CLI usage and all web endpoint references.
- **PHP CLI mode** — run `php upload.php --url=... --name=... [--folder=...] [--extract] [--wpinstall] [--delete] [--help]` directly from the terminal with a progress bar in the console.
- **iOS-style pill buttons** — all buttons use `border-radius: 980px` with filled, system-color backgrounds.
- **Minified CSS/JS** — all inline styles and scripts are minified; HTML whitespace is compressed.

### Changed
- Some UI elements and colors updated for better contrast and a more modern look.
- Version scheme changed to semver (`v1.9.0`) across all files.
- Header redesigned: compact sticky bar with logo left, nav buttons right.
- Footer redesigned: minimal single-line with author and GitHub links.
- `PHP Info` action is now a popup modal; `?info=1` query param is no longer used.
- Progress container is pre-rendered in the page; no longer injected into `h1` via JS.
- `human_timing` refactored into `human_timing2(seconds)` + `human_timing(start)` wrapper.

### Security
- File browser uses PHP filesystem permissions as the access boundary; the script itself cannot be deleted via the browser.

---

## v1.8.0

### Added
- **Inline SVG BlackSwan icon** — favicon and header logo served as a single `data:image/svg+xml,…` URI. No external fetches; renders on air-gapped servers.
- **Delete-File action** — completion screen offers a "Delete File" button (`?delete_file=…`). Secured with `realpath()` + scope check.
- **Output-buffer padding** — `flush_buffers(true)` emits a 4 KB HTML comment ~once per 8 seconds to defeat proxy buffering.
- `set_time_limit(0)` — removes the PHP execution time cap.

### Changed
- Self-destruction and file-deletion exit screens carry inline CSS so they render correctly before page styles load.
- Header logo moved to a CSS class instead of a duplicated inline `data:` URI.

### Security
- `?delete_file=` strictly path-scopes deletions to `__DIR__` and refuses to delete the script itself.

---

## v1.7.0 *(unreleased — superseded by v1.8.0)*

### Added
- **iOS-style toggles** for opt-in features (default OFF).
- **Universal archive extraction** toggle — `.zip`, `.tar`, `.tar.gz`, `.tgz`, `.gz`.
- **WordPress installer** as a separate explicit toggle.
- WordPress installer keeps only the latest default theme, wipes default plugins, writes `robots.txt` blocking all crawlers.
- **Copy buttons** on the completion screen for source and destination URL.
- **Toast notification** ("Copied to clipboard").
- **PHP Info panel** (`?info=1`) — curated two-column view.
- **Full `phpinfo()` view** (`?phpinfo=1`).
- Mobile-responsive layout.

### Changed
- **Download engine rewritten on cURL** with `CURLOPT_PROGRESSFUNCTION` — replaces the old dual `fopen`/`fread` path.
- Progress UI throttled to ~5 fps.
- Destination URL built from `dirname($_SERVER['PHP_SELF'])`.

### Fixed
- Path traversal hardening on destination folder and filename inputs.
- URL validation via `filter_var(... FILTER_VALIDATE_URL)`.
- File handles closed on cURL error path.
- `human_filesize()` returns `"0 B"` for zero-byte input.

---

## v1.6.0

- Added `?delete_file=` action to remove the just-uploaded file.
- Added `?force=1` switch to force the cURL download path.
- Replaced externally-hosted PNG favicon with inline SVG `data:` URI.
- Periodic output padding during download to keep buffered proxies from holding the response.

## v1.5.0

- Internal refactors and stability improvements.

## v1.4.0

- Added WordPress-Ready mode: extract WordPress ZIP and move contents to root.
- Added Self-Destruct link to the finish screen.

## v1.3.0

- Added Self-Destruct feature.

## v1.2.0

- New features and stability improvements.

## v0.8.0

- Compatibility with non-SSL servers and DirectAdmin hosting (cURL fallback).

## v0.7.0

- Auto file-name filler from URL.
- Back-to-Root button.

## v0.6.0

- Timer display: elapsed and total time.

## v0.5.0

- Stability improvements for large files.

## v0.4.0

- Fixed file-size detection error.

## v0.3.0

- Initial styling and visual pass.

## v0.2.0

- Real-time progress bar while uploading.

## v0.1.0

- Initial release — 2020-11-15 (1399-08-25).
