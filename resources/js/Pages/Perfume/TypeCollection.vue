<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import AddToCart from "@/Components/AddToCart.vue";
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <public-layout>
        <div class="flex">
            <div class="container px-4 mx-auto">
                <div class="text-center my-10">
                    <h1 class="font-bold text-3xl uppercase">НОВЫЕ поступления!</h1>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <Link href="/item">
                        <div class="border-2 border-black rounded-lg flex-none">
                            <h1 class="uppercase text-white bg-orange-400 font-bold w-20 relative mt-2 ml-3 text-center text-sm py-1">women</h1>
                            <div>
                                <img class="h-60 mx-auto bg-cover p-5" src="/images/item.png" >
                            </div>
                            <div >
                                <h1 class="text-black uppercase font-bold text-2xl text-center">Some AName</h1>
                                <p class="text-center">by <span class="font-semibold">NIKE</span></p>
                                <h1 class="text-center pt-4 text-2xl">10000<span class="font-semibold">TJS</span></h1>
                            </div>
                            <Link href="/item">
                                <div class="flex">
                                    <add-to-cart class="mt-3 mb-5 mx-auto">В корзину</add-to-cart>
                                </div>
                            </Link>
                        </div>
                    </Link>
                    <Link href="/item">
                        <div class="border-2 border-black rounded-lg flex-none">
                            <h1 class="uppercase text-white bg-orange-400 font-bold w-20 relative mt-2 ml-3 text-center text-sm py-1">women</h1>
                            <div>
                                <img class="h-60 mx-auto bg-cover p-5" src="/images/item.png" >
                            </div>
                            <div >
                                <h1 class="text-black uppercase font-bold text-2xl text-center">Some AName</h1>
                                <p class="text-center">by <span class="font-semibold">NIKE</span></p>
                                <h1 class="text-center pt-4 text-2xl">10000<span class="font-semibold">TJS</span></h1>
                            </div>
                            <Link href="/item">
                                <div class="flex">
                                    <add-to-cart class="mt-3 mb-5 mx-auto">В корзину</add-to-cart>
                                </div>
                            </Link>
                        </div>
                    </Link>
                    <Link href="/item">
                        <div class="border-2 border-black rounded-lg flex-none">
                            <h1 class="uppercase text-white bg-orange-400 font-bold w-20 relative mt-2 ml-3 text-center text-sm py-1">women</h1>
                            <div>
                                <img class="h-60 mx-auto bg-cover p-5" src="/images/item.png" >
                            </div>
                            <div >
                                <h1 class="text-black uppercase font-bold text-2xl text-center">Some AName</h1>
                                <p class="text-center">by <span class="font-semibold">NIKE</span></p>
                                <h1 class="text-center pt-4 text-2xl">10000<span class="font-semibold">TJS</span></h1>
                            </div>
                            <Link href="/item">
                                <div class="flex">
                                    <add-to-cart class="mt-3 mb-5 mx-auto">В корзину</add-to-cart>
                                </div>
                            </Link>
                        </div>
                    </Link>
                    <Link href="/item">
                        <div class="border-2 border-black rounded-lg flex-none">
                            <h1 class="uppercase text-white bg-orange-400 font-bold w-20 relative mt-2 ml-3 text-center text-sm py-1">women</h1>
                            <div>
                                <img class="h-60 mx-auto bg-cover p-5" src="/images/item.png" >
                            </div>
                            <div >
                                <h1 class="text-black uppercase font-bold text-2xl text-center">Some AName</h1>
                                <p class="text-center">by <span class="font-semibold">NIKE</span></p>
                                <h1 class="text-center pt-4 text-2xl">10000<span class="font-semibold">TJS</span></h1>
                            </div>
                            <Link href="/item">
                                <div class="flex">
                                    <add-to-cart class="mt-3 mb-5 mx-auto">В корзину</add-to-cart>
                                </div>
                            </Link>
                        </div>
                    </Link>
                    <Link href="/item">
                        <div class="border-2 border-black rounded-lg flex-none">
                            <h1 class="uppercase text-white bg-orange-400 font-bold w-20 relative mt-2 ml-3 text-center text-sm py-1">women</h1>
                            <div>
                                <img class="h-60 mx-auto bg-cover p-5" src="/images/item.png" >
                            </div>
                            <div >
                                <h1 class="text-black uppercase font-bold text-2xl text-center">Some AName</h1>
                                <p class="text-center">by <span class="font-semibold">NIKE</span></p>
                                <h1 class="text-center pt-4 text-2xl">10000<span class="font-semibold">TJS</span></h1>
                            </div>
                            <Link href="/item">
                                <div class="flex">
                                    <add-to-cart class="mt-3 mb-5 mx-auto">В корзину</add-to-cart>
                                </div>
                            </Link>
                        </div>
                    </Link>
                </div>



            </div>
        </div>
    </public-layout>
</template>

<style scoped>

</style>
