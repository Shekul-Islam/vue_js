<script setup>
import BannerRightUp from './BannerRightUp.vue';
var arraypassing = {name: 'arraypassing', email: 'arraypassing@example.com', image: 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg'}

</script>
<template>
    <div class="col-lg-4">
        <BannerRightUp :ptag="arraypassing" />
        <BannerRightUp ptag="Save 50%"/>
    </div>
</template>


<style scoped>

</style>