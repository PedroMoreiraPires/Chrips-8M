<?php

namespace App\Http\Controllers;

use App\Models\Bulo;
use Illuminate\Http\Request;

class BuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inicio', ['bulos' => Bulo::latest()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function guardar(Request $request)
    {
        // Validate the request

        $validated = $request->validate([
            'texto' => 'required|string|max:255',
            'texto_desmentido' => 'required|string|max:255',
        ], [
            "texto.required" => "El campo bulo es obligatorio.",
            "texto.max" => "El campo bulo no puede tener más de 255 caracteres.",
            "texto_desmentido.required" => "El campo bulo desmentido es obligatorio.",
            "texto_desmentido.max" => "El campo bulo desmentido no puede tener más de 255 caracteres.",
        ]);

        auth()->user()->bulos()->create($validated);

        // Create the chirp (no user for now - we'll add auth later)
        Bulo::create([
            'texto' => $validated['texto'],
            'texto_desmentido' => $validated['texto_desmentido'],
            'user_id' => null, // We'll add authentication in lesson 11
        ]);



        // Redirect back to the feed
        return redirect('/')->with('exito', 'Bulo creado!');
    }

    public function editar(Bulo $bulo)
    {
        if (request()->user()->cannot('update', $bulo)) {
            abort(403);
        }
        return view('bulos.editar', compact('bulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizar(Request $request, Bulo $bulo)
    {
        if ($request->user()->cannot('update', $bulo)) {
            abort(403);
        }

        // Validate
        $validated = $request->validate([
            'texto' => 'required|string|max:255',
            'texto_desmentido' => 'required|string|max:255',
        ]);

        // Update
        $bulo->update($validated);

        return redirect('/')->with('exito', 'Bulo actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function borrar(Bulo $bulo)
    {
        if (request()->user()->cannot('delete', $bulo)) {
            abort(403);
        }

        $bulo->delete();

        return redirect('/')->with('exito', 'Bulo borrado!');
    }
}
