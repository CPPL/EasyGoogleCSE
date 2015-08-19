<?php

defined('_JEXEC') or die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');

/**
 *
 * @author Craig Phillips
 * @copyright Copyright (C) 2012 Craig Phillips Pty Ltd - All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE file
 *
 */

class modEasyGoogleCSEHelper {

    public static function pageURL () {
        $rawURL =  "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $escapedURL = htmlspecialchars($rawURL, ENT_QUOTES, 'UTF-8');

        return $escapedURL;
    }
}