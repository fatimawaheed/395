<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{url('/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
        <link href="{{url('/css/custom.css')}}" type="text/css" rel="stylesheet" media="all">
    </head>
    <body>
        <header>
            <div class="container">
                @include('components/logo_sec')
                @include('components/navigation')
                @include('components/slider')
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    @include('components/left_bar')
                    @include('components/feature_products')

                </div>
            </div>
        </section>
        <section>
            <div class="container hidden-xs">
                @include('components/carousel')
            </div>
        </section>
        <footer>
            <div class="container">
                @include('components.footer_nav')
                @include('components.info')
            </div>
        </footer>
        <script src="{{url('/js/jquery.js')}}" type="text/javascript"></script>
        <script src="{{url('/js/bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{url('/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>
