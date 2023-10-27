<?php

namespace App\Http\Controllers;

trait responseRequest {

    public function responseSuccess () 
    {
        echo "success";
    }

    public function responseFail()
    {
        echo "fail";
    }
}