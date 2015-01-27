<?php
/**
 * @package fszip
 */
class fsZIP {
    /**
     * Constructs the fsZIP object
     *
     * @param modX &$modx A reference to the modX object
     * @param array $config An array of configuration options
     */
    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;

        $basePath = $this->modx->getOption('fszip.core_path',$config,$this->modx->getOption('core_path').'components/fszip/');
        $assetsUrl = $this->modx->getOption('fszip.assets_url',$config,$this->modx->getOption('assets_url').'components/fszip/');
        $this->config = array_merge(array(
            'basePath' => $basePath,
            'corePath' => $basePath,
            'modelPath' => $basePath.'model/',
            'processorsPath' => $basePath.'processors/',
            'jsUrl' => $assetsUrl.'js/',
            'cssUrl' => $assetsUrl.'css/',
            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $assetsUrl.'connector.php',
        ),$config);

        $this->modx->addPackage('fszip',$this->config['modelPath']);
    }

    /**
     * Initializes the class into the proper context
     *
     * @access public
     * @param string $ctx
     */
    public function initialize($ctx = 'web') {
        switch ($ctx) {
            case 'mgr':
                $this->modx->lexicon->load('fszip:default');

                if (!$this->modx->loadClass('fszipControllerRequest',$this->config['modelPath'].'fszip/request/',true,true)) {
                    return 'Could not load controller request handler.';
                }
                $this->request = new fszipControllerRequest($this);
                return $this->request->handleRequest();
            break;
        }
        return true;
    }
}