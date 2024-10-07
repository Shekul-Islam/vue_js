import { createRouter, createWebHistory } from "vue-router";
import {
  HomePage,
  ShopPage,
  ProductDetailsPage,
  CheckoutPage,
  thankyou,
  AboutPage,
  ContactPage,
  FlashDealPage,
  FlashDealDetailsPage,
  campaignPage,
  campaignDetailsPage,
  BlogPage,
  BlogDetailsPage,
  Login,
  Registration,
  OtpLogin,
  OrderList,
  Profile,
  OldCheckoutPage,
  TermsConditions,
  PrivacyPolicy,
  ReturnRefund,
} from "@/views/pages";
import NProgress from "nprogress";
import {useAuth} from '@/stores'

const routes = [
  // Auth Pages
  {
    path: "/login",
    name: "Login",
    component: Login,
    meta: { title: "Nittonoton | Login", guest: true },
  },
  {
    path: "/registration",
    name: "Registration",
    component: Registration,
    meta: { title: "Nittonoton | Registration", guest: true },
  },
  {
    path: "/OtpLogin",
    name: "OtpLogin",
    component: OtpLogin,
    meta: { title: "Nittonoton | Otp-Code", guest: true },
  },
  {
    path: "/profile",
    name: "Profile",
    component: Profile,
    meta: { title: "Nittonoton | Profile", requiresAuth: true },
  },
  {
    path: "/order-list",
    name: "OrderList",
    component: OrderList,
    meta: { title: "Nittonoton | OrderList", requiresAuth: true },
  },

  // Other pages
  {
    path: "/",
    name: "homePage",
    component: HomePage,
    meta: { title: "Nittonoton | Home Page" },
  },
  {
    path: "/shop-page",
    name: "shopPage",
    component: ShopPage,
    meta: { title: "Nittonoton | Shop Page" },
  },
  {
    path: "/product-details/:id?/:slug?",
    name: "productDetailsPage",
    component: ProductDetailsPage,
    meta: { title: "Nittonoton | Product Details" },
  },
  {
    path: "/checkout-page",
    name: "checkoutPage",
    component: CheckoutPage,
    meta: { title: "Nittonoton | Checkout Page" },
  },
  {
    path: "/OldCheckoutPage",
    name: "OldCheckoutPage",
    component: OldCheckoutPage,
    meta: { title: "Nittonoton | OldCheckoutPage Page" },
  },
  {
    path: "/your-order-submited",
    name: "thankYou.page",
    component: thankyou,
    meta: { title: "Nittonoton | Thank You" },
  },
  {
    path: "/about-us",
    name: "aboutPage",
    component: AboutPage,
    meta: { title: "Nittonoton | About US" },
  },
  {
    path: "/contact-us",
    name: "contactPage",
    component: ContactPage,
    meta: { title: "Nittonoton | Contact US" },
  },
  {
    path: "/flash-deal",
    name: "flashDealPage",
    component: FlashDealPage,
    meta: { title: "Nittonoton | Flash Deals" },
  },
  {
    path: "/flash-deal-details/:campaignId/:productId",
    name: "FlashDealDetailsPage",
    component: FlashDealDetailsPage,
    meta: { title: "Nittonoton | Flash Deals Details" },
  },
  {
    path: "/campaign-page",
    name: "campaignPage",
    component: campaignPage,
    meta: { title: "Nittonoton | Campaign Page" },
  },
  {
    path: "/campaign-details-page/:campaignId/:productId",
    name: "campaignDetailsPage",
    component: campaignDetailsPage,
    meta: { title: "Nittonoton | Campaign Details Page" },
  },
  {
    path: "/blog-page",
    name: "blogPage",
    component: BlogPage,
    meta: { title: "Nittonoton | Blog Page" },
  },
  {
    path: "/blog-details-page/:postId",
    name: "blogDetailsPage",
    component: BlogDetailsPage,
    meta: { title: "Nittonoton | Blog Details Page" },
  },
  {
    path: "/terms-and-conditions",
    name: "TermsConditions",
    component: TermsConditions,
    meta: { title: "Glossit | Terms & Conditions Page" },
  },
  {
    path: "/Privacy-Policy",
    name: "PrivacyPolicy",
    component: PrivacyPolicy,
    meta: { title: "Glossit | Privacy & Policy Page" },
  },
  {
    path: "/Privacy-Policy",
    name: "ReturnRefund",
    component: ReturnRefund,
    meta: { title: "Glossit | Return & Refund Page" },
  },
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
  //dynamiclly scroll behavior start
  scrollBehavior() {
    return { top: 0, behavior: "smooth" };
  },
  //dynamiclly scroll behavior end
});

const DEFAULT_TITLE = "404";

router.beforeEach((to, from, next) => {
  // dynamiclly page title start
  document.title = to.meta.title || DEFAULT_TITLE;
  // dynamiclly page title end

  //dynamiclly scroll behavior start
  window.scrollTo(0, 0);
  //dynamiclly scroll behavior end

  // dynamiclly page progress bar start
  NProgress.start();
  // dynamiclly page progress bar end

  // dynamiclly Auth Checking Start
  const isLogin = useAuth();
  if(to.matched.some((record)=> record.meta.requiresAuth)){
    if (!isLogin.user.user) {
      next({name: 'Login'})  
    }else{
      next()
    }
  }else if(to.matched.some((record)=> record.meta.guest)){
    if (isLogin.user.user) {
      next({name: 'homePage'})  
    }else{
      next()
    }
  }else{
    next()
  }
// dynamiclly Auth Checking End
});

// dynamiclly page progress bar start
router.afterEach(() => {
  NProgress.done();
});
// dynamiclly page progress bar end


export default router;
