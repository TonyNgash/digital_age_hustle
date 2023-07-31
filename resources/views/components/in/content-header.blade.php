<!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
<div>
    <div class="grid gap-4 grid-cols-2 md:flex md:justify-between md:pt-2 md:pb-2">
        <div class="col-span-2 grid place-items-center border-b border-gray-300 pb-2 text-xl font-semibold md:border-0 md:text-3xl">
            <h1>{{ $pageTitle }}</h1>
        </div>
        <div class="flex gap-4">
            <div class="flex gap-1 items-center cursor-pointer">
                <span class="la la-envelope text-xl relative md:text-4xl">
                    <span class="absolute inline-flex items-center w-4 h-4 text-xs font-bold text-white bg-red-500 rounded-3xl -top-0 -right-0 p-1">3</span>
                </span>
                <span class="text-xs md:text-lg md:font-semibold">Messages</span>
            </div>
            <div class="flex gap-1 items-center cursor-pointer">
                <span class="la la-bell text-xl relative md:text-4xl">
                    <span class="absolute inline-flex items-center w-4 h-4 text-xs font-bold text-white bg-red-500 rounded-3xl -top-0 right-0 p-1">3</span>
                </span>
                <span class="text-xs md:text-lg md:font-semibold">Notifications</span>
            </div>
        </div>
        <div class="flex gap-4 items-center justify-end">
            <div class="flex flex-col">
                <span class="font-semibold text-xs">James Dean</span>
                <span class="font-light text-xs">Developer</span>
            </div>
            <div class="cursor-pointer">
                <img src="{{ asset('assets/files/candidate_profile_pics/profile_01.jpg') }}" alt="" class="rounded-full w-8 h-8">
            </div>
        </div>
    </div>
    <div class="text-xs pt-2 pb-2">
        <span class="font-semibold">{{ $role }}</span>
        <span> > </span>
        <span>{{ $pageTitle }}</span>
    </div>
</div>
