<template>
        <v-app id="inspire">

            <v-card>
            <v-toolbar max-height="60px" color="grey lighten-4" flat>
                <v-avatar size="45"><img v-bind:src="asset('img/icon.png')"></v-avatar>
                <v-toolbar-title>ศูนย์วิจัยและพัฒนานวัตกรรมอุทยานแห่งชาติ จังหวัดเชียงใหม่</v-toolbar-title>
            </v-toolbar>

            <a href="/app"><v-img v-bind:lazy-src="asset('img/banner.jpg')" max-height="300px" v-bind:src="asset('img/banner.jpg')">
            </v-img></a>

            <v-tabs color="green" class="sticky-tab" >
                <v-tabs-slider color="green"></v-tabs-slider>
                <v-tab to="/home">หน้าแรก</v-tab>
                <v-tab to="/profile">ประวัติ</v-tab>
                <v-tab to="/research">งานวิจัย</v-tab>
            </v-tabs>

            <v-container style="padding: 1rem;">
                <!-- router view -->
                <router-view></router-view>
            </v-container>
        </v-card>

            <v-footer dark padless>
                <v-card-text class="py-2 white--text text-center">
                    <strong>National Parks Research and Innovation Development Center Chiangmai Province</strong>
                </v-card-text>

            </v-footer>
        </v-app>

</template>

<script>
export default {};
</script>
