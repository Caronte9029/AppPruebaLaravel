<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        return view('peliculas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {    
         $datos_peliculas = request()->except('_token');
         Peliculas::insert($datos_peliculas);

        
         return redirect()-> route('peliculas.index'); 
    }              

    /**
     * Display the specified resource.
     */
    public function show($id) 
    {
        $pelicula = Peliculas::find($id);
        return view('peliculas.show', compact('pelicula') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $peliculas = Peliculas::orderBy("id", "asc")->paginate();
        //
        return view('peliculas.edit', compact('peliculas'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $pelicula = Peliculas::find($id);
        
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'productora' => 'required|string|max:255',
        ]);

        // Actualizar los datos de la película
        $pelicula->nombre = $request->nombre;
        $pelicula->productora = $request->productora;
        // Puedes añadir más campos para actualizar si es necesario

        $pelicula->save();

        return redirect()->route('peliculas.index')->with('success', 'Película actualizada exitosamente.');
    }
       

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peliculas $peliculas)
    {
        //
    }
}
