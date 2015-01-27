<?php
/**
 * fsZIP Connector
 *
 * @package fszip
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('fszip.core_path',null,$modx->getOption('core_path').'components/fszip/');
require_once $corePath.'model/fszip/fszip.class.php';
$modx->fszip = new fsZIP($modx);

$modx->lexicon->load('fszip:default');

/* handle request */
$path = $modx->getOption('processorsPath',$modx->fszip->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));