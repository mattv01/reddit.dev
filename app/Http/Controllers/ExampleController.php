<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function add($num1, $num2) {
        if (is_numeric($num1) && is_numeric($num2)) {
            return $num1+$num2;
        } else {
            return "Both inputs must be numeric.";
        }
    }

    public function rollDice($guess) {
        if (!is_numeric($guess)) {
            return $guess . " is not numeric. Guess Again.";
        } elseif ($guess < 1 || $guess > 6) {
            return $guess . " is not between 1 and 6. Guess Again.";
        } else {
            $data = ['diceNum' => rand(1, 6), 'guess' => $guess];
            return view('roll-dice', $data);
        }
    }
}