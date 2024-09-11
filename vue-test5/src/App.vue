<script setup>
import {RouterView} from "vue-router"
import Navbar from '@/components/Common/Navbar.vue'
import Footer from "./components/Common/Footer.vue";
</script>

<template>
  <div class="wrapper">
   <div><Navbar/></div>
  <RouterView />
    <div><Footer/></div>
  </div>

</template>

<style scoped>
.wrapper{
  margin: 40px;
}
</style>
