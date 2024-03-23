<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';

let props = defineProps({
    linkadd: String,
});
</script>
<template>
    <!-- <div class="cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-blue-200 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out"> -->
    <div class="text-blue-900 hover:text-blue-500">
        <Link :href="props.linkadd"><slot /></Link>
    </div>
</template>