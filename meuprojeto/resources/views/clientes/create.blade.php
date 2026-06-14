<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Cliente') }}
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

        <main class="flex-1 p-6 md:p-8 flex items-center justify-center overflow-y-auto">
            <div class="w-full max-w-md mx-auto">
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                    </div>
                    <h2 class="text-center text-2xl font-bold tracking-tight text-gray-900 mb-8">
                        Adicionar Novo Cliente
                    </h2>
                </div>

                <div class="bg-white py-8 px-4 shadow-sm sm:rounded-xl sm:px-10 border border-gray-200">
                    
                    <form action="{{ url('/clientes') }}" method="POST" class="space-y-6">
                        @csrf <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                            <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required
                                   class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 sm:text-sm">
                            @error('nome')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="dt_venda" class="block text-sm font-medium text-gray-700 mb-1">Data de venda</label>
                            <input type="date" id="dt_venda" name="dt_venda" value="{{ old('dt_venda') }}" required
                                   class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 sm:text-sm">
                            @error('dt_venda')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="valor" class="block text-sm font-medium text-gray-700 mb-1">Valor</label>
                            <input type="number" id="valor" name="valor" step="0.01" value="{{ old('valor') }}" required
                                   class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 sm:text-sm">
                            @error('valor')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end space-x-3 pt-2">
                            <a href="{{ url('/clientes') }}" class="w-1/2 sm:w-auto">
                                <button type="button" class="w-full inline-flex justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none transition duration-150">
                                    Cancelar
                                </button>
                            </a>
                            <button type="submit" class="w-1/2 sm:w-auto inline-flex justify-center rounded-lg border border-transparent bg-emerald-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-emerald-700 focus:outline-none transition duration-150">
                                Salvar
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </main>
    </div>
</x-app-layout>