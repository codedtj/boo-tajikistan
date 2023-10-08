<template>
        <Carousel :value="items" :numVisible="4" :numScroll="3" :responsiveOptions="responsiveOptions" :autoplayInterval="4000">
            <template #item="slotProps">

                <div class="flex gap-6  overflow-x-auto">
                        <div class="border-2 border-black rounded-lg flex-none">
                            <Link :href="router('items.show', slotProps.data.id)">
                                <h1 class="uppercase text-white bg-orange-400 font-bold w-20 relative mt-2 ml-3 text-center text-sm py-1">{{ slotProps.data.unit }}</h1>
                                <div>
                                    <img class="h-60 mx-auto object-cover w-64 p-5" :src="`${slotProps.data.image}`" :alt="slotProps.data.title">
                                </div>
                                <div >
                                    <h1 class="text-black uppercase font-bold text-2xl text-center">{{ slotProps.data.title }}</h1>
                                    <h1 class="text-center pt-4 text-2xl">{{ slotProps.data.base_price }} <span class="font-semibold">TJS</span></h1>
                                </div>
                            </Link>
                                <div class="flex">
                                    <add-to-cart @click="addItemToCart(slotProps.data)" class="mt-3 mb-5 mx-auto">В корзину</add-to-cart>
                                </div>
                        </div>
                </div>

            </template>
        </Carousel>
</template>

<script setup>
import { ref, onMounted, computed } from "vue";
import Carousel from 'primevue/carousel';
import "primevue/resources/themes/lara-light-indigo/theme.css";
import {Link, router} from "@inertiajs/vue3";
import AddToCart from "@/Components/AddToCart.vue";
import axios from "axios";
import {useCartStore} from "../../store/cart.js";


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

const items = ref([]);
const fetchData = async () => {
    try {
        const response = await axios.get('/api/point-api');
        items.value = response.data.data.map(balance => ({
            id: balance.item.id,
            title: balance.item.title,
            image: balance.item.image,
            base_price: balance.base_price,
        }));
    } catch (error) {
        console.error('Error fetching external data:', error);
    }
};

onMounted(() => {
    fetchData();
});

const addItemToCart = (item) => {
    const cartStore = useCartStore();
    cartStore.addItem(item);
};

const cartStore = useCartStore();
const cartItemsCount = computed(() => cartStore.items.length);
</script>
