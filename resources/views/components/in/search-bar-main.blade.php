<!-- Order your soul. Reduce your wants. - Augustine -->
<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
<div class="">
    <div class="bg-white rounded-md drop-shadow-md py-2 md:py-4 px-3 md:px-6 my-6">
            <form action="" method="POST">
                @csrf
                <div class="flex flex-wrap flex-col gap-4 md:items-center md:flex-row md:justify-between">
                    <div class="ml-auto">
                        <span class="la la-map-marker"></span>
                        <select name="" id="" class="text-xs">
                            <option value="">Around Me</option>
                            <option value="">Location 1</option>
                            <option value="">Location 2</option>
                            <option value="">Location 3</option>
                            <option value="">Location 4</option>
                        </select>
                    </div>
                    <div class="md:flex-1 h-10">
                        <input type="text" name="search_terms" placeholder="Search by title, company or any keyword" class="pl-4 placeholder:text-xs w-full h-full">
                    </div>
                    <div class="ml-auto">
                        <button class="bg-blue-800 rounded-md text-white py-1 px-2 hover:bg-blue-600 md:py-2 md:px-3">
                            <span class="la la-search"></span>
                        </button>
                    </div>
                </div>
            </form>
    </div>
</div>

