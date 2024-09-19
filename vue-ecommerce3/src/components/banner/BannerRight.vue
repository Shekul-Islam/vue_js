<script setup>
import BannerRightUp from './BannerRightUp.vue';
var arraypassing = {name: 'arraypassing', h3: 'Save 20%', maintag: 'arraypassing@example.com', image: 'http://localhost:5173/src/assets/img/offer-1.jpg'}
var secondarray = {name: 'save 20%', h3: 'save 30%', maintag: 'Prodcut Name', image: 'http://localhost:5173/src/assets/img/offer-2.jpg'}

</script>
<template>
    <div class="col-lg-4">
        <BannerRightUp :ptag="arraypassing" />
        <BannerRightUp :ptag="secondarray"/>
    </div>
</template>


<style scoped>

</style>