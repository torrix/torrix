<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Matt Fletcher t/a Torrix - Full-stack PHP Web Developer in Lancaster, UK</title>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="top">
    <div class="uk-background-primary uk-light" data-uk-sticky>
        <nav class="uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <div class="uk-navbar" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo" data-uk-scroll="duration: 300" href="/#top">
                            <img src="/gfx/torrix-logo.png" alt="Torrix Logo" style="height: 40px">
                        </a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a data-uk-scroll="duration: 300" href="/#top">
                                    <span data-uk-icon="icon:home"></span>
                                </a>
                            </li>
                            <li><a data-uk-scroll="offset:80; duration: 300" href="/#about">About</a></li>
                            <li><a data-uk-scroll="offset:80; duration: 300" href="/#skills">Skills</a></li>
                            <li><a data-uk-scroll="offset:80; duration: 300" href="/#history">History</a></li>
                            <li><a data-uk-scroll="offset:80; duration: 300" href="/#contact">Contact</a></li>
                            <li><a target="_blank" href="/matt-fletcher-cv.pdf">CV</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <main data-uk-height-viewport="expand:true">
        @yield('content')
    </main>

    <footer class="uk-section uk-section-xsmall uk-section-primary">
        <div class="uk-container">
            <div class="uk-grid uk-text-center uk-text-left@s uk-flex-middle" data-uk-grid>
                <div class="uk-text-small uk-text-muted uk-width-1-3@s">
                    Designed and developed by Matt Fletcher
                </div>
                <div class="uk-text-center uk-width-1-3@s">
                    <a target="_blank" href="https://twitter.com/mattfletcher"
                       class="uk-icon-button uk-margin-small-right" data-uk-icon="twitter"></a>
                    <a target="_blank" href="https://github.com/Torrix"
                       class="uk-icon-button" data-uk-icon="github"></a>
                </div>
                <div class="uk-text-small uk-text-muted uk-text-center uk-text-right@s uk-width-1-3@s">
                    Built with <a target="_blank" href="http://getuikit.com"><span data-uk-icon="uikit"></span></a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
