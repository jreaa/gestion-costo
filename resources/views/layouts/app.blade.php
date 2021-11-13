<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!--/Bootstrap/-->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.9.0/mdb.min.css" integrity="sha512-MAFufI57w9mLGud8BKZDbAT57+wu4QWMJJ9Bj5UXFaW99rswsKCvXKRxWlHwdo0yT1Of6TvvWfMqE16ktRcxfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!--Font-awesome-->
        <script src="https://kit.fontawesome.com/2564fbff4b.js" crossorigin="anonymous"></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>


        <style>
            .label-form{
                width: 100%;
                display: flex;
                justify-content: space-between;
            }
            .label-form > i {
                margin-right: 10px;
            }
            .select-form{
                border-radius: 6px;
                color:#4f4f4f!importat;
                width: 100%;
                font-size: 1rem;
                line-height: 1.5rem;
                border: 1px solid #bdbdbd;    
                --tw-shadow: 0 0 #0000;
            }
            .alert {
                height : 52px!important;
                text-align: end;
            }
            .alert > span {
                border-bottom : 1px solid #951d32;
            }
            .btn-pagination {
                background: #e48e66!important;
                color: white;
            }
        </style>
    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow" style="background:#e48e66!important">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            @include('sweetalert::alert')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
        ></script>

        @stack('modals')

        @livewireScripts
    </body>
</html>
