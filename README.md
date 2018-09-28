Import database using following sql dump 
DATABASE-DUMP :
DATABASE-DUMP/gpl.sql



# GPL Application Skeleton

Git Clone the Project.
Switch to Branch `master`


You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for application and various files
would have been modified as per needs, there isn't a way to provide
automated upgrades, so update manually.

## Configuration

Edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

Please update `config/app.php` Line `251`, `258`, `259`, with your local host credentials for MYSQL
