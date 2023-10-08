<template>
    <public-layout>
        <div class="container px-4">
            <div class="flex">
                <div class="mx-auto bg-white rounded-xl overflow-hidden md:w-8/12">
                    <div class="md:flex">
                        <div class="md:shrink-0">
                            <img class="object-cover h-[400px] md:h-[500px] md:w-[400px]" src="/images/item-2.jpg"
                                 alt="Perfume">
                        </div>
                        <div class="p-8">
                            <h1 class="uppercase font-bold text-xl" style="color:#F37021">MEN PERFUME</h1>
                            <h1 class="block mt-1 text-3xl leading-tight text-black font-bold">{{item.title}}</h1>
                            <p class="mt-2 text-slate-500">{{item.description}}</p>

                            <div class="flex">
                                <h1 class="mt-6 text-4xl font-bold">{{ item.base_price }} TJS</h1>
                            </div>
                            <div class="mt-10">
                                <add-to-cart>В корзину</add-to-cart>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import AddToCart from "@/Components/AddToCart.vue";
import { defineProps } from "vue";

const { item } = defineProps(["item"]);
</script>
