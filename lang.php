<?php
/**********************************************************************************
* eTicket � http://www.eticketsupport.com                                         *
* by Digital Frontiers, UTO                                                       *
***********************************************************************************
* Software Version: eTicket 1.7.3                                                 *
* Software by: Digital Frontiers, UTO (http://www.eticketsupport.com)             *
* Copyright 2008 by: Digital Frontiers, UTO (http://www.eticketsupport.com)       *
* Support, News, Updates at: http://www.eticketsupport.com                        *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by Digital Frontiers, UTO.       *
*                                                                                 *
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
* See the "license.txt" file for details of the eTicket license.                  *
* The latest version can always be found at http://www.eticketsupport.com.        *
**********************************************************************************/

/*
Notice for alternative language users:
If you have a language file, include it at the top here, eg:

include('lang.es.php');

Because a define cannot be "re-defined" (unless unset first), this is the ideal solution.
Therefore it must appear above the default language defines below.

This way we ensure that your language details are defined, and not over-written,
plus any newly defined ones will appear in english.
*/
define('LANG_VERSION', '1.7.3'); // created for this version of eTicket
define('LANG_LOCALE', 'en_GB'); // [language[_territory][.codeset][@modifier]] (RFC 3066)
define('LANG_FATAL_ERROR', 'Fatal Error');
define('LANG_ERROR', 'Error');
define('LANG_WELCOME', 'Welcome');
define('LANG_REMOVE_FOR_SECURITY_REASONS', 'Should be removed for security reasons.');
define('LANG_INC_DIR_NOT_EXIST', 'Include directory does not exist.');
define('LANG_DB_COULD_NOT_CONNECT', 'Could not connect to database.');
define('LANG_COULD_NOT_GET_CONF', 'Could not retrieve configuration from database.');
define('LANG_FIX_ABOVE_ERRORS', 'Please fix the above errors.');
define('LANG_ERROR_ATTACHMENTS_DIR', 'Attachments directory is missing or not writable');
define('LANG_ERROR_BAD_FILETYPE', 'is an unsupported filetype.');
define('LANG_ERROR_NOT_POSTED', 'Could not post your message.');
define('LANG_ERROR_MISSING_FIELDS', 'There are required fields missing.');
define('LANG_ERROR_INVALID_PASS', 'Invalid password.');
define('LANG_ERROR_USER_EXISTS', 'Username already exists.');
define('LANG_ERROR_PASSWORD_NOMATCH', 'Passwords do not match.');
define('LANG_ERROR_ATTACHMENT_DIR', 'Attachment directory cannot be found.');
define('LANG_ERROR_CAT_EXISTS', 'Category already exists.');
define('LANG_ERROR_GROUP_EXISTS', 'User group already exists.');
define('LANG_ERROR_ONE_REP', 'Must have at least one representative.');
define('LANG_ERROR_ONE_CAT', 'Must have at least one category.');
define('LANG_ERROR_NAME_EXISTS', 'Name already exists.');
define('LANG_ERROR_REP_USER_EXISTS', 'Representative username already exists.');
define('LANG_ERROR_ADMIN_GROUP_NOMOD', 'Cannot modify Administrator group.');
define('LANG_ERROR_ADMIN_GROUP_NODEL', 'Cannot delete Administrator group.');
define('LANG_ERROR_DEFAULT_CAT_NODEL', 'Cannot delete default category group.');
define('LANG_ERROR_GROUP_INUSE', 'Cannot delete user group, as it is still in use.');
define('LANG_FAILED', 'Failed');
define('LANG_TRANS_FROM', 'Transferred from');
define('LANG_TRANS_NOTE', 'Transfer Note');
define('LANG_TRANSFER', 'Transfer');
define('LANG_SEND_ALERT', 'Send Alert?');
define('LANG_OPT_MSG', 'Optional Message');
define('LANG_ATTACHMENT', 'Attachment');
define('LANG_HEADERS', 'headers');
define('LANG_CAT', 'Category');
define('LANG_ERROR_IMAP', 'PHP does not appear to be compiled with <a href="http://www.php.net/imap">imap functions</a> used for POP3.');
define('LANG_ERROR_UNABLE_TO_OPEN_MAILBOX', 'Unable to open mailbox for category');
define('LANG_LOGIN_TIP', 'If this is your first time contacting us, please use the "open ticket" form below to open a new ticket. Otherwise if you would like to view the status of an existing ticket, enter your details in the "view status" form.');
define('LANG_OPENED_TICKET_SUBJECT', 'Opened New Ticket');
define('LANG_OPENED_TICKET_MSG', "A support ticket has been created and a representative will be getting back to you shortly. An email with the ticket ID has been sent.\nYou will need the ticket ID along with your email address to login and to view the status of your ticket(s).\nNOTE: To send additional information regarding your issue, simply reply to the email sent to you.");
define('LANG_VIEW_STATUS', 'View Status');
define('LANG_EMAIL', 'Email');
define('LANG_YOUR_EMAIL', 'Your email address');
define('LANG_TICKET_ID', 'Ticket ID');
define('LANG_STATUS', 'Status');
define('LANG_SUBJECT', 'Subject');
define('LANG_NAME', 'Name');
define('LANG_IP', 'IP');
define('LANG_PHONE', 'Phone');
define('LANG_PRIORITY', 'Priority');
define('LANG_QUERY', 'Query');
define('LANG_SORT_BY', 'Sort By');
define('LANG_DATE', 'Date');
define('LANG_ASC', 'Ascending');
define('LANG_DES', 'Descending');
define('LANG_SEARCH', 'Search');
define('LANG_BASIC', 'Basic');
define('LANG_ADVANCED', 'Advanced');
define('LANG_RESULTS_PP', 'Results Per Page');
define('LANG_TICKETS_PP', 'Tickets Per Page');
define('LANG_SEARCH_TICKETS', 'Search Tickets');
define('LANG_TICKETS_FOUND', 'Ticket(s) Found');
define('LANG_ERROR_NO_SUBJECT', 'Please specify a subject.');
define('LANG_ERROR_NO_NAME', 'Please specify your name.');
define('LANG_ERROR_NO_MSG', 'Please specify a message.');
define('LANG_ERROR_INVALID_EMAIL', 'Please enter a valid email address.');
define('LANG_WARN_ATTACH_REM', 'Attachment removed');
define('LANG_ERROR_UPLOAD_SECURITY', 'upload security error');
define('LANG_ERROR_NO_ATTACH', 'Attachments are disabled');
define('LANG_ATTACHMENTS', 'Attachments');
define('LANG_ERROR_LOGIN', 'You have entered an invalid login details. Please try again.');
define('LANG_LOGIN_PLEASE', 'Please login');
define('LANG_USER', 'Username');
define('LANG_PASS', 'Password');
define('LANG_NPASS', 'New Password');
define('LANG_VPASS', 'Verify Password');
define('LANG_LOGIN', 'Log In');
define('LANG_ADD', 'Add');
define('LANG_REPLY_TO_MSG', 'Reply to Message');
define('LANG_PRIV_MSG', 'Private Message');
define('LANG_REPLY_AND_CLOSE', 'Reply and Close');
define('LANG_PRIV_MSGS', 'Private Messages');
define('LANG_GROUP', 'Group');
define('LANG_SIGNATURE', 'Signature');
define('LANG_ERROR_DENIED', 'Error 403 Access Forbidden.');
define('LANG_ERROR_NOTFOUND', 'Error 404 Not Found.');
define('LANG_BACK_TO_MAIN', 'Back to main');
define('LANG_BACK_TO_LIST', 'Back to list');
define('LANG_EDIT', 'Edit');
define('LANG_COPY', 'Copy');
define('LANG_EDIT_BANNED', 'Edit Banned');
define('LANG_CONFIRM_DELETE', 'Confirm Delete');
define('LANG_DELETE', 'Delete');
define('LANG_DELETE_BANNED', 'Delete Banned');
define('LANG_ADD_COPY_BANNED', 'Add/Copy Banned');
define('LANG_CREATE_REP', 'Create Representative');
define('LANG_SAVE_CHANGES', 'Save Changes');
define('LANG_CREATE_CAT', 'Create Category');
define('LANG_VIEW', 'View');
define('LANG_ALL', 'All');
define('LANG_OPEN', 'Open');
define('LANG_OPEN_TICKET', 'Open Ticket');
define('LANG_RESET', 'Reset');
define('LANG_ADD_NEW', 'Add New');
define('LANG_TICKETS', 'Tickets');
define('LANG_TICKET', 'Ticket');
define('LANG_FROM', 'From');
define('LANG_TO', 'To');
define('LANG_HOST', 'Host');
define('LANG_HIDDEN', 'Hidden');
define('LANG_DEPT', 'Department');
define('LANG_LOW', 'Low');
define('LANG_NORMAL', 'Normal');
define('LANG_HIGH', 'High');
define('LANG_ENABLE', 'Enable');
define('LANG_NEW_TICKET_REPLY', 'New Ticket Reply');
define('LANG_NEW_TICKET_REPLY_INFO', 'You can define the message that will be seen everytime a new ticket is opened.');
define('LANG_MSG', 'Message');
define('LANG_VARS', 'Variables');
define('LANG_VAR_EMAIL', "User's Email Address");
define('LANG_VAR_SUBJECT', 'Subject of email');
define('LANG_VAR_MESSAGE', 'Incoming Message');
define('LANG_VAR_NAME', 'Name of user');
define('LANG_VAR_DATETIME', 'Date and Time at send time');
define('LANG_ROOT_URL', 'Root URL');
define('LANG_NEW_MSG_REPLY', 'New Message Reply');
define('LANG_NEW_MSG_REPLY_INFO', 'You can define the message that will be seen everytime a reply is made to a ticket.');
define('LANG_TICKET_LIMIT_REPLY', 'Ticket Limit Reply');
define('LANG_TICKET_LIMIT_REPLY_INFO', 'This message will be seen when a user has reached the max allowed opened tickets defined in preferences.');
define('LANG_TICKET_MAX_VAR', 'Maximum tickets a user can have open (see preferences).');
define('LANG_CAT_TRANS_NOTICE', 'Category Transfer Notification');
define('LANG_CAT_TRANS_NOTICE_INFO', 'This message will be seen when a message has been transfered to a different category.');
define('LANG_CAT_NAME_VAR', 'Name of category transferred to.');
define('LANG_TRANS_MSG_VAR', 'Representative transfer note.');
define('LANG_EMAIL_ALERT', 'Email Alert');
define('LANG_EMAIL_ALERT_INFO', 'This message will be seen by all representatives when the system has received a new message.');
define('LANG_ADDR_TO_EMAIL', 'Addresses to Email');
define('LANG_FROM_EMAIL', 'From Email');
define('LANG_MSG_VAR', 'Content of ticket request.');
define('LANG_WARNING', 'WARNING');
define('LANG_ACC_ATTACH', 'Accept file attachments');
define('LANG_ACC_ATTACH_TIP', 'Before you enable this feature you need to setup the attachment dir and understand the security issues related to attachments.');
define('LANG_MAX_FILE_SIZE', 'Maximum File Size (bytes)');
define('LANG_ATTACH_URL_PATH', 'Attachment URL path');
define('LANG_ATTACH_DIR', 'Attachment Directory');
define('LANG_ATTACH_DIR_TIP', 'This directory MUST exist and MUST be writable (chmod 777) before you can enable attachments. (Note: must have a trailing slash)');
define('LANG_ACC_FILE_TYPES', 'Accepted File Types');
define('LANG_REM_TYPE', 'Remove Type');
define('LANG_MAIL', 'Mail');
define('LANG_SAVE_EMAIL_HEADERS', 'Save Email Headers');
define('LANG_MIN_EMAIL_INT', 'Min. Email Interval (seconds)');
define('LANG_MAX_OPEN_TICKETS', 'Maximum Open Tickets');
define('LANG_REM_ORIGINAL_EMAIL', 'Remove Original Email');
define('LANG_REM_TAG', 'Removal Tag');
define('LANG_MISC', 'Miscellaneous');
define('LANG_SEARCH_ON_MAIN', 'Search on Main Page');
define('LANG_PREF_TIMEZONE', 'Preferred Timezone');
define('LANG_CLOSED', 'Closed');
define('LANG_CLOSE', 'Close');
define('LANG_IN_PROGRESS', 'In Process...');
define('LANG_REOPEN', 'Reopen');
define('LANG_REFRESH', 'Refresh');
define('LANG_GROUP_ACCESS', 'Group Access');
define('LANG_REP', 'Representative');
define('LANG_CREATE_USER_GROUP', 'Create User Group');
define('LANG_QUICK_SEARCH', 'Quick Search');
define('LANG_SHOW_ALL', 'Show All (Reset)');
define('LANG_EXACT_PHRASE', 'Exact phrase');
define('LANG_ALL_WORDS', 'All words');
define('LANG_ANY_WORD', 'Any word');
define('LANG_DEL_SEL', 'Delete Selected');
define('LANG_SELECT', 'Select');
define('LANG_SELECT_ALL', 'Select All');
define('LANG_UNSELECT', 'Unselect');
define('LANG_PREV', 'Prev');
define('LANG_NEXT', 'Next');
define('LANG_INVALID_RECORD', 'Invalid Record! Key is null.');
define('LANG_ADD_TO_BANLIST', 'Add to Ban List');
define('LANG_NO_RECORDS_FOUND', 'No records found');
define('LANG_TITLE_MY', 'My Account');
define('LANG_TITLE_CAT', 'Categories');
define('LANG_TITLE_REP', 'Representatives');
define('LANG_TITLE_GROUPS', 'User Groups');
define('LANG_TITLE_PREF', 'Preferences');
define('LANG_TITLE_MAIL', 'Mail Responses');
define('LANG_TITLE_BANLIST', 'Ban List');
define('LANG_TITLE_VIEWTICKET', 'View Ticket');
define('LANG_TITLE_ADMIN_LOGIN', 'Administrator Login');
define('LANG_TITLE_USER_LOGIN', 'Login');
define('LANG_TITLE_MY_TICKETS', 'My Tickets');
define('LANG_LAST', 'Last');
define('LANG_PAGE', 'Page');
define('LANG_ERROR_MUST_BE_LOGGED_IN', 'You must be logged in to use this feature');
define('LANG_HELP', 'eTicket Help');
define('LANG_HELP_BODY', '<p>Move your mouse over the table headings and hold there, a tooltip will appear.<br><small>* denotes there is a private message.</small></p>');
define('LANG_TIP_TICKET', 'the id of the ticket generated automatically');
define('LANG_TIP_DATE', 'date the ticket was first raised');
define('LANG_TIP_SUBJECT', 'subject of the ticket');
define('LANG_TIP_CAT', 'category the ticket is assigned to');
define('LANG_TIP_PRIORITY', 'how important the ticket is to the user');
define('LANG_TIP_FROM', 'who rised the ticket');
define('LANG_TIP_REFRESH', 'refreshes page');
define('LANG_TIP_DELETE', 'deletes the selected tickets');
define('LANG_DELETE_CONFIRM', 'Are you sure you want to delete this?');
define('LANG_CAPTCHA_TITLE', 'Security code');
define('LANG_ERROR_CAPTCHA', 'You have provided an invalid security code');
define('LANG_SUBMIT', 'Submit');
define('LANG_ERROR_VALUE_EMPTY', 'Value cannot be empty, please enter text');
define('LANG_BANLIST_RECORD_TOTAL', 'Records %start to %stop of %total');
define('LANG_ALL', 'All');
define('LANG_DAYS', 'Days');
define('LANG_PAGES', 'Pages');
define('LANG_WITHIN_LAST', 'Within Last');
define('LANG_NO_TICKETS', 'There are no tickets to display');
define('LANG_PREDEFINED', 'Predefined');
define('LANG_ADVANCED_SEARCH', 'Advanced Search');
define('LANG_BASIC_SEARCH', 'Basic Search');
define('LANG_USE_DATES', 'Use Dates');
define('LANG_BETWEEN', 'Between');
define('LANG_BIGGER', 'Bigger');
define('LANG_SMALLER', 'Smaller');
define('LANG_UP_ERR_NODATA', 'No uploaded file data');
define('LANG_UP_ERR_EMPTY', 'Empty uploaded file data');
define('LANG_UP_ERR_TOOLONG', 'Filename is too long');
define('LANG_UP_ERR_INVALIDPATH', 'Upload path is invalid');
define('LANG_UP_ERR_WRITEPATH', 'Upload path is NOT writable');
define('LANG_UP_ERR_NOFILE', 'Not an uploaded file');
define('LANG_UP_ERR_INVALIDTYPE', 'Invalid file type');
define('LANG_UP_ERR_TOOBIG', 'File is too big');
define('LANG_UP_ERR_TOOSMALL', 'File is too small');
define('LANG_UP_ERR_EXISTS', 'File already exists');
define('LANG_UP_ERR_FAILED', 'Upload failed');
define('LANG_ANSWER', 'Answer');
define('LANG_OPTIONAL', 'Optional');
define('LANG_SYSTEM_TIMEZONE', 'System Timezone');
define('LANG_LOCKED', 'Locked');
define('LANG_EMAIL_CONFIRM', 'Confirm Email');
define('LANG_ERROR_EMAIL_NOMATCH', 'Email addresses do not match.');
define('LANG_TIP_REP', 'rep the ticket is assigned to');
define('LANG_REP_TRANS_NOTICE', 'Representative Transfer Notification');
define('LANG_REP_TRANS_NOTICE_INFO', 'This message will be seen when a message has been transfered to a different representative.');
define('LANG_REP_NAME_VAR', 'Name of representative transferred to.');
define('LANG_SETTINGS', 'Settings');
define('LANG_THEME', 'Theme');
define('LANG_TIME_FORMAT', 'Time Format (<a href="http://www.php.net/date" target="_new">date()</a> OR <a href="http://www.php.net/strftime" target="_new">strftime()</a>)');
define('LANG_SHORT_DATE_FORMAT', 'Short Date Format (<a href="http://www.php.net/date" target="_new">date()</a> OR <a href="http://www.php.net/strftime" target="_new">strftime()</a>)');
define('LANG_CHARSET', 'Character Encoding (<a href="http://www.iana.org/assignments/character-sets">charset)</a>');
define('LANG_PRESIG', 'Pre-signature separator (can be blank)');
define('LANG_SITE_TITLE', 'Site Title');
define('LANG_NO_SUBJECT', 'No Subject');
define('LANG_TICKET_FORMAT', 'Ticket Format');
define('LANG_SUBJECT_RE', 'Subject Reply Prefix');
define('LANG_SPAM_WORD', 'Spam Word (In subject)');
define('LANG_FLOOD_MSG_RATE', 'Rate of Flood Messages');
define('LANG_REM', 'Remove');
define('LANG_LOAD', 'Load');
define('LANG_SAVE', 'Save');
define('LANG_ANTISPAM', 'Antispam (perl pipe automail only, using the banlist)');
define('LANG_ANTISPAM_INFO', "If a user is detected as spam by the banlist, they can over-ride the banlist by replying with the MAGIC WORD in the email body.<br>\n(Do not take out {MAGICWORD} from the message, it gets replaced with the real word automatically)<br>\n(It is recommended you use a non-existing email address at your domain for the email address)");
define('LANG_ANTISPAM_MAGICWORD', 'Antispam Magic Word (No whitespace)');
define('LANG_ANSWER_MSG', 'Answer Message');
define('LANG_ANSWER_MSG_INFO', 'This is the template used when answering a ticket, changing it is not recommended.');
define('LANG_UNASSIGNED_TICKET', 'This ticket is unassigned.');
define('LANG_CLAIM_TEXT', 'Do you want to claim this ticket?');
define('LANG_CLAIM_IT', 'claim it');
define('LANG_NEW_TICKET', 'New Ticket');
define('LANG_NEW_TICKET_MSG', 'This ticket was created for you by a representative.');
define('LANG_NOMAIL', 'No Mail');
define('LANG_CAPTCHA', 'Captcha');
define('LANG_ACC_CAPTCHA', 'Accept Captcha');
define('LANG_CAPTCHA_TYPE', 'Captcha Type');
define('LANG_CAPTCHA_QUESTION_TITLE', 'Security Question');
define('LANG_DEFAULT_CAT', 'Default category');
define('LANG_FORCE_CATEGORY', 'Force single category');
define('LANG_CURRENT_THEME', 'Current Theme');
define('LANG_MAIL_METHOD', 'Sendmail method');
define('LANG_SMTP_HOST', 'SMTP Host');
define('LANG_SMTP_PORT', 'SMTP Port');
define('LANG_SMTP_AUTH', 'SMTP Basic Authentication');
define('LANG_SMTP_USER', 'SMTP Authentication Username');
define('LANG_SMTP_PASS', 'SMTP Authentication Password');
define('LANG_NEW', 'New');
define('LANG_NEW_TICKETS', 'New Tickets');
define('LANG_OPEN_TICKETS', 'Open Tickets');
define('LANG_ONHOLD', 'On-Hold');
define('LANG_PUTONHOLD', 'Put on hold');
define('LANG_PUTONHOLD_WOREPLY', 'Put on hold without replying');
define('LANG_TIP_ONHOLD', 'Places a ticket on hold');
define('LANG_ONHOLD_TICKETS', 'On-Hold Tickets');
define('LANG_AWAITINGCUSTOMER', 'Awaiting Customer');
define('LANG_AWAITINGCUSTOMER_TICKETS', 'Tickets Awaiting Customer Reply');
define('LANG_REOPENED', 'Re-Opened');
define('LANG_REOPENED_TICKETS', 'Tickets Re-Opened');
define('LANG_CUSTREPLIED', 'Customer Replied');
define('LANG_CUSTREPLIED_TICKETS', 'Tickets Customer Replied');
define('LANG_CLOSED_TICKETS', 'Closed Tickets');
define('LANG_CLOSE_WOREPLY', 'Close without replying');
define('LANG_NEWSTATUS', 'New status');
define('LANG_CHANGE_TICKET_STATUS', 'Set New Status without replying');
define('LANG_SHOW_TICKETS', 'Show Tickets : ');
define('LANG_SHOW', ' Show ');
define('LANG_WITH_SELECTED', 'Selected ');
define('LANG_ACTION', ' Preform ');
define('LANG_SHOW_GRAPHIC', 'Show eTicket graphic in footer');
define('LANG_UPGRADE_CHECK', 'Check for upgrades');
define('LANG_VIEW_OPEN', 'View open tickets');
define('LANG_ALL_TICKETS', 'All Tickets');
define('LANG_TICKET_STATUS', 'Ticket Status');
define('LANG_TITLE_DB', 'Database');
define('LANG_DB_OPS', 'Database Operations');
define('LANG_DB_BACKUP', 'Database Backup');
define('LANG_DB_STATUS', 'Database Status');
define('LANG_DB_OPTIMIZE', 'Optimize Database');
define('LANG_DB_TOTALSPACE', 'Total space used');
define('LANG_DB_USEDKB', 'used kilobytes');
define('LANG_DB_OVERHEAD', 'Overhead');
define('LANG_DB_USEDB', 'used bytes');
define('LANG_DB_STATUS', 'Table status');
define('LANG_DB_VERSION', 'Table version');
define('LANG_DB_OPTIMIZING', 'Optimizing');
define('LANG_DB_OPTIMIZED', ' bytes optimized.');
define('LANG_DB_NEEDS_OPTIMIZE', 'Database need to be optimized.');
define('LANG_DB_OUTOFDATE', 'Database out of date.');
define('LANG_DB_OK', 'Ok');
define('LANG_SENDMAIL_PATH', 'Path to sendmail');
//define('LANG_','');

?>