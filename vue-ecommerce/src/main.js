

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import '@/assets/css/vendor/template.css'
// import '@/template.js'

const app = createApp(App)

app.use(router)

app.mount('#app')
