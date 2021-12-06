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
    $s = array('B', 'kB', 'MB', 'GB');
    $e = floor(log($bytes)/log(1024));
    return sprintf('%.2f '.$s[$e], ($bytes/pow(1024, floor($e))));
}

function date_diff_in_weeks($date1, $date2)
{
    $first = DateTime::createFromFormat('d/m/Y', $date1);
    $second = DateTime::createFromFormat('d/m/Y', $date2);
    return floor($first->diff($second)->days/7);
}

function date_diff_in_days($date1, $date2)
{
    $first = DateTime::createFromFormat('d/m/Y', $date1);
    $second = DateTime::createFromFormat('d/m/Y', $date2);
    return floor($first->diff($second)->days);
}