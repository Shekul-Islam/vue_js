<template>
  <div>
    <!-- <input type="text" placeholder="type name" v-model="name">
    <h2>My name is: {{name}}</h2> -->

    <!-- <div><button @click="increment"> Count {{counter}}</button></div> -->

    <!-- {{ nameRef }}
    {{ nameReactive }}

    <div><button @click="changeFunction"> Change it</button></div> -->


    {{ name1 }}
    {{ name2 }}
    <div><button @click="changeFunction">Change</button></div>

    

  </div>



</template>

<script >

export default {
  data (){
    return {
      name1: "Raju",
    name2: "Sheheen",
    }
  },

  methods: {
    changeFunction(){
      this.name1 = "Rakib";
      this.name2 = "Tuhin";
    },
  },

  mounted() {
    this.changeFunction();

  },

};

// ** V-model setup function ** //

// import { ref } from 'vue';
// export default {

//   setup() {
//     const name = ref("");
//   return {name}
//   }
// }


// ** v-model ref value ** //
// import { ref } from 'vue';

// const counter = ref(0);

// const increment = () => {
//   counter.value += 1;
// };


// ** composition api ref and reactive ** //

// import {ref, reactive} from 'vue';
// const nameRef = ref({name: 'Jakir'});
// const nameReactive = reactive({name: 'Shakil'});
// const changeFunction = () => {
//   nameRef.value.name = "Tuhin";
//   nameReactive.name = "Mamun";
// }



</script>

<style scoped>

</style>