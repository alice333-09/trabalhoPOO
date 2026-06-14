<x-app-layout>
    <div class="flex min-h-screen bg-gray-50">
        
        <aside class="w-64 bg-white border-r border-gray-200 min-h-screen hidden md:block flex-shrink-0">
            <div class="h-16 flex items-center px-6 border-b border-gray-200 bg-gray-900">
                <span class="text-lg font-bold text-white tracking-wider">Gerenciador LN</span>
            </div>

            <nav class="p-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl transition duration-150 {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
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

                <a href="{{ url('/clientes') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition duration-150 {{ request()->is('clientes*') ? 'bg-emerald-50 text-emerald-600' : '' }}">
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

        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            
            <header class="bg-white shadow-sm border-b border-gray-200 h-16 flex items-center justify-between px-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </header>

            <main class="flex-1 overflow-y-auto p-6 md:p-8">
                <div class="max-w-5xl mx-auto">
                    
                    <div class="bg-white overflow-hidden shadow-sm rounded-xl border border-gray-200 pb-5 mb-8 p-6">
                        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl tracking-tight">
                            Seja bem-vindo(a), <span class="text-blue-600">{{ Auth::user()->name }}</span>!
                        </h1>
                        <p class="mt-1 text-sm text-gray-500">Painel de controle do Sistema Gerenciador LN.</p>
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-6">
                        
                        <a href="{{ url('/funcionarios') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md hover:border-blue-500 transition duration-200 flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition duration-200 mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Funcionários</h3>
                                <p class="text-sm text-gray-500">Gerencie o cadastro, turno e horas trabalhadas da equipe.</p>
                            </div>
                            <div class="mt-4 text-sm font-medium text-blue-600 group-hover:text-blue-700 flex items-center">
                                Acessar módulo &rarr;
                            </div>
                        </a>

                        <a href="{{ url('/clientes') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md hover:border-emerald-500 transition duration-200 flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 bg-emerald-50 rounded-lg flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition duration-200 mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 014 0m-3 7a3 3 0 11-6 0 3 3 0 016 0zm6 3h-2m2-3h-2"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Clientes</h3>
                                <p class="text-sm text-gray-500">Visualize histórico, datas e compras realizadas por clientes.</p>
                            </div>
                            <div class="mt-4 text-sm font-medium text-emerald-600 group-hover:text-emerald-700 flex items-center">
                                Acessar módulo &rarr;
                            </div>
                        </a>

                        <a href="{{ url('/vendas') }}" class="group bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md hover:border-amber-500 transition duration-200 flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 bg-amber-50 rounded-lg flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition duration-200 mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Vendas</h3>
                                <p class="text-sm text-gray-500">Acompanhe relatórios, valores e novos pedidos.</p>
                            </div>
                            <div class="mt-4 text-sm font-medium text-amber-600 group-hover:text-amber-700 flex items-center">
                                Acessar módulo &rarr;
                            </div>
                        </a>

                    </div>

                </div>
            </main>
        </div>
    </div>
</x-app-layout>