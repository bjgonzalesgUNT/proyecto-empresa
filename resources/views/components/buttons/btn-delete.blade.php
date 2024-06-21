<form action="{{ route($route, $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit"
        class="bg-red-500 text-white p-2 rounded-md hover:bg-red-700 cursor-pointer grid content-center">
        @include('components.material-icons', ['icon' => 'delete'])
    </button>
</form>
