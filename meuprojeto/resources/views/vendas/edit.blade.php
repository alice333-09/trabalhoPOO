@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-start font-sans antialiased text-gray-900 pt-4 pb-12 sm:px-6 lg:px-8">

    <div class="sm:mx-auto w-full max-w-md">
        {{-- Ícone temático em Âmbar --}}
        <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
        </div>
        <h2 class="text-center text-2xl font-bold tracking-tight text-gray-900 mb-8">
            Atualizar Venda
        </h2>
    </div>

    <div class="sm:mx-auto w-full max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-xl sm:px-10 border border-gray-200">
            
            <form action="{{ route('vendas.update', $venda->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                {{-- Campo: Modelo --}}
                <div>
                    <label for="modelo" class="block text-sm font-medium text-gray-700 mb-1">Modelo</label>
                    <input type="text" id="modelo" name="modelo" value="{{ old('modelo', $venda->modelo) }}" required
                           class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 sm:text-sm">
                    @error('modelo')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Campo: Data da Venda --}}
                <div>
                    <label for="dt_venda" class="block text-sm font-medium text-gray-700 mb-1">Data da Venda</label>
                    <input type="date" id="dt_venda" name="dt_venda" value="{{ old('dt_venda', $venda->dt_venda) }}" required
                           class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 sm:text-sm">
                    @error('dt_venda')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Campo: Valor --}}
                <div>
                    <label for="valor" class="block text-sm font-medium text-gray-700 mb-1">Valor (R$)</label>
                    <input type="number" step="0.01" id="valor" name="valor" value="{{ old('valor', $venda->valor) }}" required
                           class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 sm:text-sm">
                    @error('valor')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Botões de Ação --}}
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

</div>
@endsection