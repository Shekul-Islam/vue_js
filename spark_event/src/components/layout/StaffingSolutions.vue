<script setup>

</script>

<template>
<div class="staffing-solution">
  <div class="container" >

    <div class="staffing-solution-content">
      <div class="content-image">
        <img src="@/assets/icon/home/staffing-solution/staffing_solution.svg" alt="">
      </div>

      <div class="text-content">
        <h3>Need Staffing Solutions?</h3>
        <p>Let's Work Together</p>
        <button class="primary-button">Fix a Metting</button>
      </div>

    </div>

  </div>
</div>
</template>

<style scoped>
.staffing-solution{
  background-color: #464646;
  padding: 28px;
}

.staffing-solution-content{
  display: flex;
  align-items: center;
  justify-content: center;
}
.content-image {
  margin-right: 125px;
}
.content-image img{
  width: 435px;
  height: 293px;
}

.text-content h3{
  font: normal normal normal 40px/45px Montserrat;
  color: #FFFFFF; 
  margin-bottom: 15px;
}

.text-content p{
  font: normal normal 300 28px/24px Montserrat;
  color: #FFFFFF;
  margin-bottom: 20px;
}

@media screen and (max-width: 991px) {
  .content-image {
    margin-right: 40px;
  }
  .content-image img{
    width: 295px;
    height: 200px;
  }
  .text-content h3{
    font: normal normal normal 28px/45px Montserrat;
    margin-bottom: 10px;
    line-height: 1;
  }
  
  .text-content p{
    font: normal normal 300 18px/24px Montserrat;
  }
  .text-content button{
    font: normal normal normal 15px/21px Poppins;
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 575px) {
  .staffing-solution-content{
    flex-direction: column;
  }
  .content-image {
    margin-right: 0;
    margin-bottom: 20px;
  }
  .content-image img{
    width: 230px;
    height: 155px;
  }
  .text-content{
    text-align: center;
  }
  .text-content h3{
    font: normal normal normal 22px/45px Montserrat;
    margin-bottom: 8px;
    line-height: 1;
  }
  
  .text-content p{
    font: normal normal 300 16px/24px Montserrat;
    margin-bottom: 15px;
  }
  .text-content button{
    font: normal normal normal 14px/21px Poppins;
  }
}

@media screen and (max-width: 360px) {
  .text-content h3{
    font: normal normal normal 18px/45px Montserrat;
    margin-bottom: 5px;
    line-height: 1;
  }
}
</style>