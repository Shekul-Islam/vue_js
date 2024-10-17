import { createRouter, createWebHistory } from 'vue-router'

import Index from "../views/pages/Index.vue"
import Shop from '../views/pages/shop/Shop.vue';
import Seller from '../views/pages/seller/Seller.vue';


const routes = [
  { path: '/', name: 'index', component: Index },
  { path: '/shop', name: 'shop', component: Shop },
  { path: '/seller', name: 'seller', component: Seller}
  
];

const router = createRouter({
  
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
  
});


export default router;