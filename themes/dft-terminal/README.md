# dft-terminal

A Hugo theme that prints a one-page site as Ubuntu-style terminal windows on a
dark gradient. Built for [dft.one](https://dft.one/) from the site's original
hand-written HTML and CSS.

Requires Hugo 0.158.0 or later (the standard edition is enough).

## Windows

The home page prints every page in `content/terminals/` as a terminal window,
ordered by `weight`. That section is headless: its `_index.md` sets `build`
options so the windows are not published as pages of their own.

```yaml
---
title: Approach          # toolbar: "DFT - Approach"
weight: 30               # order on the page
command: dft --approach  # echoed by a prompt at the top (optional)
card: top                # windows with the same card id stack in one card;
                         # the id is also the anchor (#top). Default: file name
toolbar: DFT             # replaces the whole toolbar title (optional)
prompt: false            # drops the closing prompt with the blinking cursor
---
```

`hugo new terminals/services.md` creates a window from the archetype.

The body is Markdown, printed as terminal text:

| Markdown                        | Printed as                                   |
| ------------------------------- | -------------------------------------------- |
| paragraphs and other blocks     | separated by one blank line                  |
| `- item`                        | `  • item`                                   |
| `1. item`                       | `  1. item`                                  |
| `Term` then `: definition`      | `- Term` then `  - definition`               |
| `> text`                        | text indented two columns                    |
| fenced code (```` ```text ````) | exactly as typed, for ASCII art              |
| `![alt](photo.jpg)`             | framed, centered image (page bundle or `assets/`) |
| `**bold**`, headings            | bright white                                 |

Keep this in the site's `hugo.toml`, which a theme cannot set for you:

```toml
[markup.goldmark.extensions.typographer]
  disable = true
```

Otherwise Hugo turns `"`, `--` and `...` into typographic characters that a
terminal would never print.

## Site settings

```toml
[params]
  viewport = 'width=580, initial-scale=0.7'  # default: phones zoom out to fit the 520px windows

[params.brand]   # header, left
  text = '<span>info</span>@<span>DFT</span>.one'  # <span> parts are white, the rest orange
  url = 'mailto:info@dft.one'                       # optional

[params.handle]  # header, right, and footer, left
  text = '<span>LinkedIn/</span>daviftorres'
  url = ''                                          # optional

[params.terminal]
  title = 'DFT'          # toolbar prefix (default: the site title)
  user = 'Secured@DFT'   # prompt: Secured@DFT:~$
  path = '~'
```

`menus.main` adds links to the header after the handle; entries with a
`parent` become a dropdown. `menus.footer` adds links to the footer.

## Other pages

Any other page or section renders as a single window, and `404.html` prints a
"page not found" window. Fonts (Ubuntu, Ubuntu Mono) load from Google Fonts.

The theme writes its links relative to each page (`./css/…`, `../css/…`), so
the built site works under any base path and straight from disk. Don't enable
Hugo's `relativeURLs`: it breaks links when `baseURL` has a path (as on a
GitHub Pages project site). The 404 page links with absolute URLs from
`baseURL`, because hosts serve it at whatever path was requested.

## Styling

Colors, fonts and the window width are custom properties at the top of
`assets/css/main.css`. To change them for one site, copy that file to the
site's own `assets/css/main.css`, which takes precedence over the theme's.
