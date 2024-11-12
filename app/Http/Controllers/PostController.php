<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\p_evento;
use App\Models\realiza;

class PostController extends Controller
{
    public function Crear(Request $request)
    {
        if ($request->has("contenido")) {
            $post = new Post();
            $post->contenido = $request->post("contenido");
            $post->save();

            if($request->post("evento_id") !== "") {
                $p_evento = new p_evento();
                $p_evento->post_id = $post->id;
                $p_evento-> evento_id = $request->post("evento_id");
                $p_evento->save();
                }

                if($request->post("usuario_id") !== "") {
                    $realiza = new realiza();
                    $realiza->post_id = $post->id;
                    $realiza-> usuario_id = $request->post("usuario_id");
                    $realiza->save();
                    }

                     }
                    return redirect("/listarPost");
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
        return redirect("/listarPost");
    }

    public function Modificar(Request $request)
    {
        $post = post::findOrFail($request -> post("id"));
        $post->contenido = $request->post("contenido");
        $post->save();
        return (redirect("listarPost"));
    }

    public function MostrarFormularioDeModificar(Request $request, $id)
    {
        $post = post::findOrFail($id);
        return view("modificarpost", ["post" => $post]);
    }
}
