@extends('layouts.app')

@section('content')
        <main class="flex-1 p-6 md:p-8 flex items-center justify-center overflow-y-auto">
            <div class="w-full max-w-md mx-auto">
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                    </div>
                    <h2 class="text-center text-2xl font-bold tracking-tight text-gray-900 mb-8">
                        Adicionar Nova Venda
                    </h2>
                </div>

                <div class="bg-white py-8 px-4 shadow-sm sm:rounded-xl sm:px-10 border border-gray-200">
                    
                    <form action="{{ route('vendas.store') }}" method="POST" class="space-y-6">
                        @csrf 
                        
                        {{-- Campo: Modelo --}}
                        <div>
                            <label for="modelo" class="block text-sm font-medium text-gray-700 mb-1">Modelo</label>
                            <input type="text" id="modelo" name="modelo" value="{{ old('modelo') }}" placeholder="Ex: Reta" required
                                   class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 sm:text-sm">
                            @error('modelo')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Campo: Data da Venda --}}
                        <div>
                            <label for="dt_venda" class="block text-sm font-medium text-gray-700 mb-1">Data da Venda</label>
                            <input type="date" id="dt_venda" name="dt_venda" value="{{ old('dt_venda', date('Y-m-day')) }}" required
                                   class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 sm:text-sm">
                            @error('dt_venda')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Campo: Valor --}}
                        <div>
                            <label for="valor" class="block text-sm font-medium text-gray-700 mb-1">Valor (R$)</label>
                            <input type="number" step="0.01" id="valor" name="valor" value="{{ old('valor') }}" placeholder="0,00" required
                                   class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 sm:text-sm">
                            @error('valor')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end space-x-3 pt-2">
                            <a href="{{ route('vendas.index') }}" class="w-1/2 sm:w-auto">
                                <button type="button" class="w-full inline-flex justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none transition duration-150">
                                    Cancelar
                                </button>
                            </a>
                                <button type="submit" class=" inline-flex justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none transition duration-150">
                                    Salvar
                                </button>
                        </div>

                    </form>
                </div>

            </div>
        </main>
@endsection