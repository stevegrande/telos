<script setup>
    import { onMounted,defineProps } from 'vue';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/vue3';

    let props = defineProps({
        currentHeading: String
    })


</script>
<template>
    <AppLayout title="Superior Products and Services">
        <div >
            <table class="table-auto border border-black mt-8 space-y-8">
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-xl uppercase">INDUSTRIES WE SERVE</div>
                    </td>
                    <td class="ml-4 bg-white p-8 text-blue-900  border border-black">
                        <ul class="list-disc">
                            <li>Resource Sector - LNG, Oil & Gas — Drilling & Exploration, Oil & Gas Facilities, Pipeline, Mining</li>
                            <li>Civil Construction</li>
                            <li>Reclamation</li>
                        </ul>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-900 border text-white border-black">
                        <div class="text-xl uppercase">PRODUCT LINES</div>
                    </td>
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900  border border-black">
                        <ul class="list-disc">
                            <li>Oil & Gas Well Drilling Crossovers</li>
                            <li>Geosynthetics</li>
                            <li>Corrugated Steel Pipe</li>
                            <li>Erosion Control and Protection</li>
                            <li>Mining Consumables</li>
                            <li>Pipeline Pipe Protection</li>
                            <li>Technical Clothing (aerogel & graphene based)</li>
                        </ul>
                    
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-xl uppercase">PRODUCTS WE PROCESS & MANUFACTURE</div>
                    </td>
                    <td class="ml-4 bg-white p-8 text-blue-900  border border-black">
                        <ul class="list-disc">
                            <li>Aerogel: Processing Pads and Patterns</li>
                            <li>Aerogel Equipment Covers and Blankets</li>
                            <li>X-Rock TM Pipeline Protection — Rolls and Pads</li>
                            <li>Oil Well Drilling Universal Crossovers</li>
                            <li>Industrial Protective Wear & Consumer Technical Clothing</li>
                        </ul>
                    
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-900 border text-white border-black">
                        <div class="text-xl uppercase">SERVICES WE PROVIDE</div>
                    </td>
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900  border border-black">
                        <ul class="list-disc">
                            <li>Rotary / Water Jet Cutting Services</li>
                            <li>Supply Chain Management</li>
                        </ul>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-xl uppercase">BRANDS WE REPRESENT</div>
                    </td>
                    <td class="ml-4 bg-white p-8 text-blue-900  border border-black">
                        <ul class="list-disc">
                            <li>Alkegen Geosynthetics</li>
                        </ul>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-900 border text-white border-black">
                        <div >PROPRIETARY BRANDS by</div>
                        <div class="flex text-xl items-center justify-center"><img src="/images/HLogo.png"  style="height:40px;" /></div>
                    </td>
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900  border border-black">
                        <ul class="list-disc">
                            <li>Telos X-Rock TMXtreme Pipe Protection</li>
                            <li>Telos XtremeTM</li>
                            <li>Telos Arctic</li>
                            <li>Telos Armour</li>
                            <li>Telos Gear</li>
                            <li>Telos X-Sub TM Universal Cross-Over</li>
                        </ul>
                        
                    </td>
                </tr>


            </table>
        </div>
        <!-- <div class="mt-4 text-2xl text-white italic text-center">
            <Link href="/Products">
                <span>Sector Overview >> </span>
            </Link>
        </div> -->

</AppLayout>
</template>