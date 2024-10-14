<script setup>
import Topbar from './components/common/Topbar.vue';
import Header from './components/common/Header.vue';
import Navbar from './components/common/Navbar.vue';
import Footer from './components/common/Footer.vue';


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