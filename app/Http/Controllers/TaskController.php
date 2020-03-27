<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    public function __construct()
    {
        //
    }

    public function showOdd($batas){
        $result = "";
        for($i=0;$i<$batas;$i++){
            if($i%2!=0) $result .= "$i, ";
        }
        return $result;
    }
}
