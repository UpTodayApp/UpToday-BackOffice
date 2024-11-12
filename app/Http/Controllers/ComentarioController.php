<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentario;
use App\Models\c_post;
use App\Models\c_evento;
use App\Models\publica;

class comentarioController extends Controller
{

    public function Crear(Request $request)
    {
        if ($request->has("contenido")) {

            $comentario = new comentario();
            $comentario->contenido = $request->post("contenido");
            $comentario->save();

            if($request->post("post_id") !== "") {
            $c_post = new c_post();
            $c_post->post_id = $request->post("post_id");
            $c_post-> comentario_id = $comentario->id;
            $c_post->save();
            }

            if($request->post("usuario_id") !== "") {
            $publica = new publica();
            $publica->usuario_id = $request->post("usuario_id");
            $publica-> comentario_id = $comentario->id;
            $publica->save();
            }

            if($request->post("evento_id") !== "") {
                $c_evento = new c_evento();
                $c_evento->evento_id = $request->post("evento_id");
                $c_evento-> comentario_id = $comentario->id;
                $c_evento->save();
                }

                return (redirect("listarComentario"));
            }
        return response()->json(["error mesage" => "error"]);

        
    }

    public function ListarTodas(Request $request)
    {
        $comentario=comentario::all();
        return view("listarComentario", ["comentario" => $comentario]);
    }

    public function ListarUna(Request $request, $id)
    {
        return comentario::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $comentario = comentario::findOrFail($id);
        $comentario->delete();
        return redirect("/listarComentario");
    }

    public function Modificar(Request $request)
    {
        $comentario = comentario::findOrFail($request -> post("id"));
        $comentario->contenido = $request->post("contenido");
        $comentario->save();
        return (redirect("listarComentario"));
    }

    public function MostrarFormularioDeModificar(Request $request, $id)
    {
        $comentario = comentario::findOrFail($id);
        return view("modificarComentario", ["comentario" => $comentario]);
    }
}