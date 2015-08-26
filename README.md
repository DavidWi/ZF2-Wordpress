# ZF2-Wordpress
This is a Wordpress Module for Zend Framework 2. It integrates Wordpress in a Zend Framework 2 Application.

## How it works:
It's catching all unmatched Requests and directs them to Wordpress.
// MyTODO Alternativ sollte es möglich sein, die Wordpress-Routen manuell zu pflegen

## Make it working:

1. Move your wordpress-Folder to your_project_path/public. If that folders name is not wordpress, please configure it in module/Wordpress/config/module.config.php

2. In your Wordpress-Database go to wp_options and make sure that the option "siteurl" is set to "http://your.domain/wordpress"

3. Activate the Module in application.config.php located in your_project_path/config by adding it to the used modules. Afterwards it should look like that:
```
'modules' => array(
        'Application',
        'Wordpress',
    ),
```
**You're done!**
