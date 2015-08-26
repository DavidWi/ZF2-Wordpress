# ZF2-Wordpress
This is a Wordpress Module for Zend Framework 2. It integrates Wordpress in a Zend Framework 2 Application.

How it works:
It's catching all unmatched Requests and directs them to Wordpress.
// TODO Alternativ sollte es möglich sein, die Wordpress-Routen manuell zu pflegen

What you have to do to make it working:

Move your wordpress-Folder to your_project_path/public. //MyTODO integrate the Foldername to Config

In your Wordpress-Database go to wp_options and make sure that the option "siteurl" is set to "http://your.domain/wordpress"

Activate the Module in application.config.php located in your_project_path/config by adding it to the used modules. Afterwards it should look like that:
'modules' => array(
        'Application',
        'Wordpress',
    ),

You're done!
