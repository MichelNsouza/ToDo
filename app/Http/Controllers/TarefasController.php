<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function index()
    {
       $listaDetarefas = Tarefa::all();
       return view('todo.index',compact('listaDetarefas') );
    }

    public function store()
    {
        $tarefa = new Tarefa();

        $novaTarefa = request()->get('tarefa');

        if ($novaTarefa != ""){
            $tarefa->descricao = $novaTarefa;
            $tarefa->save();
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $tarefa = Tarefa::find($id);
        $listaDetarefas = $tarefa::all();
        return view('todo.index', compact('listaDetarefas', 'tarefa'));

    }

    public function update($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->descricao = request()->get('tarefa');
        $tarefa->save();

        return redirect()->back();

    }
    public function delete($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
        return redirect()->back();
    }
}
