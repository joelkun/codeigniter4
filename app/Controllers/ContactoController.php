<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        $vistas=view('contacto/header').
                 view('contacto/menu').
                 view('contacto/index').
                 view('contacto/footer');

        return $vistas;         
    }

    public function catalogo(){
        echo view('contacto/header');
        echo view('contacto/menu');
        echo view('contacto/catalogo');
        echo view('contacto/footer');
    }

}
