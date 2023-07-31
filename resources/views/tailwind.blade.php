<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/alpine.js')
</head>
<body>

    <!-- Order your soul. Reduce your wants. - Augustine -->
<div class="bg-white  py-4 px-16 drop-shadow-lg">
    <a href="">
        <span class="la la-cog text-xl text-blue-800"></span>
        <span class="text-xl font-extrabold text-blue-800">DIGITAL AGE HUSTLE</span>
    </a>
</div>

<h1 class="text-4xl font-extrabold text-blue-800">Testing tailwind</h1>
<div class="flex w-full">
    <div class="bg-red-200 w-1/2">
        left
    </div>
    <div class="bg-blue-200 w-1/2">
        right
    </div>
</div>
<div class="bg-blue-800 p-4">
    <h1 class="text-white text-4xl">Testing Apline.js</h1>

</div>
<h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
<div x-data="{ msg: 'mimi ni mimi'}" class="bg-blue-300 p-4">
    <h1 x-text="msg"></h1>
</div>
</body>
</html>

