<?php
/**
 * Loads the header for mgr pages.
 *
 * @package fszip
 * @subpackage controllers
 */
$modx->regClientStartupScript($fszip->config['jsUrl'].'mgr/fszip.js');
$modx->regClientStartupHTMLBlock('<script type="text/javascript">
Ext.onReady(function() {
    fsZIP.config = '.$modx->toJSON($fszip->config).';
});
</script>');


return '';