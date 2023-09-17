<script setup>

</script>

<template>
    <button class="button ">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-telegram" viewBox="0 0 23 23">
                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2zM1 3c0 .55.45 1 1 1h1l3.6 7.59l-1.35 2.44C4.52 15.37 5.48 17 7 17h11c.55 0 1-.45 1-1s-.45-1-1-1H7l1.1-2h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49A.996.996 0 0 0 20.01 4H5.21l-.67-1.43a.993.993 0 0 0-.9-.57H2c-.55 0-1 .45-1 1zm16 15c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2z"></path>
            </svg>
        </div>
        <p class="text-sm font-bold"><slot></slot></p>
    </button>
</template>

<style scoped>
.button {
    font-family: inherit;
    background: #D9D9D9;
    color: white;
    padding: 0.35em 0;
    font-size: 17px;
    border: none;
    border-radius: 0.3em;
    letter-spacing: 0.08em;
    position: relative;
    display: flex;
    align-content: center;
    align-items: center;
    overflow: hidden;
    height: 2.5em;
    padding-left: 2.8em;
    padding-right: 0.92em;
}

.button .icon {
    background: #fff;
    height: 2em;
    width: 2em;
    border-radius: 2em;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    left: 0.4em;
    transition: all 0.5s;
}

.icon svg {
    margin-left: 0.1em;
    transition: all 0.5s;
    color: #D9D9D9;
    width: 1.2rem;
    height: 1.2rem;
}

.button:hover .icon svg {
    transform: rotate(360deg);
}

.button:hover .icon {
    width: calc(100% - 0.85rem);
    border-radius: 0.5em;
}
</style>
