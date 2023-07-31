<x-out.header pageTitle="Login - Candidate"/>

<div class="relative h-screen">
    <x-out.mobile-menu />
    <x-out.side-menu />
    <x-out.navbar />
    <div class="h-4/5 md:px-20 flex justify-center items-center">
        {{--  choice box   begins--}}
        <div class="bg-white rounded-xl drop-shadow-xl py-4 sm:py-6 px-2 sm:px-6 w-11/12 sm:w-1/2">
            <h1 class="text-xl font-light py-4 text-center text-blue-900">Login</h1>
            <form action="{{ route('candidates.login.submit') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-4">
                    <input type="text" name="email" placeholder="Email" class="border border-blue-900 w-full h-12 rounded-lg pl-1 sm:pl-3">
                    <input type="password" name="password" placeholder="Password" class="border border-blue-900 w-full h-12 rounded-lg pl-1 sm:pl-3">
                    <input type="submit" value="LOGIN" class="bg-blue-900 text-gray-100 h-12 rounded-lg cursor-pointer hover:bg-blue-600">
                    <div class="flex flex-col gap-4 sm:flex-row sm:gap-0 justify-between">
                        <a href="/candidates/register" class="text-blue-400 text-center text-xs hover:text-blue-900">{{ "Don't have an account? Click here" }}</a>
                        <a href="#" class="text-blue-400 text-center text-xs hover:text-blue-900">{{ "Forgot Password" }}</a>
                    </div>

                </div>
            </form>
        </div>
        {{--  choice box   ends--}}
    </div>
</div>

<x-out.footer/>
