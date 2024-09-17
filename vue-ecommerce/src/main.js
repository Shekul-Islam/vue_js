

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import '@assets/css/template.css'
import '@assets/js/template.js'

const app = createApp(App)

app.use(router)

app.mount('#app')
