<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora()
    {
        return view('calculadora');
    }

    public function soma(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;

        $result = $num1 + $num2;
        
        return view('resultado', compact('result'));
    }

    public function calculadora1()
    {
        return view('calculadora1');
    }

    public function calcular(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $op = $request->op;

        if($op == '+')
        {
            $result = $num1 + $num2;

            return view('calcular', compact('result'));
        }

        if($op == '-')
        {
            $result = $num1 - $num2;

            return view('calcular', compact('result'));
        }

        if($op == '*')
        {
            $result = $num1 * $num2;

            return view('calcular', compact('result'));
        }

        if($op == '/')
        {
            if($num2 == 0){
                return "00";
            }

            $result = $num1 / $num2;

            return view('calcular', compact('result'));

        }

        if($op != '+' && $op != '-' && $op != '*' && $op != '/')
        {
            return "Operador Inválido";
        }
    }
}

?>