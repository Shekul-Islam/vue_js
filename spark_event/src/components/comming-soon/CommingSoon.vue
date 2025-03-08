<script setup>

</script>

<template>
    <div class="coming-soon">
        <div class="text">
            <slot/>
            <h1>Coming Soon ....</h1>
        </div>
    </div>
</template>

<style scoped>
.coming-soon{
    padding: 100px 0;
    border-bottom: 2px solid #000000;
}
.text{
    text-align: center;
    justify-content: center;
    align-items: center;
}
.text{
    font-size: 40px;
    font-weight: 900;
    color: #000000;
}
</style>