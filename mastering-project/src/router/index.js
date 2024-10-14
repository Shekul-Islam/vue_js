
import { createRouter, createWebHistory } from 'vue-router'
import Classic from '@/views/home/Classic.vue'
import HomePage from '@/views/pages/homepage/HomePage.vue'




const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage
    },

    {
      path: '/classic',
      name: 'classic',
      component: Classic
    },
    {
      path: '/shop-albab',
      name: 'albab',
      component: Classic
    },
  ]
})

export default router
