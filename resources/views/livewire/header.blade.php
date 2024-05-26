<header class="flex w-full flex-col bg-indigo-800 md:flex-row md:px-2">
    <div
        class="flex w-full items-center justify-between gap-3 p-2.5 text-xl uppercase"
    >
        <a class="flex items-center justify-center gap-2" href="/">
            <img
                src="{{ asset("/icons/home.svg") }}"
                alt="home_icon"
                class="size-8 md:size-10"
            />
            <div class="text-white">
                <span class="text-xl font-black uppercase md:text-2xl">
                    {{ "Empresa" }}
                </span>
                <span class="lowercase md:font-normal">{{ ".com" }}</span>
            </div>
        </a>
        <div class="flex items-center md:hidden">
            <button wire:click="handleShowHamburguerMenu">
                <img
                    src="{{ asset("/icons/menu.svg") }}"
                    alt="hamburger_icon"
                    class="size-6"
                />
            </button>
        </div>
    </div>

    <div
        class="{{ $showHamburguerMenu ? "flex" : "hidden" }} w-full flex-col md:flex md:flex-row md:gap-2"
    >
        @component("components.navbar-item", ["title" => "home", "ref" => "home.index"])
            
        @endcomponent

        @component("components.navbar-item", ["title" => "servicios", "ref" => "services.index"])
            
        @endcomponent

        @component("components.navbar-item", ["title" => "proyectos", "ref" => "projects.index"])
            
        @endcomponent

        @component("components.navbar-item", ["title" => "clientes", "ref" => "clients.index"])
            
        @endcomponent

        @component("components.navbar-item", ["title" => "blog", "ref" => "blogs.index"])
            
        @endcomponent

        @component("components.navbar-item", ["title" => "contacto", "ref" => "contact.index"])
            
        @endcomponent
    </div>
</header>
