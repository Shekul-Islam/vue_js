<script setup>
import Banner from './Banner.vue';
import Description from './Description.vue';

</script>

<template>
    <div class="container">
       <div><Banner /></div>
        <div><Description /></div>
    </div>
</template>


<style scoped>

.container { 
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.container div{
    display: contents;
    width: 100px;
    height: 500px;
}


</style>