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
    width: 100px;
    height: 200px;
    gap: 10px;

}




</style>