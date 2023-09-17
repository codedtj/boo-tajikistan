<script setup>
import {ref} from "vue";

const number = ref(0);

function increment() {
    number.value++;
}

function decrement() {
    number.value--;
}
</script>

<template>
    <div>
        <div class="flex mt-2">
            <button @click="decrement"
                    class="bg-gray-200 hover:bg-gray-300 rounded-l px-2 py-0">
                -
            </button>
            <button class="bg-gray-200 hover:bg-gray-300 rounded-l px-2 py-0">
                {{ number }}
            </button>
            <button @click="increment"
                    class="bg-gray-200 hover:bg-gray-300 rounded-r px-2 py-0">
                +
            </button>
        </div>
    </div>
</template>

<style scoped>

</style>
