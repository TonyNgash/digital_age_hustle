<!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->

<aside class="sidebar bg-blue-800 \text-blue-100 w-64 space-y-6 pl-3 inset-y-0 left-0 transform -translate-x-full fixed md:fixed md:translate-x-0 transition duration-200 ease-in-out z-50">

    <span class="sidebar-close-btn la la-arrow-left cursor-pointer absolute rounded-full bg-gray-100 text-blue-700 p-2 -right-3 top-4 border invisible md:invisible shadow-2xl drop-shadow-xl hover:bg-blue-700 hover:text-white"></span>
    {{--  logo  --}}
    <a href="/" class="text-white flex items-center space-x-2">
        <span class="la la-cog text-2xl"></span>
        <span class="font-extrabold">DIGITAL AGE HUSTLE</span>

    </a>

    {{--  nav  --}}
    <nav class="space-y-8">
        <a href="/" class="block py-2.5 px-4 hover:bg-white text-white hover:text-blue-900 mr-4 hover:rounded-full transition-all duration-200 ease-in-out">
            <span class="la la-home"></span>
            <span>Home</span>
        </a>
        @php ($candidates=[['Search','la-search'],['Profile','la-user-alt'],['Applications','la-cogs'],['Settings','la-tools']])
        @php ($companies=[['Search','la-search'],['Company Profile','la-user-alt'],['Applications','la-cogs'],['Settings','la-tools']])
        @php($styles = "bg-gray-100 hover:relative relative text-blue-800 rounded-s-full block py-2.5 px-4 hover:bg-gray-100 hover:text-blue-900 transition-all duration-200 ease-in-out")
        @php($styles2 = "block py-2.5 px-4 mr-4 text-white hover:bg-gray-100 hover:text-blue-900 hover:rounded-full transition-all duration-200 ease-in-out")
        @php($styles3 = "before:absolute before:w-5 before:h-5 before:bg-gray-100 before:-top-5 before:right-0 after:absolute after:w-5 after:h-5 after:bg-blue-800 after:-top-5 after:right-0 after:rounded-br-full")
        @php($styles4 = "before:absolute before:w-5 before:h-5 before:bg-gray-100 before:-bottom-5 before:right-0 after:absolute after:w-5 after:h-5 after:bg-blue-800 after:-bottom-5 after:right-0 after:rounded-tr-full")



        @foreach ($candidates as $menu)
                <a href="/{{ strtolower($menu[0]) }}" class="{{ $pageTitle == $menu[0] ? $styles : $styles2  }} ">
                    {!! $pageTitle == $menu[0] ? "<span class='$styles3'></span>" : ""  !!}
                    <span class="la {{ $menu[1] }}"></span>
                    <span>{{ $menu[0] }}</span>
                    {!! $pageTitle == $menu[0] ? "<span class='$styles4'>" : ""  !!}
                </a>
        @endforeach
    </nav>
</aside>
