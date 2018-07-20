<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', '艾泽拉斯') - 国家地理</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        {{--头部--}}
        @include('layouts._header')

        {{--内容--}}
        <div class="container">
            <div class="col-md-offset-1 col-md-10">
                @yield('content')
                {{--底部--}}
                @include('layouts._footer')
            </div>
        </div>
    </body>
</html>