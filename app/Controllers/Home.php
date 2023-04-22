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
}
