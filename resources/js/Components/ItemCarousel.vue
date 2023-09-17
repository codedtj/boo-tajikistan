<template>
        <Carousel :value="cars" :numVisible="4" :numScroll="3" :responsiveOptions="responsiveOptions" :autoplayInterval="3000">
            <template #item="slotProps">

                <div class="flex gap-6  overflow-x-auto">
                    <Link href="/item">
                        <div class="border-2 border-black rounded-lg flex-none">
                            <h1 class="uppercase text-white bg-orange-400 font-bold w-20 relative mt-2 ml-3 text-center text-sm py-1">{{ slotProps.data.type }}</h1>
                            <div>
                                <img class="h-60 mx-auto bg-cover p-5" src="/images/item.png" :alt="slotProps.data.brand">
                            </div>
                            <div >
                                <h1 class="text-black uppercase font-bold text-2xl text-center">{{ slotProps.data.name }}</h1>
                                <p class="text-center">by <span class="font-semibold">NIKE</span></p>
                                <h1 class="text-center pt-4 text-2xl">{{ slotProps.data.price }} <span class="font-semibold">TJS</span></h1>
                            </div>
                            <Link href="/item">
                                <div class="flex">
                                    <add-to-cart class="mt-3 mb-5 mx-auto">В корзину</add-to-cart>
                                </div>
                            </Link>
                        </div>
                    </Link>
                </div>

            </template>
        </Carousel>
</template>

<script setup>
import { ref, onMounted } from "vue";
import Carousel from 'primevue/carousel';
import "primevue/resources/themes/lara-light-indigo/theme.css";
import SecondButton from "@/Components/SecondButton.vue";
import {Link} from "@inertiajs/vue3";
import AddToCart from "@/Components/AddToCart.vue";

const responsiveOptions = ref([
    {
        breakpoint: '1199px',
        numVisible: 3,
        numScroll: 3
    },
    {
        breakpoint: '991px',
        numVisible: 2,
        numScroll: 2
    },
    {
        breakpoint: '767px',
        numVisible: 1,
        numScroll: 1
    }
]);

const cars = ref([
    {
        name: 'Toyota',
        price: 2020,
        type: 'men',
        brand: 'NIKE',

    },
    {
        name: 'Toyota',
        price: 2020,
        type: 'women',
        brand: 'NIKE',

    },
    {
        name: 'Toyota',
        price: 2020,
        type: 'women',
        brand: 'NIKE',

    },
    {
        name: 'Toyota',
        price: 2020,
        type: 'women',
        brand: 'NIKE',

    },
    {
        name: 'Toyota',
        price: 2020,
        type: 'women',
        brand: 'NIKE',

    },
    {
        name: 'Toyota',
        price: 2020,
        type: 'women',
        brand: 'NIKE',

    },
    {
        name: 'Toyota',
        price: 2020,
        type: 'women',
        brand: 'NIKE',

    },

    // Add more car objects as needed
]);
</script>
