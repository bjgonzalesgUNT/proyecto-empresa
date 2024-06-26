@extends('layouts.app')

@section('title')
    Crear cliente
@endsection

@section('content')
    <div class="w-full flex-col gap-4 flex items-center justify-center">
        @include('partials.validate-form-errors', ['errors' => $errors])
        <form method="POST" action="{{ route('clients.store') }}" class="w-3/4 mt-4">
            @method('POST')
            @include('clients.partials.form-fields', ['btnTitle' => 'Guardar'])
        </form>
    </div>
@endsection
