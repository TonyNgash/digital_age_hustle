<x-in.header />

<div class="relative min-h-screen md:flex">
    {{--  mobile menu bar   --}}
    <x-in.mobile-menu />

    {{--  sidebar   --}}
    <x-in.side-menu pageTitle="Search" />

    {{--  content  --}}
    <div class="pl-10 pr-10 bg-gray-100 md:ml-64 md:flex-1 relative">
        <x-in.content-header  role="Candidates" pageTitle="Search"/>

        <x-in.search-bar-main/>

        <div class="flex flex-wrap">
            @php($items=[1,2,3,4,5,6,7,8,9])
            @foreach ($items as $x)
                <x-in.card num="{{ $x }}"/>
            @endforeach
        </div>
    </div>

</div>
<x-in.footer />
