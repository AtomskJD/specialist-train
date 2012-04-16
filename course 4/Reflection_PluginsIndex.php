<?php
include 'Reflection_PluginsClass.php';
function findPlugins()
{
    $plugins = array();
    foreach (get_declared_classes() as $class) {
        $reflectionClass = new ReflectionClass($class);
        // проверка на принадлежность к интерфейсу
        if ($reflectionClass->implementsInterface('IPlugin')){
            $plugins[] = $reflectionClass;
        }
    }
    return $plugins;
}
function computeMenu()
{
    foreach (findPlugins() as $plugin) {
        if ($plugin->hasMethod('getMenuItems')){
            $method = $plugin->getMethod('getMenuItems');
            
            if ($method->isStatic()){
                $item = $method->invoke(null);
            } else {
                $obj = $plugin->newInstance();
                $item = $method->invoke($obj);
            }
        }
        $list[] = $item;
    }
    return $list;
}
$menu = computeMenu();
print_r($menu);
?>