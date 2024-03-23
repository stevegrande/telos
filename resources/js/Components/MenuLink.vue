<script setup>
import { Head, Link } from '@inertiajs/vue3';
const props = defineProps(['to', 'label']);

</script>
<template>
    <li class = "ml-4 italic cursor-pointer hover:text-blue-900">
        <Link :href="props.to">
            <span>{{props.label}}</span>
        </Link>
    </li>
</template>