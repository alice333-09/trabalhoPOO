<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca os funcionários do banco
        $funcionarios = \App\Models\Funcionario::all(); 
        // Retorna a view enviando os dados obtidos
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validar os dados que vêm do formulário
        $request->validate([
            'nome'  => 'required|string|max:255',
            'turno' => 'required|string|max:255',
            'horas' => 'required|numeric',
        ]);

        // 2. Criar o registro no banco de dados
        \App\Models\Funcionario::create([
            'nome'  => $request->nome,
            'turno' => $request->turno,
            'horas' => $request->horas,
        ]);

        // 3. Redirecionar com a mensagem de sucesso
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario)
    {
        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // 1. Validar os dados novos
        $request->validate([
            'nome'  => 'required|string|max:255',
            'turno' => 'required|string|max:255',
            'horas' => 'required|numeric',
        ]);
    
        // 2. Buscar o funcionário pelo ID
        $funcionario = \App\Models\Funcionario::findOrFail($id);
        
        // 3. Atualizar o registro
        $funcionario->update([
            'nome'  => $request->nome,
            'turno' => $request->turno,
            'horas' => $request->horas,
        ]);
    
        // 4. Redirecionar para a listagem
        return redirect()->to('/funcionarios')->with('success', 'Funcionário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Buscar o funcionário e deletar
        $funcionario = \App\Models\Funcionario::findOrFail($id);
        $funcionario->delete();

        // Redirecionar de volta para o index
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário excluído com sucesso!');
    }
}