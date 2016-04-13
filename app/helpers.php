<?php
/**
 * Created by PhpStorm.
 * User: ejay010
 * Date: 4/13/16
 * Time: 3:11 PM
 */


/**
 * flash helper
 *
 * @param null $title
 * @param null $message
 * @return \Illuminate\Foundation\Application|mixed
 */
function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if(func_num_args() == 0){
        return $flash;
    }

    return $flash->message($title, $message);
}