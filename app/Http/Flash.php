<?php
/**
 * Created by PhpStorm.
 * User: ejay010
 * Date: 4/13/16
 * Time: 3:10 PM
 */

namespace App\Http;


class Flash {
    /**
     * Message flash message
     *
     * @param $title
     * @param $message
     * @param string $level
     * @return mixed
     */
    public function message($title, $message, $level = 'info')
    {
        return $this->create($title, $message, $level);
    }

    /**
     * Success flash message
     *
     * @param $title
     * @param $message
     * @param string $level
     * @return mixed
     */
    public function success($title, $message, $level = 'success')
    {
        return $this->create($title, $message, $level);
    }

    /**
     * @param $title
     * @param $message
     * @param string $level
     * @return mixed
     */
    public function error($title, $message, $level = 'error')
    {
        return $this->create($title, $message, $level);
    }


    /**
     * @param $title
     * @param $message
     * @param $level
     * @return mixed
     */
    private function create($title, $message, $level){
        return session()->flash('flash_message',
            [
                'title' => $title,
                'message' => $message,
                'level' => $level
            ]);

    }

}