
import VueRouter from 'vue-router'

import Background from '@/js/components/Background.vue'
import Dummy from '@/js/components/ExampleComponent.vue'

Vue.use(VueRouter);

const routes = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/background',
            name: 'background',
            component: Background
        },
        {
            path: '/research',
            name: 'research',
            component: Dummy
        },
    ]
});

export default router;
