<?php

namespace App\Http\Controllers;


use App\Models\Textos;
use Illuminate\Http\Request;

class TextosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Textos::all();
        return response()->json($textos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    try {
        $request->validate([
            'texto' => 'required|string|min:2',
        ]);

        $texto = new Textos;
        $texto->texto = $request->texto;
        $texto->save();
        
        $data = [
            'message' => 'Texto subido con éxito',
            'detalles' => $texto
        ];

        return response()->json($data);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'message' => 'Error de validación: ' . $e->getMessage(),
            'errors' => $e->errors(),
        ], 422);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Error al procesar la solicitud: ' . $e->getMessage(),
        ], 500);
    }
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Textos  $texto
     * @return \Illuminate\Http\Response
     */
    public function show(Textos $texto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Textos  $texto
     * @return \Illuminate\Http\Response
     */
    public function edit(Textos $texto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Textos  $texto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Textos $texto)
    {
        $texto->texto = $request->texto;
        $texto->save();

        $data = [
            'message' => 'Texto editado con exito',
            'detalles' => $texto
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Textos  $texto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Textos $texto)
    {
        $texto->delete();
        $data = [
            'message' => 'Texto eliminado con exito',
            'detalles' => $texto
        ];
        return response()->json($data);
    }
}
