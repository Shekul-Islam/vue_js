<script setup>
// All Import File  Code Is Here......................................................................................................
import { useCategory } from '@/stores'
import { storeToRefs } from 'pinia';
import { onMounted, ref } from 'vue'; 
import { useRouter } from 'vue-router';
// All Variable  Code Is Here.....................................................................................................
const category = useCategory();
// const { categories } = storeToRefs(category);
const router = useRouter();
const categories = ref('');
// API Calling Code Is Here.....................................................................................................



// All Function  Code Is Here.....................................................................................................

const getCategories = async() =>{
   categories.value =  await category.getData();
}

const activeIndex = ref(null);

 const toggleDropdown = (index, category) => {
  if (category.sub_category.length > 0) {
    if (activeIndex.value === index) {
      activeIndex.value = null; // Hide dropdown if already active
    } else {
      activeIndex.value = index; // Show dropdown of clicked item
    }
  }else{
    router.push({ name:'shopPage', query:{ category: category.id} });
  }
}

onMounted(() => {
   getCategories()
})

</script>

<template lang="">
  <div>
     <aside class="category-sidebar">
            <div class="category-header">
                <h4 class="category-title">
                    <i class="fas fa-align-left"></i>
                    <span>categories</span>
                </h4>
                <button class="category-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="category-list">
                 <li class="category-item" v-for="(category, index) in categories?.result" :key="index">
                    <router-link :to="{name: 'shopPage', query:{ category: category.id}}" class="category-link dropdown-link" :class="{ active: activeIndex === index }">
                        <i class="flaticon-vegetable"></i>
                        <span>{{ category.name }}</span>
                        <i class="fa-solid fa-arrow-right ms-auto fs-6" @click.prevent="toggleDropdown(index, category)" v-if="category.sub_category.length > 0"></i>
                    </router-link>
                    <ul class="dropdown-list:visible" v-show="activeIndex === index">
                        <li class="category-item" v-for="(subCategory, index) in category.sub_category">
                          <router-link :to="{ name:'shopPage', query:{ subCategory: subCategory.id} }" class="category-link">{{ subCategory.name }}</router-link>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="category-footer">
                <p class="text-danger fw-bold">&copy; 2024 Nittonoton</p>
            </div>
        </aside>
  </div>
</template>

<style>

</style>
