<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>System</title>

        <!-- Livewire -->
        <livewire:styles />
        
        <!-- Tailwind css -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

        <!-- font-awesome icons -->
        <script src="https://kit.fontawesome.com/2d49de291b.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100"> 
            <div class="flex bg-white">
                <div class="md:flex w-2/5 md:w-1/4 h-screen sticky text-white top-0 bg-emerald-500 border-r hidden">
                    <div class="mx-auto py-5">
                        <ul>
                            <a href="{{ route('dashboard') }}"><li class="{{ (request()->segment(1) == 'dashboard') ? 'bg-emerald-700 border-emerald-700': '' }} px-3 py-1 flex space-x-2 mt-10 rounded-md border border-emerald-500 cursor-pointer hover:bg-emerald-600 hover:border-emerald-700">					
                                <span class="font-semibold"><i class="fa-solid fa-gauge-high"></i> Dashboard</span>
                            </li></a>
                            @if (auth()->user()->type == 'Admin')
                            <a href="{{ route('users.index') }}"><li class="{{ (request()->segment(1) == 'users') ? 'bg-emerald-700 border-emerald-700': '' }} px-3 py-1 flex space-x-2 mt-5 rounded-md border border-emerald-500 cursor-pointer hover:bg-emerald-600 hover:border-emerald-700">					
                                <span class="font-semibold"><i class="fa-solid fa-people-group"></i> Users</span>
                            </li></a>
                            @endif
                            <a href="{{ route('posts.index') }}"><li class="{{ (request()->segment(1) == 'posts') ? 'bg-emerald-700 border-emerald-700': '' }} px-3 py-1 flex space-x-2 mt-5 rounded-md border border-emerald-500 cursor-pointer hover:bg-emerald-600 hover:border-emerald-700">					
                                <span class="font-semibold"><i class="fa-solid fa-clone"></i> Posts</span>
                            </li></a>
                        </ul>
                    </div>
                </div>
                <main class="min-h-screen w-full bg-white border-l" style="overflow: hidden;">
                    @include('layouts.header')      
                    @yield('bodycontent')		
                </main>
            </diV>    
        </div>
        <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <livewire:scripts />
        @stack('js')
    </body>
</html>
