<template>
    <div class="fixed top-0 w-full z-40">
        <div class="bg-white pb-5">
            <div class="relative bg-white">
                <div class="px-4 sm:px-6">
                    <div class="flex justify-between pt-4">
                        <div class="flex">
                            <div class="flex-none">
                                <img class="h-12" src="images/svg/boo-logo.svg" alt="Logo">
                            </div>
                            <div>
                                <search class="hidden md:flex ml-24 "></search>
                            </div>
                        </div>


                        <div class="flex justify-between ">
                            <div class="my-auto">
                                <nav class="hidden md:flex space-x-10 uppercase">
                                    <a href="#"
                                       class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                                        Парфюмерия
                                    </a>


                                    <a href="#"
                                       class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                                        О НАС
                                    </a>
                                    <a href="#"
                                       class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                                        контакты
                                    </a>
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
                                        <a href="#"
                                           class="-m-3 p-3 flex items-center space-x-3 rounded-md transition ease-in-out duration-150">
                                            <img src="icons/perfume.svg" alt="Perfume">
                                            <div class=" hover:text-orange-400 text-base leading-6 font-medium text-gray-900">
                                                Парфюмерия
                                            </div>
                                        </a>
                                        <a href="#"
                                           class="-m-3 p-3 flex items-center space-x-3 rounded-md transition ease-in-out duration-150">
                                            <img src="icons/about.svg" alt="About">
                                            <div class="text-base hover:text-orange-400 leading-6 font-medium text-gray-900">
                                                О нас
                                            </div>
                                        </a>
                                        <a href="#"
                                           class="-m-3 p-3 flex items-center space-x-3 rounded-md  transition ease-in-out duration-150">
                                            <img src="icons/contact.svg" alt="Contact">
                                            <div class="text-base hover:text-orange-400 leading-6 font-medium text-gray-900">
                                                Контакты
                                            </div>
                                        </a>
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
</template>

<script setup>
import {computed, onMounted} from "vue";
import {Link} from "@inertiajs/vue3";
import {ref} from 'vue';
import Search from "@/Components/Search.vue";

onMounted(() => {

})

const openDrop = ref(false);
const mobileMenuOpen = ref(false);


</script>

<style scoped>

</style>
