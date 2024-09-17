import Home from '@/views/Home.vue'
import Shop from '@/views/Shop.vue'
import ShopDetails from '@/views/ShopDetails.vue'
import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
   
    {
      path: '/home',
      name: 'home',
      component: Home
    },

    {
      path: '/shop',
      name: 'shop',
      component: Shop
    },
    {
      path: '/shop-details',
      name: 'shop-details',
      component: ()=> import('../views/ShopDetails.vue')
    }

  ]
})

export default router
