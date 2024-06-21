@if ($errors->any())
    <div class="w-1/3 mb-2 rounded-md bg-red-500 text-white p-2 text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-white">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
