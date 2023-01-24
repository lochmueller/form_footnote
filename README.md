# EXT:form_footnote

## Installation

1. Load the extension
2. Overwrite the `Field/Field.html` partial and add the footnote rendering `<f:render partial="Field/Footnote" arguments="{_all}" />` (e.g. the require asterisk)
3. Add Output of the notes in `Form.html` (example below)
4. Done. Have fun!

Example output:
```
<footnote:get>
    <f:for each="footnotes" as="note" key="number">
        <sup>{number}</sup> {note}<br />
    </f:for>
</footnote:get>
```
