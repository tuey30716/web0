<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ศูนย์วิจัยและพัฒนานวัตกรรมอุทยานแห่งชาติ จังหวัดเชียงใหม่</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <!-- Icon -->
    <link href="{{ asset('img/icon.png') }}" rel="icon">
</head>

<body>
    <div id="app">
        <v-app v-cloak>

            <v-card>
            <v-toolbar max-height="60px" color="grey lighten-4" flat>
                <v-avatar size="45"><img src="{{ asset('img/icon.png') }}"></v-avatar>
                <v-toolbar-title>ศูนย์วิจัยและพัฒนานวัตกรรมอุทยานแห่งชาติ จังหวัดเชียงใหม่</v-toolbar-title>
            </v-toolbar>

            <a href="/"><v-img href="/" lazy-src="{{ asset('img/banner.jpg') }}" max-height="300px" src="{{ asset('img/banner.jpg') }}">
            </v-img></a>

            <v-tabs color="green" class="sticky-tab" >
                <v-tab href="/">หน้าแรก</v-tab>
                <v-tab href="/profile">ประวัติ</v-tab>
                <v-tab >งานวิจัย</v-tab>
            </v-tabs>


            <v-container style="padding: 1rem;">
                <!-- content -->
                    @yield('content')
            </v-container>
        </v-card>

            <v-footer padless color="green lighten-1">

                <v-card-text class="py-2 white--text text-center" >
                    <strong>National Parks Research and Innovation Development Center Chiangmai Province</strong>
                    <br/><strong>ศูนย์วิจัยและพัฒนานวัตกรรมอุทยานแห่งชาติ จังหวัดเชียงใหม่</strong>
                </v-card-text>

            </v-footer>
        </v-app>

    </div>

</body>
<script defer src="{{ mix('js/app.js') }}"></script>
</body>

</html>
