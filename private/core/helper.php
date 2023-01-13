<?php

// pretty vardump
function pd($data){
    echo '<pre>' . var_export($data, true) . '</pre>';
    die();
}