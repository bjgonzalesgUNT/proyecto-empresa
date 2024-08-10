@if ($errors->any())
    <div class="mb-2 w-1/3 rounded-md bg-red-500 p-2 text-center text-white">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-white">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
