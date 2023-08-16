<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[ 
            'title' => 'Griya Bali Trans | Rent a Car With Driver in Bali',
            'css' => 'style',

        ];
        return view('/mainService/hometour', $data);
    }

}
