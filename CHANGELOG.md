# Changelog

All notable changes to **BlackSwan Upload File from URL to Web Server** are documented here.

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
