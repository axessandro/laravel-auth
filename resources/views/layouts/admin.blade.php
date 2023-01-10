<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body class="bg-dark">
    <header class="p-4 bg-dark d-flex justify-content-between">
        <h1 class="mb-0 text-light"><span class="text-danger">ADMIN</span> VIEW</h1>
        <a class="btn text-dark bg-white" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Sign
            out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
    </header>

    <div class="d-flex">
        <div class="sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark h-100" style="width: 280px;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="nav-link text-white
                        {{ Route::currentRouteName() === 'admin.dashboard' ? 'bg-danger' : '' }}">
                            <i class="fa-solid fa-gauge-high text-light"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.projects.index') }}"
                            class="nav-link text-white
                        {{ Route::currentRouteName() === 'admin.projects.index' ? 'bg-danger' : '' }}">
                            <i class="fa-solid fa-box-archive text-light"></i>
                            Archive
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <main class="w-100">
            @yield('content')
        </main>
    </div>
</body>

</html>