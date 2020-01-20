# Slug field for the TYPO3 calendar (cal) extension
This little helper extension adds a new slug field to the TYPO3 calendar (cal) extension. You can see it as an example on how to add a slug field to any extension and use the code for your own ideas/projects. The reason for choosing the calendar extension is based on a user request.

### Important note:
You have to take care of the 'routeEnhancers' configuration yourself, in order to make your event URLs look nice in the frontend. This extension only provides information about how to add the necessary fields and functions!

## What does it do?
- Adds a new field 'slug' to the table 'tx_cal_event'
- Adds a new input fields of renderType 'slug' to the backend form

## Making the new field work with the "Slug" Extension
```
# Slug module configuration for cal event records
module.tx_slug {
    settings{
        additionalTables{
            tx_cal_event{
                pid = 0
                label = Calendar Events
                slugField = slug
                titleField = title
                icon = EXT:cal/Resources/Public/Icons/Extension.svg
            }
        }
    }
}
```

## Do you want to learn TYPO3? Here's what you need:
Video Training TYPO3 9 LTS (German language) https://www.digistore24.com/redir/246076/GOCHILLA/
