import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/views/Home.vue';
import Men from '@/views/Men.vue';
import Women from '@/views/Women.vue';
import Baby from '@/views/Baby.vue';
import Blog from '@/views/Blog.vue';
import Contact from '@/views/Contact.vue';
import About from '@/views/About.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/men',
      name: 'men',
      component: Men
    },
    {
      path: '/women',
      name: 'women',
      component: Women
    },
    {
      path: '/baby',
      name: 'baby',
      component: Baby
    },
    {
      path: '/shop',
      name: 'shop',
      component: Shop
    },
    {
      path: '/blog',
      name: 'blog',
      component: Blog
    },
    {
      path: '/contact',
      name: 'contact',
      component: Contact
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/About.vue')
    }
  ]
})

export default router
