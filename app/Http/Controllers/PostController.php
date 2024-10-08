<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function Crear(Request $request)
    {
        if ($request->has("contenido") && $request->has("usuario")) {


            $post = new Post();
            $post->usuario_id = $request->post("usuario");
            $post->contenido = $request->post("contenido");
            $post->save();
            return redirect("listarPost");
        }
        return response()->json(["error mesage" => "sos un salame"]);
    }

    public function ListarTodas(Request $request)
    {
        $post = Post::all();
        return view("listarPost", ["post" => $post]);
    }

    public function ListarUna(Request $request, $id)
    {
        return Post::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect("/listarPost");
    }

    public function Modificar(Request $request)
    {
        $post = Post::findOrFail($request -> post("id"));
        $post->usuario_id = $request->post("usuario_id");
        $post->contenido = $request->post("contenido");
        $post->save();
        return (redirect("listarPost"));
    }

    public function MostrarFormularioDeModificar(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        return view("modificarPost", ["post" => $post]);
    }
}
