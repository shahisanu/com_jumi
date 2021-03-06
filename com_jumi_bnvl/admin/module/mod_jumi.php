<?php
/**
* @version   $Id$
* @package   Jumi
* @copyright (C) 2008 - 2010 Martin Hajek, 2011 Edvard Ananyan
* @license   GNU/GPL v3 http://www.gnu.org/licenses/gpl.html
*/

defined('_JEXEC') or die('Restricted access');

// Include the functions only once
require_once(dirname(__FILE__). '/helper.php');

$code_written   = modJumiHelper::getCodeWritten($params); //code written or ""
$storage_source = modJumiHelper::getStorageSource($params); //filepathname or record id or ""

if(is_int($storage_source)) { //it is record id
    $code_stored = modJumiHelper::getCodeStored($storage_source); //code or null(error]
}

require(JModuleHelper::getLayoutPath('mod_jumi'));