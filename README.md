# Slug field for the TYPO3 calendar (cal) extension
This little helper extension adds a new slug field to the TYPO3 calendar (cal) extension. You can see it as an example on how to add a slug field to any extension and use the code for your own ideas/projects. The reason for choosing the calendar extension is based on a user request.

### Important note:
You have to take care of the 'routeEnhancers' configuration yourself, in order to make your event URLs look nice in the frontend. This extension only provides information about how to add the necessary fields and functions!

Here's more about TYPO3 Route Enhancers (Advanced Routing Configuration):
https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/Routing/AdvancedRoutingConfiguration.html

## What does it do?
- Adds a new field called 'slug' to the table 'tx_cal_event'
- Adds a new input field of type 'slug' to the backend form

## New slug field in the backend
![Screenshot Backend](https://raw.githubusercontent.com/koehlersimon/cal_slug/master/Resources/Public/Images/cal-slug-screen-1.jpg)

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

## Slug-Extension editors view
![Screenshot Slug Module](https://raw.githubusercontent.com/koehlersimon/cal_slug/master/Resources/Public/Images/cal-slug-screen-2.jpg)

## Do you want to learn TYPO3? Here's what you need:
Video Training TYPO3 9 LTS (German language) https://www.digistore24.com/redir/246076/GOCHILLA/
