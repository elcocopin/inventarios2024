<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Carnes;
use Illuminate\Http\Request;

class CarnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Carnes::all(), 200); // Mostrar todos los productos
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar datos
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'descripcion' => ['nullable', 'string', 'max:255'],
            'precio' => ['required', 'integer', 'min:1000'],
            'stock' => ['required', 'integer', 'min:1'],
        ]);

        //guardar datos
        $carnes = Carnes::create($datos);

        //respuesta al cliente
        return response()->json([
            'success' => true,
            'message' => 'Producto creado exitosamente',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Carnes $carnes)
    {
        return response()->json($carnes, 200); // Mostrar un producto
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carnes $carnes)
    {
         //validar datos
         $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'descripcion' => ['nullable', 'string', 'max:255'],
            'precio' => ['required', 'integer', 'min:1000'],
            'stock' => ['required', 'integer', 'min:1'],
        ]);

        //actualizar datos
        $carnes->update($datos);

        //respuesta al cliente
        return response()->json([
            'success' => true,
            'message' => 'Producto actualizado exitosamente',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carnes $carnes)
    {
        //eliminar producto
        $carnes->delete();
        
        //Respuesta al cliente
        return response()->json([
            'success' => true,
            'message' => 'Producto eliminado exitosamente',
        ], 204);
    }
}