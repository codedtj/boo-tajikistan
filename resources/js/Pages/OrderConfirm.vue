<script setup>

import PublicLayout from "@/Layouts/PublicLayout.vue";
import SecondButton from "@/Components/SecondButton.vue";
import Counter from "@/Components/Counter.vue";
import DeleteIcon from "@/Components/Icons/DeleteIcon.vue";
import AddToCart from "@/Components/AddToCart.vue";
import {Link} from "@inertiajs/vue3";
</script>

<template>
<public-layout>
    <div class="flex">
        <div class="container mx-auto px-4">
            <div class="text-center my-10">
                <h1 class="font-bold text-3xl uppercase">Оформление заказа</h1>
                <p class="mt-3">Наша вкусная лимитированная коллекция</p>
            </div>


            <div>
                <div class="bg-white shadow-2xl border mb-2 py-3 flex rounded-lg">
                    <div class="my-auto flex-none   ml-3 ">
                        <img class="object-cover rounded-md border h-16 w-16" src="/images/item-2.jpg"/>
                    </div>
                    <div class="pl-5  flex-none">
                        <div class="my-auto">
                            <h1 class="text-md font-bold">Sinsa Dong Gangnam-Gu Zara</h1>
                            <h1 class="uppercase text-white bg-orange-400 font-bold w-14 mt-1 relative text-center text-[10px] py-1">women</h1>
                        </div>
                    </div>

                    <div class="md:flex hidden justify-between w-full px-24 ml-10">
                        <div class="my-auto">
                            <h1 class="font-bold mr-3 text-xl">
                                2354<span>tjs</span>
                            </h1>
                        </div>
                        <div class="my-auto">
                            <button class="mr-3">
                                <DeleteIcon class="text-[30px] text-gray-700 hover:text-red-600"></DeleteIcon>
                            </button>
                        </div>
                    </div>


                </div>
                <div class="bg-white shadow-2xl border mb-2 py-3 flex rounded-lg">
                    <div class="my-auto flex-none   ml-3 ">
                        <img class="object-cover rounded-md border h-16 w-16" src="/images/item-2.jpg"/>
                    </div>
                    <div class="pl-5  flex-none">
                        <div class="my-auto">
                            <h1 class="text-md font-bold">Sinsa Dong Gangnam-Gu Zara</h1>
                            <h1 class="uppercase text-white bg-orange-400 font-bold w-14 mt-1 relative text-center text-[10px] py-1">women</h1>
                        </div>
                    </div>

                    <div class="md:flex hidden justify-between w-full px-24 ml-10">
                        <div class="my-auto">
                            <h1 class="font-bold mr-3 text-xl">
                                2354<span>tjs</span>
                            </h1>
                        </div>
                        <div class="my-auto">
                            <button class="mr-3">
                                <DeleteIcon class="text-[30px] text-gray-700 hover:text-red-600"></DeleteIcon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center my-10">
                <h1 class="font-bold text-3xl uppercase">Контактная информация</h1>
            </div>
            <div class="">
                <div class="flex mx-auto flex-wrap mb-2">
                    <div class="mx-auto flex">
                        <div class=" px-3 mb-6 md:mb-0">
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Имя, Фамилия" required>
                        </div>
                        <div class=" px-3 mb-6 md:mb-0">
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Телефон" required>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center my-10">
                <h1 class="font-bold text-3xl uppercase">Способ оплаты</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-center pl-4 border border-gray-200 rounded-lg w-full cursor-no-drop">
                    <input disabled  id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="cursor-no-drop  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2">
                    <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-md font-medium text-black">Банковской картой онлайн</label>
                    <img class="mr-4 " src="/images/svg/bank.svg" />
                </div>
                <div class="flex items-center pl-4 border border-gray-200 rounded-lg w-full">
                    <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2">
                    <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-md font-medium text-black">Наличными при самовывозе</label>
                    <img class=" mr-4" src="/images/svg/money.svg" />
                </div>
            </div>

            <div class="text-center my-10">
                <h1 class="font-bold text-3xl uppercase">Подтверждение заказа</h1>
                <p class="mt-3">Наша вкусная лимитированная коллекция</p>
            </div>

            <div class="bg-white shadow-2xl border rounded-lg py-10 px-5">
                <div class="flex justify-between mb-4">
                    <div class="flex">
                        <div class="my-auto flex-none ml-3 ">
                            <img class="object-cover rounded-md border h-16 w-16" src="/images/item-2.jpg"/>
                        </div>
                        <div class="pl-5 flex">
                            <div class="my-auto">
                                <h1 class="text-md font-bold">Sinsa Dong Gangnam-Gu Zara</h1>
                                <p class="text-sm hidden md:flex">Zara Seoul 532-8 Sinsa Dong Gangnam-Gu was launched in 2015. Aromatic Spicy fragrance for men. </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <h1 class="my-auto font-medium text-xl">2663<span>tjs</span></h1>
                    </div>
                </div>
                <div class="flex justify-between mb-4">
                    <div class="flex">
                        <div class="my-auto flex-none ml-3 ">
                            <img class="object-cover rounded-md border h-16 w-16" src="/images/item-2.jpg"/>
                        </div>
                        <div class="pl-5 flex">
                            <div class="my-auto">
                                <h1 class="text-md font-bold">Sinsa Dong Gangnam-Gu Zara</h1>
                                <p class="text-sm hidden md:flex">Zara Seoul 532-8 Sinsa Dong Gangnam-Gu was launched in 2015. Aromatic Spicy fragrance for men. </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <h1 class="my-auto font-medium text-xl">2663<span>tjs</span></h1>
                    </div>
                </div>
                <div class="flex justify-end pt-16">
                    <span class="my-auto font-bold text-xl">ИТОГО:</span>
                    <h1 class="font-bold my-auto text-2xl ml-3">2324<span>tjs</span></h1>
                </div>

                <Link href="/ordered">
                    <div class="flex">
                        <add-to-cart class="mt-3 mb-5 mx-auto ">Подтвердить заказ</add-to-cart>
                    </div>
                </Link>
            </div>
        </div>
    </div>
</public-layout>
</template>

<style scoped>

</style>
