<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentario;

class comentarioController extends Controller
{

    public function Crear(Request $request)
    {
        if ($request->has("contenido"!=null) && $request->has("usuario_id"!=null)) {


            $comentario = new comentario();
            $comentario->usuario_id = $request->post("usuario_id");
            $comentario->contenido = $request->post("contenido");
            $comentario->post_id = $request->post("post_id");
            $comentario->save();
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
        $comentario->usuario_id = $request->post("usuario_id");
        $comentario->contenido = $request->post("contenido");
        $comentario->post_id = $request->post("post_id");
        $comentario->save();
        return (redirect("listarComentario"));
    }

    public function MostrarFormularioDeModificar(Request $request, $id)
    {
        $comentario = comentario::findOrFail($id);
        return view("modificarComentario", ["comentario" => $comentario]);
    }
}