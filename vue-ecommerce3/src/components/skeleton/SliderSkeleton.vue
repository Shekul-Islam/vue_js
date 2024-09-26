<script setup>

</script>

<template>
  
     
      <!-- Slider Skeleton -->
  <div class="slider-skeleton" style="">
    <!-- Slide 1 -->
    <div class="slide">
      <div class="slide-content">
        <div class="slide-image ssc-square mb"></div>
        
      </div>
      
      <!-- More content for the slide -->
    </div>
    <!-- More slides -->
  </div>
    
  </template>
  
  <style>
 
  .slider-skeleton{
    height: 320px;
    width: 414px;
  }
  
  .ssc-square {
    width: 378px;
    height: 18rem ;
    gap: 10px;
  }


  @media (max-width: 426px) {
    .ssc-square {
      width: 410px;
      height: 18rem ;
      gap: 10px;
    }
  
    .slider-skeleton{
  
      height: 320px; 
      width: 412px;
    }
  
  }


  @media (max-width: 376px) {
    .ssc-square {
      width: 340px;
    }
  
    .slider-skeleton{
      width: 340px;
    }
  }

  @media (max-width: 320px) {
    .ssc-square {
      width: 300px;
    }
  
    .slider-skeleton{
      width: 300px;
    }
  }
  
  </style>
  