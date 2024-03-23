<script setup>
import { ref } from 'vue';
let open = ref(false);

function openDropdown() {
    open.value = !open.value;
    console.log('open dropdown');
}

</script>
<template>
    <div class="cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-blue-200 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
        <div @click="openDropdown">
            <slot name="trigger"/>
            <div v-if="open" class="p-4 origin-top-right absolute mt-2 w-56 rounded-md shadow-lg bg-white">
                <slot name="list" />
        </div>
            
        </div>

    </div>
</template>