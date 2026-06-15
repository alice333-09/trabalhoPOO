@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-slate-50 font-sans antialiased">
    
    <aside class="w-64 bg-white border-r border-slate-200 min-h-screen flex-shrink-0 flex flex-col justify-between hidden md:flex shadow-sm">
        <div>
            <div class="h-16 flex items-center px-6 border-b border-slate-100 bg-slate-900">
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 bg-indigo-500 rounded-lg flex items-center justify-center text-white font-black text-sm">LN</div>
                    <span class="text-base font-bold text-white tracking-wide">Gerenciador LN</span>
                </div>
            </div>

            <nav class="p-4 space-y-1.5">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-600' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-950' }}">
                    <svg class="w-5 h-5 mr-3 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ url('/funcionarios') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-950 transition duration-200">
                    <svg class="w-5 h-5 mr-3 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    Funcionários
                </a>

                <a href="{{ url('/clientes') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl transition duration-200 {{ request()->is('clientes*') ? 'bg-emerald-50 text-emerald-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-950' }}">
                    <svg class="w-5 h-5 mr-3 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 014 0m-3 7a3 3 0 11-6 0 3 3 0 016 0zm6 3h-2m2-3h-2"></path>
                    </svg>
                    Clientes
                </a>

                <a href="{{ url('/vendas') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-950 transition duration-200">
                    <svg class="w-5 h-5 mr-3 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Vendas
                </a>
            </nav>
        </div>
    </aside>

    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
        
        <header class="bg-white border-b border-slate-200 h-16 flex items-center px-6 md:px-8 justify-between z-10 shadow-xs">
            <h2 class="font-bold text-lg text-slate-800 tracking-tight">
                {{ __('Dashboard') }}
            </h2>
        </header>

        <main class="flex-1 overflow-y-auto p-6 md:p-8">
            <div class="max-w-5xl mx-auto space-y-8">
                
                <div class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 shadow-xs relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-indigo-50 rounded-full blur-2xl opacity-70 pointer-events-none"></div>
                    <h1 class="text-2xl font-extrabold text-slate-900 sm:text-3xl tracking-tight">
                        Seja bem-vindo(a), <span class="text-indigo-600">{{ Auth::user()->name }}</span>!
                    </h1>
                    <p class="mt-1.5 text-sm text-slate-500">Painel operacional centralizado do Sistema Gerenciador LN.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-3 sm:gap-6">
                    
                    <a href="{{ url('/funcionarios') }}" class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-xs hover:border-indigo-500 hover:-translate-y-1 hover:shadow-md transition duration-300 flex flex-col justify-between">
                        <div>
                            <div class="w-11 h-11 bg-sky-50 rounded-xl flex items-center justify-center text-sky-600 group-hover:bg-indigo-600 group-hover:text-white transition duration-300 mb-5 shadow-xs">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1.5">Funcionários</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">Gerencie o cadastro, escalas de turnos e horas trabalhadas da equipe.</p>
                        </div>
                        <div class="mt-6 text-sm font-semibold  group-hover:text-indigo-700 flex items-center">
                            <span>Acessar módulo</span>
                            <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>

                    <a href="{{ url('/clientes') }}" class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-xs hover:border-emerald-500 hover:-translate-y-1 hover:shadow-md transition duration-300 flex flex-col justify-between">
                        <div>
                            <div class="w-11 h-11 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition duration-300 mb-5 shadow-xs">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 014 0m-3 7a3 3 0 11-6 0 3 3 0 016 0zm6 3h-2m2-3h-2"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1.5">Clientes</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">Acompanhe perfis, datas de interações e histórico detalhado de compras.</p>
                        </div>
                        <div class="mt-6 text-sm font-semibold text-emerald-600 group-hover:text-emerald-700 flex items-center">
                            <span>Acessar módulo</span>
                            <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>

                    <a href="{{ url('/vendas') }}" class="group bg-white p-6 rounded-2xl border border-slate-200 shadow-xs hover:border-amber-500 hover:-translate-y-1 hover:shadow-md transition duration-300 flex flex-col justify-between">
                        <div>
                            <div class="w-11 h-11 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition duration-300 mb-5 shadow-xs">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1.5">Vendas</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">Monitore relatórios de faturamento, novos pedidos e métricas financeiras.</p>
                        </div>
                        <div class="mt-6 text-sm font-semibold text-amber-600 group-hover:text-amber-700 flex items-center">
                            <span>Acessar módulo</span>
                            <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>

                </div>

            </div>
        </main>
    </div>
</div>
@endsection