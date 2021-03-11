<?php

namespace App\Controllers;

use Kernel\View;

class ClientController
{
    public function index()
    {
        $data = [
            'name' => 'HER',
            'surname' => 'DRE',
        ];
        View::render('client', $data);
    }

    public function delete()
    {


    }

    public function update()
    {

    }

    public function search()
    {

    }
}