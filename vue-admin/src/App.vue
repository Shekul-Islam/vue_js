<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/common/Navbar.vue';
import Sidebar from './components/common/Sidebar.vue';
</script>

<template>
 
  <div><Navbar/></div>
  <div><Sidebar/></div>


  <RouterLink to="/">Home</RouterLink>
  <RouterLink to="/about">About</RouterLink>




  <RouterView />
</template>

<style scoped>




</style>
