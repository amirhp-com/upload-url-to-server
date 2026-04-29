# v1.9.0 TODO

## T1 — Dark iOS UI redesign + minify CSS/JS
- [ ] Dark theme (#1c1c1e bg, #2c2c2e cards, #f2f2f7 text)
- [ ] iOS-style buttons (pill shape, filled, system colors)
- [ ] New header (compact, logo left, links right)
- [ ] New footer (compact)
- [ ] Minify all inline CSS and JS
- [ ] Compress HTML whitespace

## T2 — Progress bar overhaul
- [ ] Thin line (3-4px) at top OR bottom of page filling left-to-right
- [ ] Remove body-background gradient approach
- [ ] Show: percentage, bytes transferred/total, ETA
- [ ] Keep real-time streaming via flush_buffers

## T3 — PHP Info as popup
- [ ] ?info=1 → show modal popup instead of separate page
- [ ] PHP Info button opens popup (not navigate away)
- [ ] "View full phpinfo()" opens new tab (?phpinfo=1)
- [ ] Back button on info page → script URL (dirname path)

## T4 — File browser popup
- [ ] Button to open file browser modal
- [ ] AJAX: POST to same script with special action param
- [ ] Navigate: current dir, parent dirs, sibling dirs
- [ ] List files & folders with human-readable sizes
- [ ] Copy URL button per row (HTTP URL)
- [ ] Delete button per row → confirmation dialog → delete
- [ ] Checkbox multi-select
- [ ] Bulk: Delete Selected (confirm) / Copy Selected URLs (newline-sep)
- [ ] Scoped: cannot navigate above server root or leave safe zone

## T5 — PHP CLI support + help/guide popup
- [ ] Help button opens guide popup
- [ ] Show PHP CLI usage: `php upload.php --url=... --name=... --folder=...`
- [ ] CLI mode: parse $argv, run download headlessly, print progress to stdout
- [ ] Document all CLI flags in help popup

## T6 — Version & versioning update
- [ ] Change version to 1.9.0 in all places
- [ ] Update CHANGELOG: rename v18→v1.8.0, v17→v1.7.0, v16→v1.6.0, etc.
- [ ] Update README with new version and features

## T7 — README & CHANGELOG update
- [ ] Add v1.9.0 section to CHANGELOG
- [ ] Update README screenshots section, feature list, version badge

## T8 — Clean up
- [ ] No AI/Claude traces in code, comments, git commit messages
- [ ] No "Claude" or "AI" anywhere in output HTML
- [ ] Update file header comment (version, date)
