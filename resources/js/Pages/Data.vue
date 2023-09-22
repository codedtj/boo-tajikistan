<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const stockBalances = ref([]);

const fetchData = async () => {
    try {
        const response = await axios.get('/api/point-api');
        stockBalances.value = response.data.data; // Assuming the stock balances are in the 'data' property
    } catch (error) {
        console.error('Error fetching external data:', error);
    }
};

onMounted(() => {
    fetchData();
});
</script>

<template>
    <div>
        <h1>Stock Balances</h1>
        <ul>
            <li v-for="balance in stockBalances" :key="balance.id">
                <h2>{{ balance.item.title }}</h2>
                <p>Code: {{ balance.item.code }}</p>
                <p>Unit: {{ balance.item.unit }}</p>
                <p>Quantity: {{ balance.quantity }}</p>
                <p>Base Price: {{ balance.base_price }}</p>
            </li>
        </ul>
    </div>
</template>

<style scoped>

</style>
