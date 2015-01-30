<!DOCTYPE html>
<html>
    <head>
        {{$meta}}
    </head>
    <body>
        <div class="container">
            <!--header-->
            {{$header}}

            @yield('content-header')
            @yield('content')

            {{$footer}}

        </div>
    </body>
</html>