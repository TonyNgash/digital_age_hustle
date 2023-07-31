<x-out.header pageTitle="Register-Candidate"/>

<div class="relative h-screen">
    <x-out.mobile-menu />
    <x-out.side-menu />
    <x-out.navbar />
    <div class=" h-auto sm:h-auto md:h-auto py-2 sm:py-4 md:py-8 md:px-20 flex justify-center items-center">
        {{--  choice box   begins--}}
        <div class="bg-white rounded-xl drop-shadow-xl py-4 sm:py-6 px-2 sm:px-6 w-11/12 sm:w-1/2">
            <h1 class="text-xl font-bold py-4 text-center text-blue-900">Register</h1>
            <form action="/candidates/login" method="POST">
                @csrf
                <div class="flex flex-col gap-4">
                    <input type="text" name="email" placeholder="Email" class="border border-blue-900 w-full h-12 rounded-lg pl-1 sm:pl-3">
                    <div class="flex flex-col gap-4 md:flex-row">
                        <input type="text" name="fname" placeholder="First Name" class="border border-blue-900 w-full h-12 rounded-lg pl-1 sm:pl-3">
                        <input type="text" name="surname" placeholder="Surname" class="border border-blue-900 w-full h-12 rounded-lg pl-1 sm:pl-3">
                    </div>
                    <div class="flex flex-col gap-4 md:flex-row">
                        <input type="text" name="password" placeholder="Password" class="border border-blue-900 w-full h-12 rounded-lg pl-1 sm:pl-3">
                        <input type="text" name="c_password" placeholder="Confirm Password" class="border border-blue-900 w-full h-12 rounded-lg pl-1 sm:pl-3">
                    </div>

                    <input type="submit" value="REGISTER" class="bg-blue-900 text-gray-100 h-12 rounded-lg cursor-pointer hover:bg-blue-600">
                    <div class="flex flex-col gap-4 sm:flex-row sm:gap-0 justify-between">
                        <a href="/candidates/login" class="text-blue-400 text-center text-xs hover:text-blue-900">{{ "Already have an account? Click here" }}</a>
                    </div>

                </div>
            </form>
        </div>
        {{--  choice box   ends--}}
    </div>
</div>

<x-out.footer/>
