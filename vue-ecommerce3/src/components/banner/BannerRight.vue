<script setup>
import BannerRightUp from './BannerRightUp.vue';
var arraypassing = {name: 'arraypassing', h3: 'Save 20%', email: 'arraypassing@example.com', image: 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg'}
var secondarray = {name: 'save 20%'}

</script>
<template>
    <div class="col-lg-4">
        <BannerRightUp :ptag="arraypassing" />
        <BannerRightUp :ptag="arraypassing"/>
    </div>
</template>


<style scoped>

</style>