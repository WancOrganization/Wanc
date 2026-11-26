<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WANC Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex">
        @include('Admin.layouts.sidebar')

        <div class="flex-1 flex flex-col lg:ml-64">
            @include('Admin.layouts.navbar')

            <main class="flex-1 p-6">
                @if(session('message'))
                    <div class="mb-4 p-4 bg-green-100 border border-green-200 text-green-700 rounded-lg">
                        {{ session('message') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-200 text-red-700 rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>

            <footer class="bg-white border-t border-gray-200 p-4 text-center text-sm text-gray-500">
                &copy; {{ date('Y') }} WANC Studios. All rights reserved.
            </footer>
        </div>
    </div>

    @yield('js')
</body>
</html>
