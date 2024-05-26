@extends("layouts.app")

@section("title")
    blogs
@endsection

@section("content")
    <div>
        {{ "parametro opcional: " }}
        <span>{{ $id }}</span>
    </div>
@endsection
