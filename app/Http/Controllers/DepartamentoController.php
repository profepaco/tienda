<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $departamentos = Departamento::all(); //select * from departamentos
        return view('departamentos.index',['departamentos'=>$departamentos]);
    }
}
