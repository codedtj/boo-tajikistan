<script setup>

import PublicLayout from "@/Layouts/PublicLayout.vue";
import {Link} from "@inertiajs/vue3";
</script>

<template>
<public-layout>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <Link href="/type-collection">
                <div class=" bg-no-repeat bg-contain bg-right-bottom bg-[url('images/women-collection.png')]" style="background-color: #c2c2c2">
                    <div class="flex">
                        <div class="mx-auto my-auto py-36 text-white hover:text-orange-400 ">
                            <h1 class="z-40  uppercase text-4xl w-60 font-bold text-center ">ЖЕНСКАЯ ПАРФЮМЕРИЯ</h1>
                            <div class="flex">
                                <button class="underline  font-semibold text-2xl mx-auto text-center">Купить сейчас</button>
                            </div>
                        </div>
                    </div>
                </div>
            </Link>
            <Link href="#">
                <div class=" bg-no-repeat bg-contain bg-right-bottom bg-[url('images/men-collection.png')]" style="background-color: #c2c2c2">
                    <div class="flex">
                        <div class="mx-auto my-auto py-36 text-white hover:text-orange-400 ">
                            <h1 class="z-40  uppercase text-4xl w-60 font-bold text-center ">МУЖСКАЯ ПАРФЮМЕРИЯ</h1>
                            <div class="flex">
                                <button class="underline  font-semibold text-2xl mx-auto text-center">Купить сейчас</button>
                            </div>
                        </div>
                    </div>
                </div>
            </Link>
            <Link href="#">
                <div class=" bg-no-repeat bg-contain bg-right-bottom bg-[url('images/unisex.png')]" style="background-color: #c2c2c2">
                    <div class="flex">
                        <div class="mx-auto my-auto py-36 text-white hover:text-orange-400 ">
                            <h1 class="z-40  uppercase text-4xl w-60 font-bold text-center ">КОЛЛЕКЦИЯ унисекс</h1>
                            <div class="flex">
                                <button class="underline  font-semibold text-2xl mx-auto text-center">Купить сейчас</button>
                            </div>
                        </div>
                    </div>
                </div>
            </Link>
        </div>
    </div>
</public-layout>
</template>

<style scoped>

</style>
