@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="w-full lg:flex md:gap-10 md:items-center">
        <div class="lg:w-1/2  p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro de usuario">
        </div>

        <div class="lg:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="namne" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" placeholder="Tu nombre" type="text" value="{{ old('name') }}"
                        class="border p-3 w-full rounded-lg 
                        @error('name')
                            border-red-500    
                        @enderror" />
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="username" name="username" placeholder="Tu nombre de usuario" type="text"
                        value="{{ old('username') }}" class="border p-3 w-full rounded-lg
                        @error('username')
                            border-red-500    
                        @enderror" />
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" placeholder="Tu Email de Registro" type="text"
                        value="{{ old('email') }}" class="border p-3 w-full rounded-lg
                        @error('email')
                            border-red-500    
                        @enderror" />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" name="password" placeholder="Tu contraseña" type="password"
                        class="border p-3 w-full rounded-lg
                        @error('password')
                            border-red-500    
                        @enderror" />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                        Password</label>
                    <input id="password_confirmation" name="password_confirmation" placeholder="Repetir tu contraseña"
                        type="password" class="border p-3 w-full rounded-lg
                        " />
                </div>
                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg  " />
            </form>
        </div>
    </div>
@endsection
