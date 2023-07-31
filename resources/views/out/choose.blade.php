<x-out.header pageTitle="CHOOSE"/>

<div class="relative h-screen">
    <x-out.mobile-menu />
    <x-out.side-menu />
    <x-out.navbar />
    <div class="h-4/5 md:px-20 flex justify-center items-center">
        {{--  choice box   begins--}}
        <div class="bg-white rounded-xl drop-shadow-xl py-4 sm:py-6 px-2 sm:px-6 w-11/12 sm:w-1/2">
            <h1 class="text-xs md:text-xl font-light py-4 text-center text-blue-900">Choose your path</h1>
            <a href="/candidates/login" class="text-white text-xs md:text-md rounded-xl bg-blue-900 block text-center my-2 md:my-2 py-6 mx-6">{{ "I'm Looking for a job" }}</a>
            <a href="/company/login" class="text-white text-xs md:text-md rounded-xl bg-yellow-500 block text-center my-2 md:my-2 py-6 mx-6">{{ "I want to hire" }}</a>
        </div>
        {{--  choice box   ends--}}
    </div>
</div>

<x-out.footer/>
