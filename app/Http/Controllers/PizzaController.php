<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\Http\Resources\Pizza as PizzaResource;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

    public function index()
    {
        $pizzas = Pizza::all();

        return PizzaResource::collection($pizzas);
    }


    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);

        return new PizzaResource($pizza);
    }

}
