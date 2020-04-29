<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'Hawaiian', 'base' => 'Cheesy crust', 'price' => 10],
            ['type' => 'Veggie', 'base' => 'Regular crust', 'price' => 10],
            ['type' => 'Volcano', 'base' => 'Garlic crust', 'price' => 10]
        ];
    
        return view('pizzas', [
            'pizzas' => $pizzas, 
            'name' => request('name'),
            'age' => request('age')
        ]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
