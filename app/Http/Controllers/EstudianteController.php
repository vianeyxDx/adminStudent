<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
class EstudianteController extends Controller
{
    public function index(){

        return view('estudiante', ['estudiantes' => Estudiante::all()]);
    }

    public function agregar(){

    }
}
