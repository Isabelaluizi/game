<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cpuResponseAPI extends Controller
{
    function getCpuRespose() {
        $cpuChoices = ["Rock",
            "Paper",
            "Scissors"];
            $num=rand(0,sizeof($cpuChoices)-1);
            return response()->json(["cpuRandomChoice"=>$cpuChoices[$num]]);
    }
}
