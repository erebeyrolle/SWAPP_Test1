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

if (!defined('ISINC')) die('serious error! File: '.__FILE__.' File line: '.__LINE__.'');
if ($_SESSION['user']['type'] !== 'admin') {
    die(LANG_ERROR_DENIED);
}
if ($login[$a] || $login['ID'] == ADMIN) {
    if ($_POST['submitmail']) {
        $_POST['alert_new'] = isset($_POST['alert_new']) ? 1 : 0;
        $_POST['ticket_response'] = isset($_POST['ticket_response']) ? 1 : 0;
        $_POST['message_response'] = isset($_POST['message_response']) ? 1 : 0;
        $_POST['limit_response'] = isset($_POST['limit_response']) ? 1 : 0;
        $_POST['trans_response'] = isset($_POST['trans_response']) ? 1 : 0;
        $_POST['rep_trans_response'] = isset($_POST['rep_trans_response']) ? 1 : 0;
        //normal keys for settings
        $query = @mysql_query("SELECT `key` FROM `" . $db_table['settings'] . "`  WHERE `group`='' OR `group` IS NULL");
        if ($query) {
            while ($keys = mysql_fetch_array($query)) {
                $key = $keys['key'];
                if (isset($_POST[$key])) $sqls[] = "UPDATE " . $db_table['settings'] . " SET VALUE = '" . $_POST[$key] . "' WHERE `key` = '" . $key . "' LIMIT 1;";
            }
        }
        if (!empty($sqls)) {
            if (mysql_error()) {
                $err[] = LANG_FAILED . ': ' . mysql_error();
            }
            foreach($sqls as $sql) {
                if (!mysql_query($sql)) {
                    $err[] = LANG_FAILED . ': ' . mysql_error() . " :<br>\n $sql";
                }
            }
        }
        if (empty($err)) {
            header('Location: ' . $_SERVER['REQUEST_URI']);
            die();
        }
    } else {
        $inc = 'admin_mail.html';
    }
}
?>