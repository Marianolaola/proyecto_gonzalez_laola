<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //$data['titulo']='Principal';
        return view('front\principal');
    }

    public function quienes_somos()
    {
        //$data['titulo']='Quienes somos';
        return view('front/quienes_somos');
    }

    public function contacto()
    {
        //$data['titulo']='Contacto';
        return view('front/contacto');
    }
}
