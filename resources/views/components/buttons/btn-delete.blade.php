<form action="{{ route($route, $id) }}" method="POST">
    @csrf
    @method("DELETE")
    <button
        type="submit"
        class="grid cursor-pointer content-center rounded-md bg-red-500 p-2 text-white hover:bg-red-700"
    >
        @include("components.material-icons", ["icon" => "delete"])
    </button>
</form>
