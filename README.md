# Modx Clickatell SMS Event Notification
This is a Modx events plugin that sends you an sms if someone logs in or creates new resources on your modx installation

# Installation
Move the folders to this path assets/elements/plugins

Add a new plugin via the manager and point a static path to the files path assets/elements/plugins/clickatellloginevent.event.php and click save.

You can edit the file to add your API details 

define("USERNAME", "your_clickatell_api_user_name");

define("PASSWORD", "your_clickatell_api_password");

define("API_ID", "clickatell_api_id_here");

define("PHONE_NO", "the_phone_number_you_want_to_send_to");
