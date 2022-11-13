<?php

namespace App\Http\Controllers;
use app\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
       return view(view: 'welcome') ;
    }

    public function contatos(){
        return view(view: 'contatos') ;
     }
}
