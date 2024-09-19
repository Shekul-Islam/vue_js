<script setup>
import CategoryModel from './CategoryModel.vue';

var womencloth ={ name: 'save 20%', image: 'http://localhost:5173/src/assets/img/cat-1.jpg' };
var camera ={ name: 'save 20%', image: 'http://localhost:5173/src/assets/img/cat-2.jpg' };
var shoes ={ name: 'save 20%', image: 'http://localhost:5173/src/assets/img/cat-3.jpg' };
var facewash ={ name: 'save 20%', image: 'http://localhost:5173/src/assets/img/cat-4.jpg' };



</script>

<template>
            
            <div class="container-fluid pt-5">
                <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
                <div class="row px-xl-5 pb-3">
                   <CategoryModel :phototag="womencloth"/>
                   <CategoryModel :phototag="camera"/>
                   <CategoryModel :phototag="shoes"/>
                   <CategoryModel :phototag="facewash"/>
                   <CategoryModel :phototag="facewash"/>
                   <CategoryModel :phototag="shoes"/>
                   <CategoryModel :phototag="camera"/>
                   <CategoryModel :phototag="womencloth"/>
                   <CategoryModel :phototag="womencloth"/>
                   <CategoryModel :phototag="camera"/>
                   <CategoryModel :phototag="shoes"/>
                   <CategoryModel :phototag="facewash"/>
                </div>
            </div>
</template>


<style scoped>

</style>