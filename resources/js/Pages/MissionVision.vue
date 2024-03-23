<script setup>
    import { onMounted } from 'vue';
    import { Link } from '@inertiajs/vue3';
    import AppLayout from '@/Layouts/AppLayout.vue';

</script>
<template>
    <AppLayout title="Our Motivation">
        <div class="flex mb-4">
            <img src="/images/HLogo.png" style="height:40px">
            <span class="ml-4">(“Tay-lōw-ss”) — the ultimate goal, aim, fulfillment; reaching our full potential; the ultimate reason for being.</span>
        </div>
        <div class="space-y-4 ml-4">
            <div>At Telos Innovations Inc., our telos is ‘people’. We are a team that empowers people — families, customers, vendors, communities — to realize their full potential…and beyond; achieving more than they ever thought possible. We accomplish this through our Five Core Values.</div>
            <div>People figure prominently in each of our Core Values. Each of our Core Values is ultimately about people. Our Core Values transform everything we do, inform every decision we make, dictate every action we undertake.</div> 
            <div>We take our Core Values and culture seriously. Our culture and values are more important than anything else we do. We protect and guard it. We invest in it. So much so, that one of our key executive positions is “Chief Culture and Communications Officer” (CCCO).</div>
            <div>Welcome to Telos Innovations. Let us “help you go further”.</div>
        </div>
        <div >
            <table class="table-auto border border-black mt-8">
                <tr>
                    <td class="p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">Vision</td>
                    <td class="ml-4 bg-white p-8 text-blue-900 border border-black">To empower companies and individuals to exceed limits and achieve beyond expectations</td>
                </tr>
                <tr>
                    <td class="p-8 text-2xl font-bold bg-sky-800 text-white uppercase  border border-black">Mission</td>
                    <td class="p-8 ml-4 bg-blue-200 text-blue-900  border border-black">To create and deliver innovative products and services that enhance communities, protect people, extend asset life, and reduce the total cost of ownership.</td>
                </tr>
            </table>
        </div>
        <div class="mt-4 text-2xl text-white italic text-center">
            <Link href="/CoreValues">
                <span>Our Core Values >> </span>
            </Link>
        </div>
    </AppLayout>
</template>