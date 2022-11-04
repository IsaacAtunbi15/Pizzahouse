<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;


class PizzaController extends Controller
{
    public function index(){
        return Pizza::all();
        //$expizza = Pizza::all();
        //$pizza = Pizza::orderBy('name')->get();

        //return view('pizza', [
        return view('pizzas.index');
          //  'pizza' => $pizza,
        //]);
    }
    public function show($id){
        return view('details', ['id' => $id]); 
    }
}
