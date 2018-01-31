<?php

namespace Laramind\Math\Http\Controllers;

use App\Http\Controllers\Controller;

class MathController extends Controller
{
    public function add($first, $second)
    {
        $result =  $first + $second;
        return view("math::results")->withResult($result);
    }
    public function subtract($first, $second)
    {
        $result =  $first - $second;
        return view("math::results")->withResult($result);
    }

    public function multiply($first, $second)
    {
        $result =  $first * $second;
        return view("math::results")->withResult($result);
    }
    public function divide($first, $second)
    {
        $result =  $first / $second;
        return view("math::results")->withResult($result);
    }
}
