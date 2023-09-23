<template>
    <div>
        <div class="flex mt-2">
            <button @click="decrement" class="bg-gray-200 hover:bg-gray-300 rounded-l px-2 py-0">
                -
            </button>
            <button class="bg-gray-200 hover:bg-gray-300 rounded-l px-2 py-0">
                {{ number }}
            </button>
            <button @click="increment" class="bg-gray-200 hover:bg-gray-300 rounded-r px-2 py-0">
                +
            </button>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, defineProps } from "vue";

const { initialCount } = defineProps(["initialCount"]);

const number = ref(initialCount || 1);

function increment() {
    number.value++;
}

function decrement() {
    if (number.value > 1) {
        number.value--;
    }
}

</script>

<style scoped>
</style>
