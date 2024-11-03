<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function Crear(Request $request)
    {
        if ($request->has("correo") && $request->has("contrasenia")) {


            $usuario = new usuario();
            $usuario->nombre = $request->post("nombre");
            $usuario->correo = $request->post("correo");
            $usuario->contrasenia = $request->post("contrasenia");
            $usuario->save();
            return(redirect("listarUsuario"));
        }
        return response()->json(["error mesage" => "no se pudo crear el usuario"]);
    }

    public function ListarTodas(Request $request)
    {
        $usuario = usuario::all();
        return view("listarUsuario", ["usuario" => $usuario]);
    }

    public function ListarUna(Request $request, $id)
    {
        return usuario::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $usuario = usuario::findOrFail($id);
        $usuario->delete();
        return redirect("/listarUsuario");
    }

    public function Modificar(Request $request)
    {
        $usuario = usuario::findOrFail($request -> post("id"));
        $usuario->nombre = $request->post("usuario");
        $usuario->correo = $request->post("correo");
        $usuario->contrasenia = $request->post("contrasenia");
        $usuario->save();
        return(redirect("listarUsuario"));
    }

    public function MostrarFormularioDeModificar(Request $request, $id)
    {
        $usuario = usuario::findOrFail($id);
        return view("modificarUsuario", ["usuario" => $usuario]);
    }
}
