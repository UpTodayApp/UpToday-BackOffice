<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;

class GrupoController extends Controller
{
    public function Crear(Request $request)
    {
        if ($request->has("nombre")) {


            $grupo = new grupo();
            $grupo->nombre = $request->post("nombre");
            $grupo->descripcion = $request->post("descripcion");
            $grupo->save();
            return $grupo;
        }
        return response()->json(["error mesage" => "no se pudo crear el grupo"]);
    }

    public function ListarTodas(Request $request)
    {
        $grupo = grupo::all();
        return view("listarGrupo", ["grupo" => $grupo]);
    }

    public function ListarUna(Request $request, $id)
    {
        return grupo::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $post = grupo::findOrFail($id);
        $post->delete();
        return redirect("/listarGrupo");
    }

    public function Modificar(Request $request, $id)
    {
        $grupo = grupo::findOrFail($id);
        $grupo->nombre = $request->post("nombre");
        $grupo->descripcion = $request->post("descripcion");
        $grupo->save();
        return $grupo;
    }
}
