<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120213,
            'Name' => 'Suci Amalia P',
            'Phone' => '082135186901',
            'Class' => 'XII RPL 7'
        ];
    }
}