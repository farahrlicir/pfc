<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/dashbboard.css">
    <link href="img/favicon.png" rel="icon">
    <title>Dashboard</title>
    @vite('resources/css/app.css','resources/js/app.js',)
</head>
<body>
    @include('layouts.main-sidebar')
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div>
    <x-layouts-app>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="p-2 flex items-center">
                            <label for="title" class="w-20">Title:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="title"/>
                        </div>
                        <div class="p-2 flex items-center">
                            <label for="body" class="w-20">Body:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="body"/>
                        </div>
                        <div class="p-6">
                            <x-primary-button  class="ml-3">
                                {{ __('Add Post') }}
                             </x-primary-button >
                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-layouts-app>
</body>
</html>