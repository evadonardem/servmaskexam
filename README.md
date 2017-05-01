# SERVMASK EXAM

## Create a wordress plugin.
The plugin needs to have a page in the backend (wp-admin). The page of the plugin will display:
* Enter path to file: text field
* Enter wordpress site url: text field
* Username: text field
* Password: password field
* Transfer: submit button

There should be javascript validation of all fields. All fields are required.
When the submit button is pressed, the plugin needs to:
1. Login to wordpress site as specified in the wordpress url
2. Activate the plugin that you are creating.
3. Transfer the specified file

If this is too difficult to implement, you can opt for:
1. Install the plugin on source and destination websites
2. The destination will generate a url
3. Use that URL on the source site to transfer the file
