<script setup>
import Banner from './Banner.vue';
import Description from './Description.vue';

</script>

<template>
    <div class="container topbanner">
        <div><Banner/></div>
        <div><Description/></div>
    </div>
</template>


<style scoped>

.topbanner {

    width: 100%;
    display: flex;
    align-items: center;
    justify-content:  space-between;
    
}

</style>