# TYPO3 Form distribution

This TYPO3 extension can be used as a starter kit to configure individual forms with custom templates, all based on the EXT:form Framework which was introduced in TYPO3 v8 LTS.

## Features:
- YAML configuration file with useful adaptions
- basic TypoScript-Setup
- basic and (of course) extendable database table to save form data
- several example forms to start with (see below)

## Example form definitions:
### Basic contact form
- **EmailToReceiver** finisher
- **Confirmation** finisher
- **SaveToDatabase** finisher

### Extended contact form
- Multiple pages with fieldsets
- every field that is available as a database field, too
- Field for file upload
- **SaveToDatabase** finisher, correctly referring to the sys_file entry (for the uploaded file) with sys_file_reference

### Upload form
- **SaveToDatabase** finisher, works the same as above