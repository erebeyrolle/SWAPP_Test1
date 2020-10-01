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

session_start();
require_once ('init.php');
if (!$login) {
    die(LANG_ERROR_DENIED);
}
if (!isset($_GET['file'])) {
    header('Location: .');
    die;
}
$dir = $db_settings['attachment_dir'];
$filename = basename($_GET['file']);
if (($filename == '.') || ($filename == '..') || ($filename == '')) {
    header('Location: .');
    die;
}
if (!file_exists($dir . $filename)) {
    die(LANG_ERROR_NOTFOUND);
}
$ext = substr(strrchr($filename, '.'), 1);
switch (strtolower($ext)) {
    case 'txt':
        $ctype = 'text/plain';
    break;
    case 'pdf':
        $ctype = 'application/pdf';
    break;
    case 'exe':
        $ctype = 'application/octet-stream';
    break;
    case 'zip':
        $ctype = 'application/zip';
    break;
    case 'doc':
        $ctype = 'application/msword';
    break;
    case 'xls':
        $ctype = 'application/vnd.ms-excel';
    break;
    case 'ppt':
        $ctype = 'application/vnd.ms-powerpoint';
    break;
    case 'gif':
        $ctype = 'image/gif';
    break;
    case 'png':
        $ctype = 'image/png';
    break;
    case 'jpg':
        $ctype = 'image/jpg';
    break;
    default:
        $ctype = 'application/force-download';
}
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: public');
header("Content-Type: $ctype");
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if ((is_integer(strpos($user_agent, 'msie'))) && (is_integer(strpos($user_agent, 'win')))) {
    header('Content-Disposition: filename=' . urlencode($filename) . ';');
} else {
    header('Content-Disposition: attachment; filename=' . urlencode($filename) . ';');
}
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($dir . $filename));
readfile($dir . $filename);
exit();
?>