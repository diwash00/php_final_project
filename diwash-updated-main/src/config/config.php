<?php


//---------------------------------------------------------
//Debug ?

define('DEBUG_MODE', false);

//---------------------------------------------------------

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');

define('DB_NAME', 'mvc_php_blog');
define('DB_USER', 'root');
define('DB_PASS', '');

//---------------------------------------------------------

define('URL', '/Devloper-blog/src/');

//---------------------------------------------------------

define('MAXIMUM_LOGINS', 15);

//---------------------------------------------------------

// Set values for Pagination 
define('ACTIVE_PAGE', 0);
define('CARDS_PER_PAGE', 6);

//---------------------------------------------------------


define('SITENAME', 'Dev Blogs');

//---------------------------------------------------------

define('DEFAULT_IMG', URL . 'public/img/default.jpg');

//---------------------------------------------------------

define('IMAGE_UPLOADS_PATH', 'uploads/images');
define('IMAGE_DEFAULT_EXT', '.jpg');
define('IMAGE_THUMB_EXT', '-thumb');
define('IMAGE_THUMB_WIDTH', 200);
define('IMAGE_THUMB_HEIGHT', 200);