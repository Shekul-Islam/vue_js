<script setup>
import "skeleton-screen-css";
import SliderSkeleton from "../skeleton/SliderSkeleton.vue";

var banner = { image1: '@/assets/img/bannertop.jpg'}
</script>

<template>
  
   
   <div class="row px-xl-5">
    <template v-if="banner?.image1">
      
        <div>
          <img src="@/assets/img/bannertop.jpg" alt="" style="width: 100%">
        </div>
      
     
  </template>
  

  <template v-else>
      <div>
          <SliderSkeleton/>
      </div>
  </template>
   </div>
  



      
        <!-- Slider Skeleton -->
    <!-- <div class="slider-skeleton" style="height: 320px; width: 965px;">
      
      <div class="slide">
        <div class="slide-content">
          <div class="slide-image ssc-square mb"></div>
         
        </div>
        <div class="ssc-hr"></div>
        
      </div>
     
    </div> -->
     
</template>


<style scoped>


</style>