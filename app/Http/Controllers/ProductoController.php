<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('productos.create',['departamentos'=>$departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre'=>'required|max:50',
            'descripcion'=>'required',
            'precio'=>'required|decimal:2',
            'departamento_id'=>'required'
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('message','Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $departamentos = Departamento::all();
        return view('productos.edit',['producto'=>$producto, 'departamentos'=>$departamentos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $this->validate($request,[
            'nombre'=>'required|max:50',
            'descripcion'=>'required',
            'precio'=>'required|decimal:2',
            'departamento_id'=>'required'
        ]);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->departamento_id = $request->departamento_id;
        $producto->save();

        return redirect()->route('productos.index')->with('message','Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->witch('message','Producto eliminado correctamente');
    }
}
