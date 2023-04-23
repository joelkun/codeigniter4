<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        $data =['titulo'=>'Inicio'];
        $vistas=view('contacto/header',$data).
                 view('contacto/menu').
                 view('contacto/index').
                 view('contacto/footer');

        return $vistas;         
    }

    public function catalogo(){

        $data =['titulo'=>'catalogo'];
        //$catalogo=['numero'=>$numeroCataLogo];

        echo view('contacto/header',$data);
        echo view('contacto/menu');
        echo view('contacto/catalogo');
        echo view('contacto/footer');
    }

}
