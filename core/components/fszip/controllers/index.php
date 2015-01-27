<?php
/**
 * @package fszip
 * @subpackage controllers
 */
require_once dirname(dirname(__FILE__)).'/model/fszip/fszip.class.php';
$fszip = new fsZIP($modx);
return $fszip->initialize('mgr');