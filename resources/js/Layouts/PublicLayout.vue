<template>
    <div class="fixed top-0 w-full z-40">
        <div class="bg-white pb-5">
            <div class="relative bg-white">
                <div class="px-4 sm:px-6">
                    <div class="flex justify-between pt-4">
                        <div class="flex">
                            <div class="flex-none">
                                <Link href="/">
                                    <img class="h-12" src="images/svg/boo-logo.svg" alt="Logo">
                                </Link>
                            </div>
                            <div>
                                <search class="hidden md:flex ml-24 "></search>
                            </div>
                        </div>


                        <div class="flex justify-between ">
                            <div class="my-auto">
                                <nav class="hidden md:flex space-x-10 uppercase">
                                    <Link href="/collection"
                                       class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                                        Парфюмерия
                                    </Link>


                                    <Link href="/about"
                                       class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                                        О НАС
                                    </Link>
                                    <Link href="/contact"
                                       class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                                        контакты
                                    </Link>
                                </nav>
                            </div>
                            <div class="flex justify-end my-auto ml-4">
                                <button type="button"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <img src="icons/union.svg">
                                </button>
                            </div>
                            <div class="flex md:hidden justify-end my-auto ml-4">
                                <button @click="mobileMenuOpen = true" type="button"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <img src="icons/menu-fill.svg">
                                </button>
                            </div>
                        </div>

                    </div>
                </div>


                <!--                Mobile Menu-->

                <div v-if="mobileMenuOpen"
                     class="absolute top-0 inset-x-0 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-lg">
                        <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
                            <div class="pt-5 pb-6 px-5 space-y-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <img class="h-8 w-auto" src="images/svg/boo-logo.svg" alt="Logo">
                                    </div>
                                    <div class="-mr-2">
                                        <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <nav class="grid row-gap-8">
                                        <Link href="/collection"
                                           class="-m-3 p-3 flex items-center space-x-3 rounded-md transition ease-in-out duration-150">
                                            <img src="icons/perfume.svg" alt="Perfume">
                                            <div
                                                class=" hover:text-orange-400 text-base leading-6 font-medium text-gray-900">
                                                Парфюмерия
                                            </div>
                                        </Link>
                                        <Link href="/about"
                                           class="-m-3 p-3 flex items-center space-x-3 rounded-md transition ease-in-out duration-150">
                                            <img src="icons/about.svg" alt="About">
                                            <div
                                                class="text-base hover:text-orange-400 leading-6 font-medium text-gray-900">
                                                О нас
                                            </div>
                                        </Link>
                                        <Link href="/contact"
                                           class="-m-3 p-3 flex items-center space-x-3 rounded-md  transition ease-in-out duration-150">
                                            <img src="icons/contact.svg" alt="Contact">
                                            <div
                                                class="text-base hover:text-orange-400 leading-6 font-medium text-gray-900">
                                                Контакты
                                            </div>
                                        </Link>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-black">
            <h1 class="text-center text-white font-bold py-1">BOO TAJIKISTAN</h1>
        </div>
    </div>

    <div class="mt-32">
        <slot></slot>
    </div>
    <footer class="relative bg-blueGray-200 pt-8 pb-6">
        <div class="">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 text-white font-bold text-xs pl-14 py-1" style="background-color: #F37021">
                <div class="flex gap-3">
                    <img class="h-7" src="/images/svg/delivery.svg" />
                    <h1 class="my-auto">Бесплатная доставка</h1>
                </div>
                <div class="flex gap-3">
                    <img class="h-7" src="/images/svg/online.svg" />
                    <h1 class="my-auto">Онлайн самообслуживание</h1>
                </div>
                <div class="flex gap-3">
                    <img class="h-7" src="/images/svg/tick.svg" />
                    <h1 class="my-auto">100% гарантия подлинности</h1>
                </div>
                <div class="flex gap-3">
                    <img class="h-7" src="/images/svg/secure.svg" />
                    <h1 class="my-auto">Безопасная оплата</h1>
                </div>
                <div class="flex gap-3">
                    <img class="h-7" src="/images/svg/100.svg" />
                    <h1 class="my-auto">100% подлинные продукты</h1>
                </div>

            </div>
        </div>
        <div class="container mx-auto px-4 mt-10">
            <div class="flex flex-wrap text-left lg:text-left">

                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto ">
                            <span
                                class="block uppercase text-blueGray-500 text-sm font-bold mb-2">ПОКУПКА ПО ОТДЕЛАМ</span>
                            <ul class="list-unstyled text-gray-500">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                       href="#">Парфюмерия</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                       href="#">Женская Парфюмерия</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                       href="#">Мужская Парфюмерия</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                       href="#">Коллекция Унисекс</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span
                                class="block uppercase text-blueGray-500 text-sm font-bold mb-2">СЛУЖБА ПОДДЕРЖКИ</span>
                            <ul class="list-unstyled text-gray-500">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                       href="#">Подарочные сертификаты</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                       href="#">Шопинг</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                       href="#">О нас</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                       href="#">Связаться с нами</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-blueGray-700">Будем на связи!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Найдите нас на любой из этих платформ
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-black text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <img class="mx-auto" src="/images/svg/ri_instagram-fill.svg" />
                        </button>
                        <button
                            class="bg-black text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <img class="mx-auto" src="/images/svg/ri_facebook-fill.svg" />
                        </button>
                        <button
                            class="bg-black text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <img class="mx-auto" src="/images/svg/mdi_youtube.svg" />
                        </button>


                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="flex flex-wrap items-center md:justify-between justify-center bg-black">
        <div class=" mx-auto text-center mt-4 mb-4">
            <img class="h-14" src="images/svg/pow-coded.svg"/>
            <h1 class="text-white text-xs mt-3">All Rights Reserved.</h1>
        </div>
    </div>
</template>

<script setup>
import {computed, onMounted} from "vue";
import {Link} from "@inertiajs/vue3";
import {ref} from 'vue';
import Search from "@/Components/Search.vue";
import Footer from "@/Components/Footer.vue";

onMounted(() => {

})

const openDrop = ref(false);
const mobileMenuOpen = ref(false);


</script>

<style scoped>

</style>
