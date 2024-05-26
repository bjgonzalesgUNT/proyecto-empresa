@extends("layouts.app")

@section("title")
    servicios
@endsection

@section("content")
    <div>
        {{ "Parametro opcional: " }}
        <span>{{ $name }}</span>
    </div>
@endsection
