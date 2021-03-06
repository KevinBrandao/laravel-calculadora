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
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $operador = $request->operador;

        if($operador == '+')
        {
            $result = $num1 + $num2;

            return view('calcular', compact('result'));
        }

        if($operador == '-')
        {
            $result = $num1 - $num2;

            return view('calcular', compact('result'));
        }

        if($operador == '*')
        {
            $result = $num1 * $num2;

            return view('calcular', compact('result'));
        }

        if($operador == '/')
        {
            if($num2 == 0){
                return "00";
            }

            $result = $num1 / $num2;

            return view('calcular', compact('result'));

        }

        if($operador != '+' && $operador != '-' && $operador != '*' && $operador != '/')
        {
            return "Operador Inválido";
        }
    }
}

?>