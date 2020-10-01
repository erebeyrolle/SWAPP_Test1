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

require_once ('init.php');
include_once (INC_DIR . 'open_inc.php');
$include = $site_header;
if (file_exists($include)) {
    include_once ($include);
}
if (file_exists('core.js')) {
    echo $html['core.js'];
}
if (function_exists('DisplayErrWarn')) {
    DisplayErrWarn();
}
if (isset($submitmsg)) {
    echo $submitmsg;
} else {
    include_once (INC_DIR . 'open_form.php');
}
$include = $site_footer;
if (file_exists($include)) {
    include_once ($include);
}
?>