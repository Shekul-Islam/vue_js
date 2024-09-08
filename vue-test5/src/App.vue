<script setup>
import {RouterView} from "vue-router"
import Navbar from '@/components/Common/Navbar.vue'
import Footer from "./components/Common/Footer.vue";
</script>

<template>
  <div>
    <Navbar/>
  <RouterView />
    <Footer/>
  </div>

</template>

<style scoped>

</style>
