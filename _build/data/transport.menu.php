<?php
/**
 * fszip by Vadim Rudnitskiy
 */
$action= $modx->newObject('modAction');
$action->fromArray(array(
    'id' => 1,
    'namespace' => 'fszip',
    'parent' => 0,
    'controller' => 'index',
    'haslayout' => 1,
    'lang_topics' => 'fszip:default',
    'assets' => '',
),'',true,true);

/* load action into menu */
$menu= $modx->newObject('modMenu');
$menu->fromArray(array(
    'text' => 'fszip',
    'parent' => 'components',
    'description' => 'fszip.desc',
    'namespace' => 'fszip',
    'icon' => '',
    'menuindex' => 0,
    'params' => '',
    'handler' => '',
),'',true,true);
$menu->addOne($action);
unset($action);

return $menu;