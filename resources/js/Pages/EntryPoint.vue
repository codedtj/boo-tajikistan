<script setup>
import {Link} from "@inertiajs/vue3";
 import PublicLayout from "@/Layouts/PublicLayout.vue";
 import PrimeButton from "@/Components/PrimeButton.vue";
 import MainCarousel from "@/Components/MainCarousel.vue";
 import SecondButton from "@/Components/SecondButton.vue";
 import CardCarousel from "@/Components/СardСarousel.vue"
</script>

<template>
<public-layout>
    <div class="container mx-auto px-4">
        <main-carousel class="mt-6"></main-carousel>
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


        <div class="text-center my-10">
            <h1 class="font-bold text-3xl uppercase">Наша КОЛЛЕКЦИЯ</h1>
            <p class="mt-3">Наша вкусная лимитированная коллекция</p>
            <second-button class="mt-5">купить все</second-button>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <Link href="/women-collection">
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
            <Link href="men-collection">
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
            <Link href="unisex-collection">
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



        <div class="text-center my-10">
            <h1 class="font-bold text-3xl uppercase">Рекомендуется для вас</h1>
        </div>


        <card-carousel></card-carousel>

        <div class="flex">
            <div class="mx-auto">
                <second-button class="mt-3 mb-5 mx-auto">SHOP HERE</second-button>
            </div>
        </div>


        <div class="text-center my-10">
            <h1 class="font-bold text-3xl uppercase">НОВЫЕ поступления!</h1>
        </div>

        <card-carousel></card-carousel>


        <div class="mt-5 grid grid-cols-1 md:grid-cols-2" style="background: #FFEDE2">
            <div class="mx-auto py-10 pl-12 md:pl-0">
                <h1 class="uppercase font-bold text-4xl">Подарочные сертификаты</h1>
                <second-button class="mt-5">получить </second-button>
            </div>
            <div class="bg-no-repeat  bg-[url('images/temp.png')]">
                <div class="flex py-10">
                </div>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 mt-10 gap-6">
            <div style="background: #F5F6F6">
                <div class="bg-no-repeat bg-contain bg-right-bottom  bg-[url('images/luxury-pum.png')] h-64">
                    <div class="mx-auto py-10 my-auto">
                        <h1 class="uppercase font-bold text-2xl md:text-4xl w-[300px] ml-10">Узнайте больше о нас</h1>
                        <div class="ml-10 mt-7">
                            <button style="background-color: #BE5B75" class=" text-white font-bold py-3 px-24">О Нас</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background: #F5F6F6">
                <div class="bg-no-repeat bg-contain bg-right-bottom bg-[url('images/gift.png')] h-64">
                    <div class="mx-auto py-10 my-auto">
                        <h1 class="uppercase font-bold text-2xl md:text-4xl md:w-[400px] ml-10">Выиграйте шопинг на 150tjs</h1>
                        <div class="ml-10 mt-7">
                            <button style="background-color: #F37021" class=" text-white font-bold py-3 px-24">О Нас</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="text-center my-10">
            <h1 class="font-bold text-3xl uppercase">best sellers</h1>
        </div>


        <card-carousel></card-carousel>


    </div>
</public-layout>
</template>

<style scoped>

</style>
