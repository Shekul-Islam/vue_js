import '@/assets/css/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import "skeleton-screen-css";


// import '@/template.js'

const app = createApp(App)

app.use(router)

app.mount('#app')
