<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\megusta;

class MegustaController extends Controller
{

    public function ListarTodas(Request $request)
    {
        $megusta = megusta::all();
        return view("listarLikes", ["megusta" => $megusta]);
    }

    public function ListarUna(Request $request, $id)
    {
        return megusta::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $megusta = megusta::findOrFail($id);
        $megusta->delete();
        return redirect("/listarLike");
    }
}
