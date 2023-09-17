<template>






</template>

<script setup>
import { ref } from 'vue';

let open = ref(false);

function MenuOpen() {
    open.value = !open.value;
}
</script>

<style scoped>

</style>
