

<template>
 <div><input type="text" placeholder="type here" v-model="name"></div>
 <h1>My name is: {{name}}</h1>
</template>

<script>

import { ref } from 'vue';

export default {

  
  setup() {
    const name = ref("");
    return {name}
  
  }

}
  
</script>


<style scoped>

</style>