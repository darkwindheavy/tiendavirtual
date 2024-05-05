<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    //Método para mostrar la lista de usuarios

    public function index()
{
    $usuarios = Usuario::all();
    return view('usuarios.index', compact('usuarios'));
}

//Método para mostrar el formulario de creación de usuarios

public function create()
{
    return view('usuarios.create');

}

//Método para guardar un nuevo usuario

public function store(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:usuarios',
        'password' => 'required|string|min:8',
        'direccion' => 'nullable|string|max:255',
        'telefono' => 'nullable|string|max:20',
    ]);

    // Creación del nuevo usuario
    $usuario = new Usuario();
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->password = Hash::make($request->input('password'));
    $usuario->direccion = $request->input('direccion');
    $usuario->telefono = $request->input('telefono');

    // Asignación predeterminada del rol o lógica para asignar el rol automáticamente

    $usuario->rol_id = 1; // Por ejemplo, asignamos el rol por defecto como 1

    $usuario->save();

    // Redirección después de crear el usuario

    return redirect()->route('usuarios.index')
                    ->with('success', 'Usuario creado exitosamente.');
}

//Método para mostrar un usuario específico

public function show($id)
{
    $usuario = Usuario::findOrFail($id);
    return view('usuarios.show', compact('usuario'));
}

//Método para mostrar el formulario de edición de un usuario

public function edit($id)
{
    $usuario = Usuario::findOrFail($id);
    return view('usuarios.edit', compact('usuario'));
}

//Método para actualizar un usuario

public function update(Request $request, $id)
{
    // Validación de los datos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:usuarios,email,'.$id,
        'password' => 'nullable|string|min:8',
        'direccion' => 'nullable|string|max:255',
        'telefono' => 'nullable|string|max:20',
    ]);

   // Encuentra el usuario a actualizar
    $usuario = Usuario::findOrFail($id);

   // Actualiza los datos del usuario
    $usuario->update($request->all());

   // Redirecciona a la lista de usuarios
    return redirect()->route('usuarios.index');
}

public function destroy($id)
{
    // Encuentra el usuario a eliminar
    $usuario = Usuario::findOrFail($id);

    // Elimina el usuario de la base de datos
    $usuario->delete();

    // Redirecciona a la lista de usuarios
    return redirect()->route('usuarios.index');
}



}