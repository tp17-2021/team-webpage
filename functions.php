<?php

function get_file_time($filepath){
    if(is_file($filepath)){
        return $filepath.'?'.filemtime($filepath);
    }
    return $filepath;
}
