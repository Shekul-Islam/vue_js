<script setup>
const props = defineProps({
  ptag: Object,
  required: true,
});

</script>
<template>
    <div class="product-offer mb-30" style="height: 200px;">
        <!-- {{ ptag }} -->
        <img class="img-fluid" :src="ptag.image" alt="">
        <div class="offer-text">
            <h6 class="text-white text-uppercase">{{ ptag?.maintag }}</h6>
            <h3 class="text-white mb-3">Special Offer</h3>
            <a href="" class="btn btn-primary">Shop Now</a>
        </div>
    </div>
</template>


<style scoped>

</style>