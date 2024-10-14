<script setup>
import Topbar from './components/common/Topbar.vue';
import Header from './components/common/Header.vue';
import Navbar from './components/common/Navbar.vue';
import Footer from './components/common/Footer.vue';
import CategorySidebar from './components/CategorySidebar.vue';
import CartSidebar from './components/CartSidebar.vue';
import NavSidebar from './components/NavSidebar.vue';
import MobileMenu from './components/MobileMenu.vue';
import ProductView from './components/ProductView.vue';
import Banner from './components/Banner.vue';
import Suggest from './components/Suggest.vue';
import Recent from './components/Recent.vue';
import Promotion from './components/Promotion.vue';
import Featured from './components/Featured.vue';
import Countdown from './components/Countdown.vue';
import NewItem from './components/NewItem.vue';
import Niche from './components/Niche.vue';
import Brand from './components/Brand.vue';
import Testimonial from './components/home/Testimonial.vue';
import Blog from './components/Blog.vue';
import Newsletter from './components/Newsletter.vue';
import Intro from './components/Intro.vue';

</script>


<template>
  <div>
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
    
    <!--=====================================
                HEADER TOP PART START
    =======================================-->
   <Topbar/>
    <!--=====================================
                HEADER TOP PART END 
    =======================================-->

    <!--=====================================
                HEADER PART START
    =======================================-->
   <Header/>
    <!--=====================================
                HEADER PART END
    =======================================-->

    <!--=====================================
                NAVBAR PART START
    =======================================-->
   <Navbar/>
    <!--=====================================
                NAVBAR PART END
    =======================================-->





    <!--=====================================
              CART SIDEBAR PART START
    =======================================-->
    <CartSidebar/>
    <!--=====================================
                CART SIDEBAR PART END
    =======================================-->


    <!--=====================================
              NAV SIDEBAR PART START
    =======================================-->
    <NavSidebar/>
    <!--=====================================
              NAV SIDEBAR PART END
    =======================================-->


    <!--=====================================
                MOBILE-MENU PART START
    =======================================-->
   <MobileMenu/>
    <!--=====================================
                MOBILE-MENU PART END
    =======================================-->


    <!--=====================================
                PRODUCT VIEW START
    =======================================-->
    <ProductView/>
    <!--=====================================
                PRODUCT VIEW END
    =======================================-->


    <!--=====================================
                BANNER PART START
    =======================================-->
    <Banner/>
    <!--=====================================
                BANNER PART END
    =======================================-->


    <!--=====================================
                SUGGEST PART START
    =======================================-->
   <Suggest/>
    <!--=====================================
                SUGGEST PART END
    =======================================-->


    <!--=====================================
                RECENT PART START
    =======================================-->
    <Recent/>
    <!--=====================================
                RECENT PART END
    =======================================-->


    <!--=====================================
                PROMOTION PART START
    =======================================-->
    <Promotion/>
    <!--=====================================
                PROMOTION PART END
    =======================================-->


    <!--=====================================
                FEATURED PART START
    =======================================-->
   <Featured/>
    <!--=====================================
                FEATURE PART END
    =======================================-->


    <!--=====================================
                COUNTDOWN PART START
    =======================================-->
   <Countdown/>
    <!--=====================================
                COUNTDOWN PART END
    =======================================-->


    <!--=====================================
                NEW ITEM PART START
    =======================================-->
    <NewItem/>
    <!--=====================================
                NEW ITEM PART END
    =======================================-->


    <!--=====================================
                PROMOTION PART START
    =======================================-->
    <Promotion/>
    <!--=====================================
                PROMOTION PART END
    =======================================-->


    <!--=====================================
                NICHE PART START
    =======================================-->
   <Niche/>
    <!--=====================================
                NICHE PART END
    =======================================-->


    <!--=====================================
                BRAND PART START
    =======================================-->
   <Brand/>
    <!--=====================================
                BRAND PART END
    =======================================-->


    <!--=====================================
              TESTIMONIAL PART START
    =======================================-->
    <Testimonial/>
    <!--=====================================
               TESTIMONIAL PART END
    =======================================-->


    <!--=====================================
                  BLOG PART START
    =======================================-->
 <Blog/>
    <!--=====================================
                  BLOG PART END
    =======================================-->


    <!--=====================================
                NEWSLETTER PART START
    =======================================-->
  <Newsletter/>
    <!--=====================================
                NEWSLETTER PART END
    =======================================-->


    <!--=====================================
                INTRO PART START
    =======================================-->
    <Intro/>
    <!--=====================================
                INTRO PART END
    =======================================-->
  <router-view></router-view>


    <!--=====================================
                 FOOTER PART START
    =======================================-->
   <Footer/>
    <!--=====================================
                  FOOTER PART END
    =======================================-->
  </div>
</template>


<style scoped>

</style>