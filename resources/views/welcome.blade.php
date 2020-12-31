<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skeleton Demo</title>

        @livewireStyles

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased bg-gray-100">
        <main role="main" class="px-4 py-8 flex justify-center">
            <div class="w-full lg:w-8/12">
                <h1 class="my-10 text-5xl font-extrabold text-center leading-none tracking-tight">
                  <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-pink-500">
                    Bonne et heureuse année 2021 🎉
                  </span>
                </h1>

                <div class="flex flex-col md:flex-row items-start lg:space-x-5 space-y-5">
                    <livewire:blog-post />
                    <livewire:card />
                </div>
            </div>
        </main>

        @livewireScripts
    </body>
</html>
