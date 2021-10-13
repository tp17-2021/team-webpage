<?php

function get_file_time($filepath)
{
    if(is_file($filepath)){
        return $filepath.'?'.filemtime($filepath);
    }
    return $filepath;
}

function get_file_size($filepath)
{
    if(!is_file($filepath)){
        return null;
    }
    $bytes = filesize($filepath);
    $s = array('b', 'Kb', 'Mb', 'Gb');
    $e = floor(log($bytes)/log(1024));
    return sprintf('%.2f '.$s[$e], ($bytes/pow(1024, floor($e))));
}
