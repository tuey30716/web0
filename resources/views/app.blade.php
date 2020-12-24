<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ศูนย์วิจัยและพัฒนานวัตกรรมอุทยานแห่งชาติ จังหวัดเชียงใหม่</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <!-- Icon -->
    <link href="{{ asset('img/icon.png') }}" rel="icon">

</head>

<body style="margin-right: auto; margin-left:  auto; max-width: 1200px;
    padding-right: 10px; padding-left:  10px;">
    <div id="app">

        <v-app id="inspire">

            <v-card>
            <v-toolbar max-height="60px" color="grey lighten-4" flat>
                <v-avatar size="45"><img src="{{ asset('img/icon.png') }}"></v-avatar>
                <v-toolbar-title>ศูนย์วิจัยและพัฒนานวัตกรรมอุทยานแห่งชาติ จังหวัดเชียงใหม่</v-toolbar-title>
            </v-toolbar>

            <v-img lazy-src="{{ asset('img/banner.jpg') }}" max-height="300px" src="{{ asset('img/banner.jpg') }}">
            </v-img>
            <v-tabs color="green" style="position: -webkit-sticky; top:0rem; z-index:5;
            position: sticky;">
                <v-tabs-slider color="green"></v-tabs-slider>
                <v-tab>ประวัติ</v-tab>
                <v-tab>งานวิจัย</v-tab>
            </v-tabs>

            <v-container style="padding: 1rem;">
                <h1>Profile</h1>
                <subtitle-1>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                     ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </subtitle-1>
                <v-img lazy-src="{{ asset('img/21434.jpg') }}" max-width="500px" max-height="300px" src="{{ asset('img/21434.jpg') }}">
                </v-img>
                <subtitle-1>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                     ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                       ullamco laboris nisi ut aliquip ex ea commodo consequat.

                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                       ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                         ullamco laboris nisi ut aliquip ex ea commodo consequat.

                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                         ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                          ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                       ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 </subtitle-1>
            </v-container>
        </v-card>
            <v-footer dark padless absolute>
                <v-card-text class="py-2 white--text text-center">
                    <strong>National Parks Research and Innovation Development Center Chiangmai Province</strong>
                </v-card-text>
                </v-card>
            </v-footer>
        </v-app>
    </div>

</body>
<script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
