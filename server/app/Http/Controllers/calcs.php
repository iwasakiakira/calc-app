<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{

public function show($num1,$operator,$num2)
    {
    
        if ($operator === 'addition') {
            $kekka = $num1 + $num2;
            $ennzannsi = '+';
        } elseif ($operator === 'subtraction') {
            $kekka = $num1 - $num2;
            $ennzannsi = '-';
        } elseif ($operator === 'multiplication') {
            $kekka = $num1 * $num2;
            $ennzannsi = '×';
        } elseif ($operator === 'division') {
            $kekka = $num1 / $num2;
            $ennzannsi = '÷';
        } else {
            echo '正しい演算子を指定して下さい｡';
        }

        // $data = ['num1' => $num1, 'num2' => $num2];
        return view('calcs.show',
            [
            'kekka' => $kekka ,
            'num1' => $num1 ,
            'num2' => $num2 ,
            'ennzannsi' => $ennzannsi
            ]
        );
    }

}


