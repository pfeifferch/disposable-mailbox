<?php
// set your time zone:
date_default_timezone_set('Europe/Paris');

// set locale (see supported locales: https://github.com/fightbulc/moment.php#switch-locale)
// format Date and Time
$config['locale'] = 'en_US';
$config['locale_supported_languages'] = array(
'ar_TN', 'ca_ES', 'zh_CN', 'zh_TW', 'cs_CZ', 
'da_DK', 'nl_NL', 'en_CA', 'en_GB', 'en_US', 
'fa_IR', 'fi_FI', 'fr_FR', 'fr_CA', 'de_DE', 
'hu_HU', 'id_ID', 'it_IT', 'ja_JP', 'oc_LNC', 
'lv_LV', 'pl_PL', 'pt_BR','pt_PT', 'ru_RU', 
'es_ES', 'sv_SE', 'uk_UA', 'th_TH', 'tr_TR', 
'vi_VN');


// User Changable Languages
$config['availablelanguages'] = array(
"English" => "en",
"Deutsch" => "de",
"Español" => "es",
"Nederlands" => "nl",
//"British English" => "en_GB",
//"American English" => "en_US",
//"&Ouml;sterreichisches Deutsch" => "de_AT",
//"Schweizerdeutsch" => "de_CH",
//"Deutsch (Deutschland)" => "de_DE",
//"Deutsch (Liechtenstein)" => "de_LI",
//"Deutsch (Luxembourg)" => "de_LU",
//"Español (europeo)" => "es_ES",
);


// enable in production:
error_reporting(0);


// enable while testing:
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


// Change IMAP settings (check SSL flags on http://php.net/manual/en/function.imap-open.php)
$config['imap']['url'] = '{imap.example.com:993/imap/ssl}INBOX';
$config['imap']['username'] = "myuser";
$config['imap']['password'] = "mypassword";

// For gmail you can use '{imap.gmail.com:993/imap/ssl}INBOX'
// and follow the troubleshooting at:
// https://stackoverflow.com/a/25238515/79461

// email domains, usually different from imap hostname:
$config['domains'] = array('mydomain.com', 'example.com');

// When to delete old messages?
$config['delete_messages_older_than'] = '30 days ago';


// Mails to those usernames can not be accessed:
$config['blocked_usernames'] = array('root', 'admin', 'administrator', 'hostmaster', 'postmaster', 'webmaster');

// Mails are usually show as Text and only if not available as HTML. You can turn this around to prefer HTML over text.
$config['prefer_plaintext'] = true;

// Impressum and Disclaimer show in "more Info"
config['imprintanddisclaimer'] =
"<p>This service is provided for test purposes and free of charge; there is no guarantee of constant availability, in particular not of the accessibility of the domains </p><h5><span id=\"more-24\"></span></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/contact-form \">CONTACT</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/yourimprint\">IMPRINT</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/yourdisclaimer.html\">DISCLAIMER</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/cookiesandmore.info\">DATA PROTECTION</a></h5>
<h5 style=\"text-align: right;\"><a href=\"https://example.com/ise.php\">REFERENCES</a></h5>	
</p>";
