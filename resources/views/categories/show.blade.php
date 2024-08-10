<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Categoría " . $category->name) }}
        </h2>
    </x-slot>
    <div class="px-40 py-12">
        <div class="p-1">
            <a
                href="{{ route("services.index") }}"
                class="font-bold text-cyan-700"
            >
                {{ __("Regresar") }}
            </a>
        </div>
        <div class="mt-2 grid grid-cols-4 gap-3">
            @forelse ($services as $service)
                <div class="">
                    <div class="h-60 w-full">
                        <img
                            src="{{ asset("storage/" . $service->image) }}"
                            alt="{{ __("img_" . $service->id) }}"
                            class="size-full object-cover"
                        />
                    </div>
                    <div class="bg-white p-2">
                        <h2 class="text-2xl font-bold">
                            {{ $service->title }}
                        </h2>
                        <p class="text-lg">{{ $service->description }}</p>
                        <p class="text-lg">{{ $service->category->name }}</p>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
</x-app-layout>
