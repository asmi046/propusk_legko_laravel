import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'
import VueAxios from 'vue-axios'

import ModalWindow from './components/ModalWindow.vue'

const winApp = createApp({
    components:{
        ModalWindow,
    },
})

winApp.use(VueAxios, axios)
winApp.mount("#windowsApp")
