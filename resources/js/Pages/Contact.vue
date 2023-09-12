<script setup>

import PublicLayout from "@/Layouts/PublicLayout.vue";
import ContactButton from "@/Components/ContactButton.vue";
</script>

<template>
<public-layout>
    <div class="container mx-auto px-4">


        <div class="bg-white shadow-2xl py-7 rounded-lg mt-14">
            <div class="flex">
                <contact-button class="mx-auto py-16 "></contact-button>
            </div>
            <div class="flex mt-10">
                <div class="mx-auto px-4">
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


                        <div class="mt-10">
                            <h4 class="text-3xl fonat-semibold text-blueGray-700">Контакты</h4>
                        </div>
                    </div>
                    <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold ">
                            Acme Inc, Street, State,
                            Postal Code
                        </div>
                    </div>

                    <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold ">
                            +992 939939393
                        </div>
                    </div>

                    <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold ">
                            info@boo-tajikistan.org
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</public-layout>
</template>

<style scoped>

</style>
