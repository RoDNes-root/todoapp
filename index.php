<?php
session_start();

require __DIR__ . '/config/config.php';
if (DEVMODE == true) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

foreach (glob(BASEDIR.'/helpers/*.php') as $file){ // Get all files in helpers folder - Helps klasöründe ki tüm dosyaları dahil ediyoruz
    require $file;
}

$config['route'][0] = 'home'; // Default route - Varsayılan route
$config['lang'] = 'tr'; // Default language - Varayılan dil

if(isset($_GET['route'])){
    preg_match('@(?<lang>\b[a-z]{2}\b)?/?(?<route>.+)/?@', $_GET['route'], $result); // Match route and language - Route ve dil eşleştirilir
}
if(isset($result['lang'])){
    if (file_exists(BASEDIR.'/language/'.$result['lang'].'.php')) {
        $config['lang'] = $result['lang']; // Set language - Dil ayarlanır
    }else{
        $config['lang'] = 'tr'; // Set default language - Varsayılan dil ayarlanır
    }
}

if (isset($result['route'])) {
    $config['route'] = $result['route']; // Set route - Route ayarlanır
}
$config['route'] = explode('/',$config['route']); // Convert route to array - Route dizisine çevrilir

require BASEDIR.'/language/'.$config['lang'].'.php'; // Include language file - Dil dosyası dahil edilir
if (file_exists(BASEDIR.'/Controller/'.$config['route'][0].'.php')) {
    require BASEDIR.'/Controller/'.$config['route'][0].'.php';
}else{
    echo 'Sayfa Bulunamadı';
}




