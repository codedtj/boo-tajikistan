<script setup>

import PublicLayout from "@/Layouts/PublicLayout.vue";
import PrimeButton from "@/Components/PrimeButton.vue";
import MainCarousel from "@/Components/MainCarousel.vue";
</script>

<template>
<public-layout>
    <div class="container mx-auto">
        <main-carousel></main-carousel>
        <div class="mt-5 grid grid-cols-1 md:grid-cols-2" style="background: #FFB990">
            <div class="mx-auto py-10">
                <h1 class="uppercase font-bold text-4xl">скидки до 20%.</h1>
                <prime-button class="mt-5">Искать парфюм</prime-button>
            </div>
            <div class="bg-[url('images/new.png')]">
                <div class="flex">

                </div>
            </div>
        </div>
    </div>
</public-layout>
</template>

<style scoped>

</style>
