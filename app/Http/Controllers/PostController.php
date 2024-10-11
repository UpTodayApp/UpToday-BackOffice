<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
    public function Crear(Request $request)
    {
        if ($request->has("contenido") && $request->has("usuario")) {


            $post = new post();
            $post->usuario_id = $request->post("usuario");
            $post->contenido = $request->post("contenido");
            $post->save();
            return redirect("listarpost");
        }
        return response()->json(["error mesage" => "error al crear post"]);
    }

    public function ListarTodas(Request $request)
    {
        $post = post::all();
        return view("listarpost", ["post" => $post]);
    }

    public function ListarUna(Request $request, $id)
    {
        return post::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $post = post::findOrFail($id);
        $post->delete();
        return redirect("/listarpost");
    }

    public function Modificar(Request $request)
    {
        $post = post::findOrFail($request -> post("id"));
        $post->usuario_id = $request->post("usuario_id");
        $post->contenido = $request->post("contenido");
        $post->save();
        return (redirect("listarpost"));
    }

    public function MostrarFormularioDeModificar(Request $request, $id)
    {
        $post = post::findOrFail($id);
        return view("modificarpost", ["post" => $post]);
    }
}
