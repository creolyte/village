<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
|--------------------------------------------------------------------------
| Custom Constants
|--------------------------------------------------------------------------
|
| These constants below are not from CodeIgniter.
|
*/

// Database
define('CREO_DB_HOST'							, 'localhost');
define('CREO_DB_USERNAME'						, 'root');
define('CREO_DB_PASSWORD'						, '');
define('CREO_DB_NAME'							, 'mcr_village_db');

// Tables
define('CREO_TABLE_PREFIX'						, 'mcr_');
define('CREO_TABLE_API'							, CREO_TABLE_PREFIX.'api');
define('CREO_TABLE_COOKIE'						, CREO_TABLE_PREFIX.'cookie');
define('CREO_TABLE_LOG'							, CREO_TABLE_PREFIX.'log');
define('CREO_TABLE_USER'						, CREO_TABLE_PREFIX.'user');
define('CREO_TABLE_PLACE'						, CREO_TABLE_PREFIX.'place');

define('CREO_ROOT_PATH' 						, dirname(dirname(dirname(__FILE__))));
define('CREO_MESSAGE_ERROR' 					, 'danger');
define('CREO_MESSAGE_INFO' 						, 'info');
define('CREO_MESSAGE_WARN' 						, 'warning');
define('CREO_MESSAGE_SUCCESS' 					, 'success');
define('CREO_EXCEPTION_ERROR' 					, 'danger');
define('CREO_EXCEPTION_WARN' 					, 'warn');
define('CREO_MAX_ICREO_SIZE' 					, 4194304); // 4Mb
define('CREO_MAX_ATTACHMENT_SIZE' 				, 4194304); // 4Mb
define('CREO_THUMBNAIL_ICREO_MAX_WIDTH'			, 250);
define('CREO_THUMBNAIL_ICREO_MAX_HEIGHT'		, 250);
define('CREO_VERSION'							, '1.0.000');

define('CREO_TEMPLATE_PATH'						, 'templates/default');
define('CREO_PAGE_TITLE'						, 'MCR - Village');
define('CREO_PAGE_DESCRIPTION'					, 'Mini Project');

// Company info
define('CREO_BRAND_NAME'						, 'MCR');
define('CREO_BRAND_DESCRIPTION'					, '');
define('CREO_COMPANY_URL'						, '');
define('CREO_COMPANY_WEB'						, '');
define('CREO_COMPANY_NAME'						, '');
define('CREO_COMPANY_REG_NUMBER'				, '');
define('CREO_COMPANY_ADDRESS'					, '');
define('CREO_WORKING_HOUR'						, '');
define('CREO_GENERAL_PHONE'						, '');
define('CREO_FACEBOOK_URL' 						, '');
define('CREO_BANK_ACCOUNT_NAME'					, '');

// Secret Key
define('CREO_SECRET_KEY'						, 'leTwxlQcjCdmFkUEIcWPTV227lAZNmJ5	');
define('CREO_ENCRYPTION_KEY'					, 'qRRsnz2LLAxW1oRHXZjCXg3wCSK1TBcx');

// Email
define('CREO_SYSTEM_EMAIL_NAME'					, '');
define('CREO_SYSTEM_EMAIL'						, '');
define('CREO_SYSTEM_EMAIL_DISCLAIMER'			, '');
define('CREO_ADMIN_EMAIL'						, '');
define('CREO_GENERAL_EMAIL'						, '');
define('CREO_SUPPORT_EMAIL'						, '');
define('CREO_TECH_SUPPORT_EMAIL'				, '');
define('CREO_ACCOUNT_EMAIL'						, '');
define('CREO_MAILGUN_USERNAME'					, '');

// Biling
define('CREO_BILING_COMPANY_NAME'				, '');
define('CREO_BILING_COMPANY_REG_NUMBER'			, '');
define('CREO_BILING_COMPANY_ADDRESS'			, '');
define('CREO_BILING_COMPANY_GST_NUMBER'			, ''); // 12 numbers (Will change to Tax Invoice if GST number is not empty)
define('CREO_ACCOUNT_PHONE'						, '');
define('CREO_GST_PERCENT'						, '0');
define('CREO_DEFAULT_CURRENCY'					, 'MYR');
define('CREO_PRICE_CURRENCY'					, 'RM');

define('CREO_COOKIE_NAME'						, 'FfXwUNHQf7znYvOoJOk5goLSvYIhKey8');
define('CREO_DEFAULT_TIMEZONE'					, 'Asia/Kuala_Lumpur');

