<script setup>

</script>

<template>
    
    <div>
      

        <ul>
         <li><RouterLink to="/" class="active" >Home</RouterLink></li>
         <li><RouterLink to="/about" >About</RouterLink></li>
         <li><RouterLink to="/Contact" >Contact</RouterLink></li>
         <li><RouterLink to="/Service" >Service</RouterLink></li>
       </ul>
       
    </div>

</template>

<style scoped>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover {
    background-color: #111;
  }
</style>

