@extends('layouts.app')

@section('title')
    edtiar cliente #{{ $person->id }}
@endsection

@section('content')
    <div class="w-full flex-col gap-4 flex items-center justify-center">
        @include('partials.validate-form-errors', ['errors' => $errors])
        <form method="POST" action="{{ route('clients.update', ['client' => $person]) }}" class="w-3/4 mt-4">
            @method('PATCH')
            @include('clients.partials.form-fields', ['btnTitle' => 'actualizar'])
        </form>
    </div>
@endsection
