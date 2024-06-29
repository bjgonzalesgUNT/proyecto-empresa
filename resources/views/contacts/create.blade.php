@extends('layouts.app')

@section('title')
    Crear contacto
@endsection

@section('content')
    <div class="flex flex-col justify-center w-full items-center">
        <form method="POST" class="w-1/3 flex flex-col gap-2 shadow-md rounded-md p-2" action="{{ route('contacts.store') }}">
            @csrf
            @include('contacts.partials.form-fields', ['btnTitle' => 'guardar'])

        </form>
    </div>
@endsection
