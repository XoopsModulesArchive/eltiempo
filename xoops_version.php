<?php

$modversion['name'] = 'El Tiempo 2';
$modversion['version'] = '2.0';
$modversion['description'] = 'el tiempo en Xoops';
$modversion['credits'] = 'www.ayamonte.org';
$modversion['author'] = 'cerbero y jarabo';
$modversion['help'] = 'Agradecimientos a Meteored.com';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'logo.png';
$modversion['dirname'] = 'eltiempo';
// Menu
$modversion['hasMain'] = 1;
// block
$modversion['blocks'][1]['file'] = 'block-tiempo.php';
$modversion['blocks'][1]['name'] = 'El tiempo';
$modversion['blocks'][1]['description'] = 'Predicciones climáticas por Comunidad Autónoma';
$modversion['blocks'][1]['show_func'] = 'disp_block_eltiempo';
