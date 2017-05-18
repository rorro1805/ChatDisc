<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 17-05-2017
 * Time: 20:29
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class chatController extends Controller
{
    //funcion que retorna la pagina del login
    public function getLogin()
    {
        return view('login');
    }

    //funcion que retorna la pagina del chat
    public function getChat()
    {
        return view('chat');
    }

    public function saveMessage(Request $request)
    {
        if($request->isMethod('post'))
        {

        }
    }

}