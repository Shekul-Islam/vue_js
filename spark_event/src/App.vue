<script setup>
import { TopHeader, Footer, MainHeader } from '@/components'

</script>

<template>
  <div>
    <header>
      <TopHeader/>
      <MainHeader/>
    </header>

    <main>
      <RouterView/>
    </main>

    <footer>
      <Footer/>
    </footer>
  </div>
</template>

<style scoped>

</style>