import { createMemoryHistory, createRouter } from 'vue-router'

import HomeView from '@/views/Home.vue'
import About from '@/views/About.vue'

const routes = [
  { path: '/',      name:'home',  component: HomeView },
  { path: '/about', name:'about', component: About }
]

const router = createRouter({
  history: createMemoryHistory(),
  routes,
})

export default router