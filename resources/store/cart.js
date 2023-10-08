// cart.js
import { defineStore } from 'pinia';

export const useCartStore = defineStore('cart', {
    state: () => ({
        items: [],
    }),
    actions: {
        addItem(item) {

            const existingItem = this.items.find((cartItem) => cartItem.id === item.id);

            if (existingItem) {
                existingItem.count += 1;
            } else {
                this.items.push({ ...item, count: 1 });
            }
        },
        removeItem(index) {
            this.items.splice(index, 1);
        },
    },
    getters: {
        cartTotal(state) {
            return state.items.reduce((total, item) => total + item.base_price * item.count, 0);
        },
    },
});
