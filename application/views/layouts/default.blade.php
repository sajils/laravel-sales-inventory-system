<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title }}</title>

    {{ Asset::styles() }}

</head>
<body>

    @include('components.topbar')

    @include('components.sidebar')

    <div class="content container-fluid">

        @yield('content')

    </div>

    {{ Asset::scripts() }}

</body>
</html>