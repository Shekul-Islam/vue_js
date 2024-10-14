
import { createRouter, createWebHistory } from 'vue-router'
import Classic from '@/views/home/Classic.vue'
import HomePage from '@/views/pages/HomePage.vue'
import Category from '@/views/home/Category.vue'
import Grid from '@/views/home/Grid.vue'
import Index from '@/views/home/Index.vue'
import Standard from '@/views/home/Standard.vue'




const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage
    },
    {
      path: '/grid',
      name: 'grid',
      component: Grid
    },
    {
      path: '/index',
      name: 'index',
      component: Index
    },
    {
      path: '/classic',
      name: 'classic',
      component: Classic
    },
    {
      path: '/standard',
      name: 'standard',
      component: Standard
    },
    {
      path: '/category',
      name: 'category',
      component: Category
    },
  ]
})

export default router
