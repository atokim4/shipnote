=== Shipnote ===
Contributors: atokim4
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A block theme for small software products: landing page, pricing, docs and a changelog of dated release notes.

== Description ==

Shipnote is a block theme for the website of a small software product. It covers the pages such a site needs: a landing page with a framed product screenshot, features, pricing and FAQ, docs pages with a sidebar, and a changelog page that lists release notes by date.

The look comes from paper dispatch notes: warm off-white paper, black ink rules, a signal-orange accent and monospaced dates. Headings are set in Archivo, body text in Source Serif 4 and dates and version numbers in JetBrains Mono. All fonts are bundled with the theme; it loads nothing from other servers.

Every template, part and pattern is made of core blocks, so you can change all of it in the Site Editor. No plugins are required.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click Add New Theme.
2. Search for Shipnote, then click Install and Activate.
3. Go to Appearance > Editor to edit templates, patterns and global styles.

== Frequently Asked Questions ==

= Does Shipnote collect any data? =

No. The theme does not track visitors, set cookies or load files from other servers.

= Where are the sample pricing and feature texts from? =

They are sample content written for the theme. Replace them with your own product details. The testimonials pattern is labelled "Sample quote" on purpose: only publish quotes you have permission to use.

= How do I set up the changelog? =

Create a post category with the slug "changelog" and publish each release as a post in it. The "Release notes entry" pattern gives you a version tag and Added, Fixed and Changed lists. Then create a page and choose the "Changelog (release notes list)" template. The category archive at /category/changelog/ uses the same layout.

= How do I switch to the dark look? =

Go to Appearance > Editor > Styles and pick Night shift or High contrast.

= Is the theme translation-ready? =

Yes. All strings use the shipnote text domain and languages/shipnote.pot is included.

= Can I add a contact form? =

The contact pattern has an email button and support details. Shipnote does not include a form; add one with a form plugin of your choice.

== Changelog ==

= 1.0.0 =
* Initial release.
* Templates: front page, blog, single, page, page without title, wide page, docs page with sidebar, changelog, blank, archive, search, 404.
* Patterns: hero with product screenshot, logo strip, feature grid, pricing, FAQ, testimonials (sample placeholders), call to action, release notes entry, docs page, team, contact.
* Style variations: Night shift and High contrast.

== Copyright ==

Shipnote WordPress Theme, (C) 2026 atokim4.
Shipnote is distributed under the terms of the GNU GPL v2 or later.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

* Archivo, Copyright 2020 The Archivo Project Authors (https://github.com/Omnibus-Type/Archivo).
  License: SIL Open Font License, Version 1.1, https://openfontlicense.org
  Source: https://fonts.google.com/specimen/Archivo (WOFF2 files from Fontsource 5.3.0)
* Source Serif 4, Copyright 2014 - 2023 Adobe (http://www.adobe.com/), with Reserved Font Name 'Source'.
  License: SIL Open Font License, Version 1.1, https://openfontlicense.org
  Source: https://github.com/adobe-fonts/source-serif (WOFF2 files from Fontsource 5.3.1)
* JetBrains Mono, Copyright 2020 The JetBrains Mono Project Authors (https://github.com/JetBrains/JetBrainsMono).
  License: SIL Open Font License, Version 1.1, https://openfontlicense.org
  Source: https://github.com/JetBrains/JetBrainsMono (WOFF2 files from Fontsource 5.3.0)
* assets/images/app-screen.svg, drawn for this theme, (C) 2026 atokim4, GPLv2 or later.
