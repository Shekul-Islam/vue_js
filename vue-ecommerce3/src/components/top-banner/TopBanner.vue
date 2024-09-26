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
    gap: 60px;


    padding-bottom: 30px;
   
}


@media (max-width: 1024px) {
    .container{
        gap: 6px;
    }
  
  }

@media (max-width: 426px) {
    .container { 
        display: flex;
        flex-direction: column;
    }
  
  }




</style>