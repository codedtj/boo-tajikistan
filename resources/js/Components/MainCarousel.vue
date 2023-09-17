<script setup>
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

import { ref } from 'vue';

const slides = ref([
    {
        image: '/images/carousel.png'
    },
    {
        image: '/images/carousel2.png'
    },
    // Other slides.
]);
</script>

<template>
    <vueper-slides fade :touchable="false">
        <vueper-slide
            v-for="(slide, i) in slides"
            :key="i"
            :image="slide.image"
        />
    </vueper-slides>
</template>

<style scoped>

</style>
