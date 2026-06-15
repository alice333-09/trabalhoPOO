<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca os clientes do banco
        $clientes = \App\Models\Cliente::all(); 
        // Retorna a view enviando os dados obtidos
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validar os dados que vêm do formulário
    $request->validate([
        'nome'     => 'required|string|max:255', // Adicionado
        'dt_venda' => 'required|date',
        'valor'    => 'required|numeric',
    ]);

    \App\Models\Cliente::create([
        'nome'     => $request->nome, // Adicionado
        'dt_venda' => $request->dt_venda,
        'valor'    => $request->valor,
    ]);

        // 3. Redirecionar com a mensagem de sucesso
        return redirect()->route('clientes.index')->with('success', 'Salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'dt_venda' => 'required|date',
            'valor' => 'required|numeric',
        ]);
    
        $cliente = \App\Models\Cliente::findOrFail($id);
        
        // Atualiza o registro
        $cliente->update([
            'nome' => $request->nome,
            'dt_venda' => $request->dt_venda,
            'valor' => $request->valor,
        ]);
    
        // Força uma resposta HTTP direta de redirecionamento estável
        return redirect()->to('/clientes')->with('success', 'Cliente atualizado com sucesso!');
    }
        /**
         * Remove the specified resource from storage.
         */
    public function destroy($id)
    {
        $cliente = \App\Models\Cliente::findOrFail($id);
        $cliente->delete();

        // ADICIONE ESTA LINHA ABAIXO:
        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
