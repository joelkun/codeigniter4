<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dato =[
                   "titulo"=> "Inicio de codeigniter 4"
                 ];

        return view('welcome_message', $dato);
    }
    public function contacto(){
        return view('contactoPrueba');
    }

    public function formulario(){
        return view('formulario');
    }

    public function enviarPost(){
        $valor1=$_POST['valor1'];
        $valor2=$_POST['valor2'];
        echo $valor1+$valor2;
    }

    public function inicio(){
        return view('inicio');
    }
}
