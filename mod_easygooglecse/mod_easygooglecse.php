<?php

defined('_JEXEC') or die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');

/**
 *
 * @author Craig Phillips
 * @copyright Copyright (C) 2012 Craig Phillips Pty Ltd - All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE file
 *
 */
defined('_JEXEC') or die;

// Include the helper functions only once
require_once dirname(__FILE__) . '/helper.php';

$layout  = $params->get('layout', 'default');
$pageURL = modEasyGoogleCSEHelper::pageURL();
$key = $params->get('easygooglecse_key');
$resultMenuID = $params->get('googleReturnMenuID', false);
$resultURL = modEasyGoogleCSEHelper::resultURL($resultMenuID, $pageURL);

if ($layout != 'results' && (empty($key) || empty($pageURL)))
{
    return;
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_easygooglecse', $params->get('layout', 'default'));
