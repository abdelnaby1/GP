<?php 

if(!function_exists('autl'))
{
    function aurl($url=null)
    {
        return url('admin/'.$url);
    }
}


//to return admin guard

if(!function_exists('admin'))
{
    function admin()
    {
        return auth()->guard('admin');
    }
}