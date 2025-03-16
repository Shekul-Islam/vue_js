<script setup>
import { RouterView } from 'vue-router'
import AnimatedBackgroundView from '@/components/common/AnimatedBackgroundView.vue'
import ProfileView from './components/common/ProfileView.vue'
import NavSidebarView from './components/common/NavSidebarView.vue'
</script>
<template>
  <!-- AnimatedBackground পুরো স্ক্রিন কভার করবে -->
  <div class="background-container">
    <AnimatedBackgroundView />
  </div>

  <div class="page-wrapper">
    <div class="profile fixed">
      <ProfileView />
    </div>

    <div class="content">
      <RouterView />
    </div>

    <NavSidebarView class="sidebar" />
  </div>
</template>

<style scoped>
/* পুরো ব্যাকগ্রাউন্ড কভার করার জন্য */
.background-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  z-index: -1; /* নিচে পাঠানো হলো */
}

/* Layout Flexbox */
.page-wrapper {
  display: flex;
  height: 100vh;
  position: relative; /* ব্যাকগ্রাউন্ডের উপরে রাখার জন্য */
  overflow: auto;
}

/* Background transparent রাখা হয়েছে */
.profile {
  display: grid;
  text-align: center;
  margin-left: 20px;
  width: 25%;
  min-width: 250px;
  padding: 10px;
  background: transparent; /* ব্যাকগ্রাউন্ড রিমুভ করা হলো */

  /* Sticky Effect */
  position: sticky;
  top: 10px;
  height: 95vh;
  z-index: 1000;
}

.sidebar {
  display: grid;
  text-align: center;
  margin-left: 20px;
  width: 20%;
  min-width: 250px;
  padding: 10px;
  background: transparent; /* ব্যাকগ্রাউন্ড রিমুভ করা হলো */
}

.content {
  flex: 1;
  padding: 20px;
}
</style>
