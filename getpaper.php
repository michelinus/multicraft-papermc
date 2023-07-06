<?php
$ver = end(json_decode(file_get_contents('https://api.papermc.io/v2/projects/paper'))->versions);
$url = 'https://api.papermc.io/v2/projects/paper/versions/' . $ver;
$bld = end(json_decode(file_get_contents($url))->builds);
$url = 'https://api.papermc.io/v2/projects/paper/versions/'. $ver . '/builds/' . $bld . '/downloads/paper-' . $ver . '-' . $bld . '.jar';
header('Location: '.$url);
?>
