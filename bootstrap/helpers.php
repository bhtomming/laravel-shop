<?php
/**
 * Created by Drupai.
 * User: 烽行天下
 * Date: 2018\6\18 0018
 * Time: 15:23
 */
function test_helper(){
    return 'OK';
}

function route_class(){
    return str_replace('.','-',Route::currentRouteName());
}