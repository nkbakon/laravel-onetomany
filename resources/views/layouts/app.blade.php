<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>One to Many</title>
        
        <!-- Tailwind css -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100"> 
            <div class="flex bg-white">
                <div class="md:flex w-2/5 md:w-1/4 h-screen sticky text-white top-0 bg-violet-500 border-r hidden">
                    <div class="mx-auto py-10">
                        <ul>
                            <a href=""><li class="{{ (request()->segment(1) == 'dashboard') ? 'bg-violet-700 border-violet-700': '' }} px-3 py-1 flex space-x-2 mt-10 rounded-md border border-violet-500 cursor-pointer hover:bg-violet-600 hover:border-violet-700">					
                                <span class="font-semibold"><i class="fa fa-home"></i> Dashboard</span>
                            </li></a>
                            <a href="{{ route('category.index') }}"><li class="{{ (request()->segment(2) == 'category') ? 'bg-violet-700 border-violet-700': '' }} px-3 py-1 flex space-x-2 mt-5 rounded-md border border-violet-500 cursor-pointer hover:bg-violet-600 hover:border-violet-700">					
                                <span class="font-semibold"><i class="fa-sharp fa-solid fa-handshake"></i> Categories</span>
                            </li></a>
                            <a href="{{ route('products.index') }}"><li class="{{ (request()->segment(2) == 'products') ? 'bg-violet-700 border-violet-700': '' }} px-3 py-1 flex space-x-2 mt-5 rounded-md border border-violet-500 cursor-pointer hover:bg-violet-600 hover:border-violet-700">					
                                <span class="font-semibold"><i class="fa-solid fa-box-open"></i> Products</span>
                            </li></a>
                        </ul>
                    </div>
                </div>
                <main class="min-h-screen w-full bg-white border-l">    
                    @yield('bodycontent')		
                </main>
            </diV>    
        </div>
        <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    </body>
</html>
