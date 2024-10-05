<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\megusta;

class MegustaController extends Controller
{
    
    public function CrearPost(Request $request)
    {
        if ($request->has("usuario_id")) {


            $megusta = new Megusta();
            $megusta->usuario_id = $request->post("usuario_id");
            $megusta->post_id = $request->post("post_id");
            $megusta->save();
            return(redirect("listarLike"));
        }
        return response()->json(["error mesage" => "error al crear el megusta"]);
    }

    public function CrearComentario(Request $request)
    {
        if ($request->has("usuario_id")) {


            $megusta = new Megusta();
            $megusta->usuario_id = $request->post("usuario_id");
            $megusta->post_id = $request->post("comentario_id");
            $megusta->save();
            return(redirect("listarLike"));
        }
        return response()->json(["error mesage" => "error al crear el megusta"]);
    }

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
