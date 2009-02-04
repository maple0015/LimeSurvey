<?php
/*
* LimeSurvey
* Copyright (C) 2007 The LimeSurvey Project Team / Carsten Schmitz
* All rights reserved.
* License: GNU/GPL License v2 or later, see LICENSE.php
* LimeSurvey is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*
* $Id$
*/

// CAUTION
// This file contains the default settings for LimeSurvey
// Do not Edit this file as it may change in future revisions of the
// software.
// Correct procedure to setup LimeSurvey is the following:
// * copy the lines corresponding to the parameter you want to change
//   from this file to the config.php file
// * edit these lines in config.php


// === Basic Setup

$databasetype       =   'mysql';       // ADOdb database driver - valid values are mysql, odbc_mssql or postgres
$databaselocation   =   'localhost';   // Network location of your Database - for odbc_mssql use the mssql servername, not localhost or IP
$databaseport       =   'default';     // The port of your Database - if you use a standard port leave on default
$databasename       =   'limesurvey';  // The name of the database that we will create
$databaseuser       =   'root';        // The name of a user with rights to create db (or if db already exists, then rights within that db)
$databasepass       =   '';            // Password of db user
$dbprefix           =   'lime_';       // A global prefix that can be added to all LimeSurvey tables. Use this if you are sharing
                                       // a database with other applications. Suggested prefix is 'lime_'
$databasetabletype  =   'myISAM';	     // Storage engine mysql should use when creating survey results tables and token tables (if mysql is used). If available, InnoDB is recommended. Default is myISAM.

// FILE LOCATIONS

$rooturl            =   "http://{$_SERVER['HTTP_HOST']}/limesurvey"; //The root web url for your limesurvey installation.

$rootdir            =   dirname(__FILE__); // This is the physical disk location for your limesurvey installation. Normally you don't have to touch this setting.
                                           // If you use IIS then you MUST enter the complete rootdir e.g. : $rootDir="C:\Inetpub\wwwroot\limesurvey"!
                                           // Some IIS installations also require to use forward slashes instead of backslashes, e.g.  $rootDir="C:/Inetpub/wwwroot/limesurvey"!
                                           // If you use OS/2 this must be the complete rootdir with FORWARD slashes e.g.: $rootDir="c:/limesurvey";!

$rootsymlinked      =   0;  // if your root document dir is symlinked LimeSurvey might have problems to find out the dir
                            // If you notice that labels are not being translated like "_ADMINISTRATION_" instead of "Administration"
                            // then try setting this to 1 .

// MOD_REWRITE ?

// Site Info
$sitename           =   'LimeSurvey';     // The official name of the site (appears in the Window title)
$scriptname         =   'admin.php';      // The name of the admin script

$defaultuser        =   'admin';          // This is the default username when LimeSurvey is installed
$defaultpass        =   'password';       // This is the default password for the default user when LimeSurvey is installed

// Site Settings
$lwcdropdowns       =   'R';              // SHOW LISTS WITH COMMENT in Public Survey as Radio Buttons (R) or Dropdown List (L)
$dropdownthreshold  =   '25';             // The number of answers to a list type question before it switches from Radio Buttons to List
                                          // Only applicable, of course, if you have chosen 'R' for $dropdowns and/or $lwcdropdowns
$repeatheadings     =   '25';             // The number of answers to show before repeating the headings in array (flexible) questions. Set to 0 to turn this feature off
$minrepeatheadings  =   3;                // The minimum number of remaing answers that are required before repeating the headings in array (flexible) questions.
$defaultlang        =   'en';             // The default language to use - the available languages are the directory names in the /locale dir - for example de = German

$translationmode    =   0;                // If interface translations are not working this might be because of a bug in your PHP version. 
                                          // Set this to '1' to activate a workaround for this bug

$timeadjust         =   0;                // Number of hours to adjust between your webserver local time and your own local time (for datestamping responses)
$allowexportalldb   =   1;                // 0 will only export prefixed tables when doing a database dump. If set to 1 ALL tables in the database will be exported
$allowmandbackwards =   1;                // Allow moving backwards (ie: << prev) through survey if a mandatory question
                                          // has not been answered. 1=Allow, 0=Deny
$deletenonvalues    =   1;                // By default, LimeSurvey does not save responses to conditional questions that haven't been answered/shown. To have LimeSurvey save these responses change this value to 0.
$shownoanswer       =   1;                // Show 'no answer' for non mandatory questions
$admintheme         =  'default';         // This setting specifys the directory where the admin finds it theme/css style files, e.g. setting 'default' points to /admin/styles/default

$defaulttemplate    =  'default';         // This setting specifys the default theme used for the 'public list' of surveys

$allowedtemplateuploads = 'gif,jpg,png';  // File types allowed to be uploaded in the templates section.

$allowedresourcesuploads = '7z,aiff,asf,avi,bmp,csv,doc,fla,flv,gif,gz,gzip,jpeg,jpg,mid,mov,mp3,mp4,mpc,mpeg,mpg,ods,odt,pdf,png,ppt,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,swf,sxc,sxw,tar,tgz,tif,tiff,txt,vsd,wav,wma,wmv,xls,xml,zip';   // File types allowed to be uploaded in the resources sections, and with the HTML Editor


$debug              =   0;      // Set this to 1 if you are looking for errors. If you still get no errors after enabling this
                                // then please check your error-logs - either in your hosting provider admin panel or in some /logs dir.
                                // LimeSurvey developers set this to 2.   
$memorylimit        =  '32M';   // This sets how much memory LimeSurvey can access. 16M is the minimum (M=mb) recommended.

$sessionlifetime    =  3600;    // How long until a survey session expires in seconds



/**
 * SESSION SAVE PATH  -  Use only as LAST resort.
 *
 * NOTE: Setting session_save path to TRUE is a significant security
 *       risk, but may be temporarily necessary.
 *       Putting session details within the limesurvey setup and
 *       making them world readable is very bad.
 *
 * Sometimes hosting deals can have issues with sessions. ie: You
 * can't login because the session isn't saved or even worse,
 * respondents can't complete surveys.
 * If this is the case, you should CONTACT YOUR HOSTING COMPANY to
 * let them know and ask them to fix it.
 * If you get no joy from your hosting company, you can try the
 * changing $session_save_path to TRUE.
 */
$session_save_path = false; // use only as a LAST resort if hosting company won't fix session problem.

/**
 * SESSION_DIR
 * If you must use your own session directory, it's best if you place
 * it in a directory above the web root that way it is not accessible
 * from a browser.
 * Unfortunately this is not always possible on commercial hosts. To
 * make it as hard as possible for people to see your sensitive
 * session details give your session directory a long, randomly
 * generated name.
 *
 * Make sure SESSION_DIR ends with a slash '/'
 * All paths must be relative to the LimeSurvey directory.
 * Only use letters (a-z A-Z), numbers (0-9), hyphens, underscores
 * and full stops ( - _ . ) in your directory name.
 *
 * If you have access to the directory above the web root:
 * use something like this:
 *       '../ao32rpskdfnp9328hr/' for your session dir.
 * otherwise, leave blank and 
 * By default LimeSurvey will create a randomly generated directory
 * name.
 */
$session_dir = ''; // make sure you have a trailing slash.



// Email Settings
// These settings determine how LimeSurvey will send emails

$siteadminemail     =   'your@email.org'; // The default email address of the site administrator
$siteadminbounce    =   'your@email.org'; // The default email address used for error notification of sent messages for the site administrator (Return-Path)
$siteadminname      =   'Your Name';      // The name of the site administrator

$emailmethod        =   'mail';           // The following values can be used:
                                          // mail      -  use internal PHP Mailer
                                          // sendmail  -  use Sendmail Mailer
                                          // qmail     -  use Qmail MTA
                                          // smtp      -  use SMTP relaying

$emailsmtphost      =   'localhost';      // Sets the SMTP host. You can also specify a different port than 25 by using
                                          // this format: [hostname:port] (e.g. 'smtp1.example.com:25').

$emailsmtpuser      =   '';               // SMTP authorisation username - only set this if your server requires authorization - if you set it you HAVE to set a password too
$emailsmtppassword  =   '';               // SMTP authorisation password - empty password is not allowed
$emailsmtpssl       =   '';               // Set this to 'ssl' or 'tls' to use SSL/TLS for SMTP connection 

$maxemails          =   50;               // The maximum number of emails to send in one go (this is to prevent your mail server or script from timeouting when sending mass mail)

$emailcharset = "UTF-8";                  // You can change this to change the charset of outgoing emails to some other encoding  - like 'iso-8859-1'


// Support for Fancy URLs
//
// This new feature makes survey URLs more readable
// For example a normal survey that looks like this 

//     http://example.com/limesurvey/index.php?sid=12345&lang=de

// will look like this

//      http://example.com/lime/survey/12345/lang-fr/tk-ertoiuy [^]

// If you want to have fancy URLs, set this to 1 AND
// rename htaccess.txt in the LimeSurvey root directory to .htaccees.
// 
// NOTE: You MUST have the Apache mod_rewrite module installed.
// If you don't know what this is better leave this setting alone.
$modrewrite         =   0;  

// CMS Integration Settings
// Set $embedded to true and specify the header and footer functions if the survey is to be displayed embedded in a CMS
$embedded = false;
$embedded_inc = '';             // path to the header to include if any
$embedded_headerfunc = '';      // e.g. COM_siteHeader for geeklog
$embedded_footerfunc = '';      // e.g. COM_siteFooter for geeklog

// Enable or Disable Ldap feature
$enableLdap = false;

// Experimental parameters, only change if you know what you're doing
//
// $filterout_incomplete_answers
//  * default behaviour of LimeS regarding answer records with no submitdate
//  * can be overwritten by module parameters
//         ('Filter-Out incomplete answers' checkbox when implemented)
$filterout_incomplete_answers = true;
//
// $stripQueryFromRefurl (default is false)
//  * default behaviour is to record the full referer url when requested
//  * set to true in order to remove the parameter part of the referrer url
//  $stripQueryFromRefurl = false;

// $defaulthtmleditormode
//  * sets the default mode for htmleditor: none, inline, popup
//    users without specific preference inherit this setup
//  * inline: inline replacement of fields by an HTML editor: 
//     --> slow but convenient and user friendly
//  * popup: adds an icon that runs a popup with and html editor 
//     --> faster, but html code is displayed on the form
//  * none: no html editor
$defaulthtmleditormode = 'inline';

// $surveyPreview_require_Auth
// Enforce Authentication to the LS system
// before beeing able to preview a survey (testing a non active survey)
// Default is true
$surveyPreview_require_Auth = true;


// $useWebserverAuth
// Enable delegation of authentication to the webserver.
// If you set this parameter to true and set your webserver to authenticate
// users accessing the /admin subdirectory, then the username returned by
// the webserver will be trusted by LimeSurvey and used for authentication
// unless a username mapping is used see $userArrayMap below
//
// The user still needs to be defined in the limesurvey database in order to
// login and get his permissions (unless $WebserverAuth_autocreateUser is set to true)
$useWebserverAuth = false;
//
// $userArrayMap
// Enable username mapping
// This parameter is an array mapping username from the webserver to username
// defined in LimeSurvey
// Can be usefull if you have no way to add an 'admin' user to the database
// used by the webserver, then you could map your true loginame to admin with
// $userArrayMap = Array ('mylogin' => 'admin');
//
// $WebserverAuth_autocreateUser
// Enable this if you want to automatically create users authenticated by the 
// webserver in LS
// Default is false (commenting this options also means false)
// $WebserverAuth_autocreateUser = false;
//
// $WebserverAuth_autouserprofile
// This parameter MUST be defined if you set $WebserverAuth_autocreateUser to true
// otherwise autocreateUser will be disabled.
// This is an array describing the default profile to use for auto-created users
// This profile will be the same for all users (unless you define the optionnal 
// 'hook_get_autouserprofile' function).
// 
//$WebserverAuth_autouserprofile = Array(
//					'full_name' => 'autouser',
//					'email' => $siteadminemail,
//					'lang' => 'en',
//					'htmleditormode' => $defaulthtmleditormode,
//					'templatelist' => 'default,basic',
//					'create_survey' => 1,
//					'create_user' => 0,
//					'delete_user' => 0,
//					'superadmin' => 0,
//					'configurator' =>0,
//					'manage_template' => 0,
//					'manage_label' => 0);
//
//
// The optionnal 'hook_get_autouserprofile' function
// is for advanced user usage only.
// It is used to customize the profile of the imported user
// If set, the this function will overwrite the $WebserverAuth_autouserprofile
// defined above by its return value
// 
// You can use any external DB in order to fill the profile for the user_name
// passed as the first parameter
// A dummy example for the 'hook_get_autouserprofile' function is given
// below:
//function hook_get_autouserprofile($user_name)
//{
//	return Array(
//			'full_name' => '$user_name',
//			'email' => "$user_name@localdomain.org",
//			'lang' => 'en',
//			'htmleditormode' => 'inline',
//			'templatelist' => 'default,basic,MyOrgTemplate',
//			'create_survey' => 1,
//			'create_user' => 0,
//			'delete_user' => 0,
//			'superadmin' => 0,
//			'configurator' =>0,
//			'manage_template' => 0,
//			'manage_label' => 0);
//}			


//$filterxsshtml
// Enables filtering of suspicious html tags in survey, group, questions
// and answer texts in the administration interface
// Only set this to false if you absolutely trust the users 
// you created for the administration of  LimeSurvey and if you want to 
// allow these users to be able to use Javascript etc. . 
$filterxsshtml = true;


// $usercontrolSameGroupPolicy
// If this option is set to true, then limesurvey operators will only 'see'
// users that belong to at least one of their groups
// Otherwise they can see all operators defines in LimeSurvey
$usercontrolSameGroupPolicy = true;


// $addTitleToLinks
// If this option is set to true, then LimeSurvey will add 'title' html element
// to all links used in menus. This will help screen reader to analyse the
// menus. Only set this to true if you're using a screen reader because
// it overlaps with tooltips. This option shouldn't be required anymore
// for new releases of screen readers.
$addTitleToLinks = false;

// $demoModeOnly
// If this option is set to true, then LimeSurvey will go into demo mode.
// Demo mode disables the following things:
//
// * Disables changing of the admin user's details and password
// * Disables uploading files on the Template Editor
// * Disables sending email invitations and reminders
// * Disables doing a database dump

$demoModeOnly = false;

/** -----------------------------------------------------
 * Because columns are tricky things, in terms of balancing visual
 * layout against semantic markup. The choice has been left to the
 * system administrator or designer. (Who ever cares most.)
 *
 * $column_style defines how columns are rendered for survey answers.
 * There are four possible options:
 *     'css'   using one of the various CSS only methods for creating
               columns (see template style sheet for details).
 *     'ul'    using multiple floated unordered lists. (DEFAULT)
 *     'table' using conventional tables based layout.
 *     NULL    blocks the use of columns
 */
$column_style = 'ul';

/**
 * Use FireBug Lite for JavaScript and template development and testing.
 * This allows you to use all the features of Firebug in any browser.
 * see http://getfirebug.com/lite.html for more info.
 */
$use_firebug_lite = false;

/*
 * When activated there are additional values like arithmetic mean and standard deviation at statistics.
 * This only affects question types "A" (5 point array) and "5" (5 point choice).
 * Furthermore data is aggregated to get a faster overview. 
 */
$showaggregateddata = 1;


//DO NOT EVER CHANGE THE FOLLOWING LINE ---------------
require_once(dirname(__FILE__).'/config.php');
//-----------------------------------------------------

// === Advanced Setup
// The following parameters need information from config.php
// and thus are defined here (After reading your config.php file).
// This means that if you want to tweak these very advanced parameters
// you'll have to do this in this file and not in config.php
// In this case, don't forget to backup your config-defaults.php settings when upgrading LS
// and report them to the new config-defaults.php file (Do not simply overwrite the new 
// config-defaults file with your old one

    //The following url and dir locations do not need to be modified unless you have a non-standard
    //LimeSurvey installation. Do not change unless you know what you are doing.
    $homeurl        =   "$rooturl/admin";  // The website location (url) of the admin scripts
    $publicurl      =   "$rooturl";        // The public website location (url) of the public survey script
    $tempurl        =   "$rooturl/tmp";
    $imagefiles     =   "$rooturl/images"; // Location of button bar files for admin script
  	$tpldir         =   "$rootdir/templates"; // Location of the templates
    $homedir        =   "$rootdir/admin";  // The physical disk location of the admin scripts
    $publicdir      =   "$rootdir";        // The physical disk location of the public scripts
    $tempdir        =   "$rootdir/tmp";    // The physical location where LimeSurvey can store temporary files
                                           // Note: For OS/2 the $tempdir may need to be defined as an actual directory
                                           // example: "x:/limesurvey/tmp". We don't know why.
    $fckeditordir   =   "$homeurl/scripts/fckeditor.264";

//PDF Export Settings
$usepdfexport   = 1;                       //Set 0 to disable; 1 to enable 
$pdfexportdir   = '/admin/classes/tcpdf';  //Directory with the tcpdf.php extensiontcpdf.php
$pdffonts       = $pdfexportdir.'/fonts';  //Directory for the TCPDF fonts
$pdfdefaultfont = 'freemono';              //Default font for the pdf Export
$pdffontsize    = 9;                       //Fontsize for normal text; Surveytitle is +4; grouptitle is +2
$notsupportlanguages = array('zh-Hant-TW','zh-Hant-HK','zh-Hans','ja','th');
$pdforientation = 'P';                     // Set L for Landscape or P for portrait format


// Computing relative url
// $relativeurl  is the url relative to you DocumentRoot where is installed LimeSurvey.
// Usually same as $rooturl without http://{$_SERVER['HTTP_HOST']}.
// $relativeurl  is now automatically computed from $rooturl
if(!isset($cmd_install) || !$cmd_install==true)
{
	$parsedurl = parse_url($rooturl);
	$relativeurl= isset($parsedurl['path']) ? $parsedurl['path'] : "";
}
else
{
	// commandline installation, no relativeurl needed 
}
?>
