<script setup>

import PublicLayout from "@/Layouts/PublicLayout.vue";
import SecondButton from "@/Components/SecondButton.vue";
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <public-layout>
        <div class="flex">
            <div class="container px-4 mx-auto">
                <div class="text-center my-10">
                    <h1 class="font-bold text-3xl uppercase">Подтверждение заказа</h1>
                </div>
                <div class="bg-white shadow-2xl border mb-2 py-3 flex-col rounded-lg">
                    <img class="h-52 mx-auto" src="/images/svg/tickk.svg"/>

                    <div class="mt-6">
                        <p class="text-center">Поздравляем с успешной покупкой!</p>
                        <p class="md:px-24 px-10 text-center">Мы рады, что вы выбрали наш магазин для совершения покупки. Ваш заказ был успешно получен, и
                            в ближайшее время наш оператор свяжется с вами для подтверждения деталей заказа. Мы ценим
                            ваш выбор и готовы ответить на все ваши вопросы.
                            Благодарим за доверие и ждем с нетерпением начать обработку вашего заказа. Если у вас
                            возникнут какие-либо дополнительные вопросы, не стесняйтесь связаться с нашей службой
                            поддержки.
                            С наилучшими пожеланиями, Команда BOO</p>
                    </div>
                    <Link href="/">
                        <second-button class="mt-8  mx-auto">На главную</second-button>
                    </Link>
                </div>
            </div>
        </div>

    </public-layout>
</template>

<style scoped>

</style>
