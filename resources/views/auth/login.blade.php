@extends('layouts.master')
@section('content')
    <div class="mb-0 w-screen lg:mx-auto lg:w-[500px] card shadow-lg border-none shadow-slate-100 relative">
        <div class="!px-10 !py-12 card-body">
            <a href="#!">
                <img src="{{ asset('storage/site/policia_penal_logo.svg') }}" alt="" class="hidden h-28 mx-auto dark:block">
                <img src="{{ asset('storage/site/policia_penal_logo.svg') }}" alt="" class="block h-28 mx-auto dark:hidden">
            </a>

            <div class="mt-4 text-center">
                <h4 class="mb-1 text-custom-500 dark:text-custom-500">Bem-vindo !</h4>
                <p class="text-slate-500 dark:text-zink-200">Acesso Restrito da Polícia Penal do Tocantins</p>
            </div>

            <form action="{{ route('login') }}" class="mt-10" id="" method="POST">
                @csrf
                <div class="hidden px-4 py-3 mb-3 text-sm text-green-500 border border-green-200 rounded-md bg-green-50 dark:bg-green-400/20 dark:border-green-500/50" id="successAlert">
                    Você fez login com <b>sucesso</b>.
                </div>
                <div class="mb-3">
                    <label for="username" class="inline-block mb-2 text-base font-medium">Email ID</label>
                    <input type="text" id="email" name="email" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Digite seu e-mail">
                    <div id="username-error" class="hidden mt-1 text-sm text-red-500">Por favor, insira um endereço de e-mail válido.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="inline-block mb-2 text-base font-medium">Senha</label>
                    <input type="password" id="password" name="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Digite a senha">
                    <div id="password-error" class="hidden mt-1 text-sm text-red-500">A senha deve ter pelo menos 8 caracteres e conter letras e números.</div>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <input id="checkboxDefault1" class="border rounded-sm appearance-none size-4 bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400" type="checkbox" value="">
                        <label for="checkboxDefault1" class="inline-block text-base font-medium align-middle cursor-pointer">Lembrar-me</label>
                    </div>
                    <div id="remember-error" class="hidden mt-1 text-sm text-red-500">Por favor, verifique a opção "Lembrar-me" antes de enviar o formulário.</div>
                </div>
                <div class="mt-10">
                    <button type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Entrar</button>
                </div>
            </form>
        </div>
    </div>
    @section('script')
    @endsection
@endsection
