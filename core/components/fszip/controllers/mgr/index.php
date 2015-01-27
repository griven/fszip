<?php
/**
 * Loads the home page.
 *
 * @package fszip
 * @subpackage controllers
 */
 
$modx->regClientStartupScript($fszip->config['jsUrl'].'mgr/widgets/home.panel.js');
$modx->regClientStartupScript($fszip->config['jsUrl'].'mgr/sections/index.js');

$output = '<div id="fszip-panel-home-div"></div>';

return $output;
