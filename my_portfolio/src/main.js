import './assets/css/main.css'
import './assets/styles/main.scss'
import '@fortawesome/fontawesome-free/css/all.min.css'

// import './assets/css/animations.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(router)

app.mount('#app')
