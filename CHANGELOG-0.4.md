CHANGELOG for 0.4.x
===================

This changelog references the relevant changes (bug and security fixes) done
in 0.4 minor versions.

* 0.4.5 (2012-01-14)

 * 2c91222: Incorrect text-escaping in e-mode regexes caused "$" to break text
   in table of contents (essentially text was being interpreted as code)

* 0.4.4 (2011-02-09)

 * cc7b3d0: Added another few warning-throwing checks.
 * 4c2ded7: Stop throwing a Notice when no title is specified for a link, fix
   two more Notices that apply to e-mail links, add support for the HTML5 `hgroup`
   element (this is paragraph processing, not syntax support)

* 0.4.3 (2010-10-05)

 * 46dc03b: Large update to documentation, including how to mix HTML and ReMarkable
   syntax, changed command line to accept source text from stdin--*will break existing
   code*--see source for examples, added options parameter for output preferences,
   this will expand over time, titles allowed on links `<description (/href) "title">`

* 0.4.2 (2010-08-22)

 * 43a64eb: Spelling mistake with `<figcaption>`, a hyperlink as the only thing on a
   line should not be wrapped in a paragraph

* 0.4.1 (2010-08-15)

 * Added `{{dfn|definition}}` support

* 0.4.0 (2010-08-12)

 * Anything allowed in the bookmark portion of hyperlink URLs (this is being abused by more and more sites now)
 * Changed en-dash syntax to “ -to- ” (requires spaces either side) because it was clashing too much with common
   writing like “up-to-date” &c.
 * If a hyperlink is the only thing on a line, it does not get wrapped in a paragraph
   (useful for block images / figures) This is probably not the right thing to do, and a bit specific to camendesign
 * Added image linking `<"alt" thumb.jpg = image.png>`
 * Syntax for HTML5 <figure>
 * Don’t wrongly exit if calling a PHP script from the command line that then includes ReMarkable
 * Do not warn if `$_SERVER['argc']` is not present (thanks Andrew Rowls)
 * Title casing now capitalises correctly after em/en dash
 * DTs now support IDs. Use `:: (#id) …`
 * LIs now support IDs. Use `• (#id)` before the tab character (any bullet type allowed),
   you can now also indent the following lines more to account for an ID bumping the margin to two tabs or more
 * Added “¾” to autocorrection
 * Ellipses converted to unicode “...” => “…”
 * Accented letters Title Casing properly in headings
 * Blank line between DT & DD no longer causes infinite loop
 * Syntax language in pre fence can now contain numbers, e.g. “VB6”
