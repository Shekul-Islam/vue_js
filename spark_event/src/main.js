import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

// bootstrap
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Nprogress
import "nprogress/nprogress.css";

// Font Awesome
import '@fortawesome/fontawesome-free/css/all.css';

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
