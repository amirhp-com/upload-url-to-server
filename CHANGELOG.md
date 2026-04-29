# Changelog

All notable changes to **BlackSwan Upload File from URL to Web Server** are documented here.

The format is loosely based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

---

## v18

### Added
- **Inline SVG BlackSwan icon** — favicon and header logo are served as a single base64-free `data:image/svg+xml,…` URI. No more external GitHub-raw asset fetches; the logo renders even on air-gapped servers.
- **Delete-File action** — completion screen now offers a "Delete File" button that removes the just-uploaded file (`?delete_file=…`). Secured with `realpath()` + scope check so only files inside the script's own directory can be deleted, and `upload.php` itself is excluded.
- **Output-buffer padding** — `flush_buffers(true)` periodically emits a 4 KB HTML comment to defeat output buffering on nginx/Cloudflare/proxy layers that hold the response back. Padding is throttled to ~once per 8 seconds so it costs almost nothing on fast links.
- `set_time_limit(0)` — removes the artificial 24 h cap; downloads can run as long as the host allows.

### Changed
- The "Self-destruction" and "File deletion" exit screens are now self-styled (inline CSS) so they look right even when the page styles haven't loaded.
- Header logo moved into a real CSS class (`.aw .swan`) instead of a duplicated inline-style data URI.

### Security
- `?delete_file=` strictly path-scopes deletions to `__DIR__` and refuses to delete the script itself; previous variants accepted any path the PHP user could write to.

---

## v17 *(unreleased — superseded by v18)*

### Added
- **iOS-style toggles** for opt-in features (default OFF) — replaces inline checkboxes.
- **Universal archive extraction** toggle — supports `.zip`, `.tar`, `.tar.gz`, `.tgz`, and `.gz` (via `ZipArchive` and `PharData`).
- **WordPress installer** as a separate, explicit toggle — works with any WordPress zip URL, not just `wordpress.org/latest.zip`.
- WordPress installer now **keeps only the latest default theme** (natural-sort, last entry) and removes older bundled themes.
- WordPress installer **wipes every default plugin** and drops a `Silence is golden` `index.php` placeholder back into `wp-content/plugins/`.
- WordPress installer **writes a `robots.txt`** that blocks all crawlers (`User-agent: * / Disallow: /`).
- **Copy buttons** on the completion screen for both source URL and destination URL.
- **Toast notification** ("Copied to clipboard") with iOS-style fade in/out.
- **PHP Info panel** (`?info=1`) — curated, two-column view of PHP environment, server software, disk space, loaded extensions, and key `$_SERVER` values.
- **Full `phpinfo()` view** (`?phpinfo=1`) for deeper debugging.
- Cleanup also removes `wp-config-sample.php` in addition to `license.txt`, `readme.html`, `xmlrpc.php`.
- Mobile-responsive layout for the form on small screens.

### Changed
- **Download engine rewritten on cURL** with a 64 KB buffer and `CURLOPT_PROGRESSFUNCTION` — replaces the dual `fopen`/`fread` + manual fallback path. One code path now serves SSL, non-SSL, DirectAdmin, and follows redirects automatically.
- Progress UI updates are throttled to ~5 fps instead of every 2 KB chunk — dramatically less DOM thrashing on fast links.
- All inline `document.querySelector('h1').innerHTML +=` calls replaced with reusable `updateProgress()` / `appendStatus()` JS helpers.
- Destination URL is now built from `dirname($_SERVER['PHP_SELF'])` so the link is correct when `upload.php` lives in a subdirectory.
- Toggle-row UI replaces the old inline checkbox-and-label pattern.

### Fixed
- **Path traversal** hardening on both the destination folder and filename inputs (`..`, `\0`, mixed slashes, leading slashes are stripped).
- URL validation via `filter_var(... FILTER_VALIDATE_URL)` before any I/O.
- File handles are now always closed on the cURL error path (no leaked descriptors on failed downloads).
- WordPress mover safely overwrites pre-existing files/dirs at the destination instead of silently failing on `rename()`.
- `human_filesize()` no longer returns `"ERR"` for legitimate small files; it returns `"0 B"` only for zero-byte input.
- Output buffering (`ob_*`) cleanup is now consistent — `flush_buffers()` helper centralises the dance.
- Self-destruct page no longer relies on the `<head>` styles already being parsed (it carries inline styles).

### Security
- `<meta name="robots" content="noindex,nofollow">` added to the page itself.
- Self-destruct link still works exactly as before, with no extra confirmation step (intentional).

---

## v16

- Added a `?delete_file=` action to remove the just-uploaded file from the completion screen.
- Added a `?force=1` switch that forces the cURL-based download path (useful when `get_headers()` was unreliable on some hosts).
- Replaced the externally-hosted PNG favicon with an inline SVG `data:` URI.
- Periodic output padding (`str_pad`) every 10 s during download to keep buffered proxies from holding the response.
- Polishing pass on UI labels.

## v15

- Internal refactors and stability improvements (no public-facing changes).

## v14

- Added WordPress-Ready mode: extract the latest WordPress ZIP and move its contents to root.
- Added Self-Destruct link to the finish screen after upload completes.

## v13

- Added Self-Destruct feature.

## v12

- New features and stability improvements.

## v8

- Compatibility with non-SSL servers and DirectAdmin hosting (cURL fallback path).

## v7

- Auto file-name filler from URL.
- Back-to-Root button.

## v6

- Timer display: shows elapsed and total time.

## v5

- More stability when processing large files.

## v4

- Fixed file-size detection error.

## v3

- Initial styling and visual pass.

## v2

- Real-time progress bar while uploading.

## v1

- Initial release — 2020-11-15 (1399-08-25).
