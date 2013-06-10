CHANGELOG for 0.2.x
===================

This changelog references the relevant changes (bug and security fixes) done
in 0.2 minor versions.

* 0.2.5 (2009-01-19)

 * Spaces or tabs on the first line of text are no longer trimmed (e.g. typographic indent)
 * Automatic generation of a table of contents added, see documentation for details
 * If blank string given, blank string is returned instead of “<p></p>”
 * Headings automatically title-cased
 * Heading HTML tags already present in source text not being removed
 * Links correctly matched inside inline quote, `<` is no longer supported inside a link description

* 0.2.4 (2008-12-31)

 * Added testing script to verify output (incomplete)
 * `**strong**` will now give `<strong>*strong*</strong>` instead of `<strong>*strong</strong>*`
 * Lines being conjoined even if word-wrapping was off
 * Correctly indent small blocks as paragraphs, also allow small blocks within lists/blockquotes

* 0.2.3.1 (2008-12-17)

 * Links not working, introduced in previous version

* 0.2.3 (2008-12-17)

 * `nofollow` support for links, prefix URLs with “!”
 * Allow pre blocks within lists, definition lists and blockquotes
 * Blockquotes/lists not converting if last thing in document

* 0.2.2 (2008-12-14)

 * Soft-space as newline marker has been removed. Too many problems involved with it being invisible unless your
  text-editor has white-space on and differentiates spaces from soft-spaces. Instead, use the ‘not’ character “`¬`”.
  This is located directly on the keyboard on {PC}s and via Alt+L on Mac.

* 0.2.1 (2008-12-11)

 * Some HTML tidying not working when indent>0

* 0.2 (2008-12-11)

 * Initial Beta release
