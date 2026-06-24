@extends('layouts.app')

@section('content')
    <main class="flex-1 p-6 md:p-8 flex items-center justify-center overflow-y-auto">
        <div class="w-full max-w-md mx-auto">

            <div class="text-center">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
                <h2 class="text-center text-2xl font-bold tracking-tight text-gray-900 mb-8">
                    Adicionar Novo Funcionário
                </h2>
            </div>
            <div class="bg-white py-8 px-4 shadow-sm sm:rounded-xl sm:px-10 border border-gray-200">

                <form action="{{ url('/funcionarios') }}" method="POST" class="space-y-6">
                    @csrf 

                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required
                               class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm">
                        @error('nome')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="turno" class="block text-sm font-medium text-gray-700 mb-1">Turno</label>
                        <input type="text" id="turno" name="turno" value="{{ old('turno') }}" placeholder="Ex: Matutino, Noturno" required
                               class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm">
                        @error('turno')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="horas" class="block text-sm font-medium text-gray-700 mb-1">Horas Mensais</label>
                        <input type="number" id="horas" name="horas" value="{{ old('horas') }}" required
                               class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm">
                        @error('horas')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end space-x-3 pt-2">
                        <a href="{{ url('/funcionarios') }}" class="w-1/2 sm:w-auto">
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