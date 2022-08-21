<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;

class LivroController extends Controller
{
     public function index()
    {
      return Livros::all();
    }
 
   public function store(Request $request)
    {
        Livros::create($request->all());
    }

    public function show($id)
    {
     
      return Livros::findOrFail($id);

    }

    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
