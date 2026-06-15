@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Módulo de Clientes') }}
        </h2>
    </x-slot>

    <div class="flex -mx-4 sm:-mx-6 lg:-mx-8 -my-12 min-h-[calc(100vh-4rem)] bg-gray-50">
        
        <aside class="w-64 bg-white border-r border-gray-200 hidden md:block flex-shrink-0">
            <div class="h-16 flex items-center px-6 border-b border-gray-200 bg-gray-900">
                <span class="text-lg font-bold text-white tracking-wider">Gerenciador LN</span>
            </div>

            <nav class="p-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition duration-150">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ url('/funcionarios') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition duration-150">
                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    Funcionários
                </a>

                <a href="{{ url('/clientes') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl transition duration-150 bg-emerald-50 text-emerald-600 font-semibold">
                    <svg class="w-5 h-5 mr-3 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 014 0m-3 7a3 3 0 11-6 0 3 3 0 016 0zm6 3h-2m2-3h-2"></path>
                    </svg>
                    Clientes
                </a>

                <a href="{{ url('/vendas') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-600 hover:bg-amber-50 hover:text-amber-600 transition duration-150">
                    <svg class="w-5 h-5 mr-3 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Vendas
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-6 md:p-8 overflow-y-auto">
            <div class="max-w-5xl mx-auto">
                
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-gray-200 pb-5 mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl tracking-tight">
                            Módulo de <span class="text-emerald-600">Clientes</span>
                        </h1>
                        <p class="mt-1 text-sm text-gray-500">Gerencie o histórico, valores e cadastros de clientes.</p>
                    </div>
                    
                    <div class="mt-4 sm:mt-0">
                        <a href="{{ route('clientes.create') }}" class="inline-flex items-center justify-center px-4 py-2.5 border border-transparent rounded-lg text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 shadow-sm transition duration-150 ease-in-out">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Adicionar clientes
                        </a>
                    </div>
                </div>

                @if (session('success'))
                    <div class="mb-4 p-4 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 rounded-r-lg shadow-sm text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
                            <thead class="bg-gray-50 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                <tr>
                                    <th class="px-6 py-4">id</th>
                                    <th class="px-6 py-4">nome</th>
                                    <th class="px-6 py-4">dt_venda</th>
                                    <th class="px-6 py-4">valor</th>
                                    <th class="px-6 py-4 text-right">botões</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white text-gray-700">
                                @forelse($clientes as $cliente)
                                <tr class="hover:bg-gray-50 transition duration-150">
                                    <td class="px-6 py-4 font-mono text-xs text-gray-400">{{ $cliente->id }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900">{{ $cliente->nome }}</td>
                                    <td class="px-6 py-4 text-gray-500">
                                        {{ $cliente->dt_venda }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        R$ {{ number_format($cliente->valor, 2, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 text-right space-x-2 whitespace-nowrap">
                                        <a href="{{ route('clientes.edit', $cliente->id) }}">
                                            <button type="button" class="inline-flex items-center px-3 py-1.5 border border-gray-300 rounded-md text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none transition duration-150">
                                                Atualizar
                                            </button>
                                        </a>
                                        
                                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Deseja mesmo excluir?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent rounded-md text-xs font-medium text-red-600 bg-red-50 hover:bg-red-100 focus:outline-none transition duration-150">
                                                Apagar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                        Nenhum cliente cadastrado até ao momento.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="{{ route('dashboard') }}">
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 shadow-sm transition duration-150 ease-in-out">
                            &larr; Voltar para a Dashboard
                        </button>
                    </a>
                </div>

            </div>
        </main>
    </div>
@endsection

