<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

// Define the webserver and path parameters
// * DIR_FS_* = Filesystem directories (local/physical)
// * DIR_WS_* = Webserver directories (virtual/URL)
  define('HTTP_SERVER', 'http://ec2-3-83-143-133.compute-1.amazonaws.com'); // eg, http://localhost - should not be empty for productive servers
  define('HTTPS_SERVER', 'https://ec2-3-83-143-133.compute-1.amazonaws.com'); // eg, https://localhost - should not be empty for productive servers
  define('ENABLE_SSL', false); // secure webserver for checkout procedure?
  define('HTTP_COOKIE_DOMAIN', '');
  define('HTTPS_COOKIE_DOMAIN', '');
  define('HTTP_COOKIE_PATH', '');
  define('HTTPS_COOKIE_PATH', '');
  define('DIR_WS_HTTP_CATALOG', '');
  define('DIR_WS_HTTPS_CATALOG', '');

  define('DIR_FS_CATALOG', dirname($_SERVER['SCRIPT_FILENAME']) . '/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

// define our database connection
  define('DB_SERVER', 'ec2-3-83-143-133.compute-1.amazonaws.com'); // eg, localhost - should not be empty for productive servers
  define('DB_SERVER_USERNAME', 'mijail');
  define('DB_SERVER_PASSWORD', 'THEBESt-20');
  define('DB_DATABASE', 'comercio');
  //define('DB_DATABASE', 'osCommerce');
  define('USE_PCONNECT', 'false'); // use persistent connections?
  define('STORE_SESSIONS', ''); // leave empty '' for default handler or set to 'mysql'
?>
