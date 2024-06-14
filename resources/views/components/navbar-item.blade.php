<a
    href="{{ route($ref) }}"
    class="{{ setActive($ref) ? "bg-indigo-500" : "" }} flex w-full items-center justify-center border-b border-b-white p-2 text-center font-semibold uppercase text-white hover:bg-indigo-700 md:border-none"
>
    {{ $title }}
</a>
