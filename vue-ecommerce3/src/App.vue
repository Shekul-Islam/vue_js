<script setup>
import {  RouterView } from 'vue-router'
import Topbar from './components/common/Topbar.vue';
import Navbar from './components/common/Navbar.vue';
import Footer from './components/common/Footer.vue';
</script>

<template>
 <div><Topbar/></div>
  <div><Navbar/></div>
  <RouterView/>
  <div>
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
  </div>
  <div><Footer/></div>
</template>

<style scoped>

</style>
