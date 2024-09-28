<template>
  <div>
    <!-- <input type="text" placeholder="type name" v-model="name">
    <h2>My name is: {{name}}</h2> -->

    <div><button @click="increment"> Count {{counter}}</button></div>
  </div>


 
</template>

<script setup>

// import { ref } from 'vue';
// export default {

//   setup() {
//     const name = ref("");
//   return {name}
//   }

// }

import { ref } from 'vue';

const counter = ref("0");

const increment = () => {
  counter.value += 1;
};



</script>

<style scoped>

</style>