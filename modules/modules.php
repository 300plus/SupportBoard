
<?php
// Scan modules directory for module folders
$modules_dir = __DIR__;
$modules = scandir($modules_dir);

foreach ($modules as $module) {
    if ($module === '.' || $module === '..' || !is_dir($modules_dir . '/' . $module)) {
        continue;
    }
    
    // Check if module has a matching PHP file
    $module_file = $modules_dir . '/' . $module . '/' . $module . '.php';
    if (file_exists($module_file)) {
        require_once($module_file);
    }
}
?>
