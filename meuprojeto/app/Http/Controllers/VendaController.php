<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca as vendas do banco
        $vendas = \App\Models\Venda::all(); 
        // Retorna a view enviando os dados obtidos
        return view('vendas.index', compact('vendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validar os dados que vêm do formulário
        $request->validate([
            'modelo'   => 'required|string|max:255',
            'dt_venda' => 'required|date',
            'valor'    => 'required|numeric',
        ]);

        // 2. Criar o registro no banco de dados
        \App\Models\Venda::create([
            'modelo'   => $request->modelo,
            'dt_venda' => $request->dt_venda,
            'valor'    => $request->valor,
        ]);

        // 3. Redirecionar com a mensagem de sucesso
        return redirect()->route('vendas.index')->with('success', 'Venda salva com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venda $venda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venda $venda)
    {
        return view('vendas.edit', compact('venda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // 1. Validar os dados novos
        $request->validate([
            'modelo'   => 'required|string|max:255',
            'dt_venda' => 'required|date',
            'valor'    => 'required|numeric',
        ]);
    
        // 2. Buscar a venda pelo ID
        $venda = \App\Models\Venda::findOrFail($id);
        
        // 3. Atualizar o registro
        $venda->update([
            'modelo'   => $request->modelo,
            'dt_venda' => $request->dt_venda,
            'valor'    => $request->valor,
        ]);
    
        // 4. Redirecionar para a listagem
        return redirect()->to('/vendas')->with('success', 'Venda atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Buscar a venda e deletar
        $venda = \App\Models\Venda::findOrFail($id);
        $venda->delete();

        // Redirecionar de volta para o index
        return redirect()->route('vendas.index')->with('success', 'Venda excluída com sucesso!');
    }
}