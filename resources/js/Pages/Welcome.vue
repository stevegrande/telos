<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import MenuLink from '@/Components/MenuLink.vue';

</script>

<template>
    <div class="container mx-auto p-20 my-auto"> <!-- Outside container -->
            <div class="rows-2"> <!-- main plus line on bottom -->
                <div class="flex flex-row space-x-4" > <!-- main -->
                    <div class="flex flex-row basis-3/4 mb-4"> <!-- logo pics and motto -->
                        <div class=""> <!-- logo and pics rows -->
                            <div class="grid grid-cols-3 space-x-4"> <!-- logo and pics -->
                                <div class="my-auto col-span-1"> <!-- logo -->
                                    <img src="/images/VLogo.png" style="width: 75%;" class="p-8 " alt="Logo" />
                                </div>
                                <div class="column col-span-2 "> <!-- pics -->
                                    <div class="space-y-4">
                                        <div><img src="/images/img1.png"></div>
                                        <div class="flex">
                                            <img src="/images/img2.png" class="w-1/2 h-1/2">
                                            <img src="/images/img3.png" class="w-1/2 h-1/2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-white" style="font-size: 4em;">“Helping You Go Further…”</div> <!-- motto -->
                        </div>
                    </div>
                    <div class="p-8 basis-1/4 text-white " style="background-color: rgb(76,148,216);"> <!-- menu -->
                        <div class="text-3xl font-bold">MENU</div>
                        <div class="text-2xl">About Us</div>
                            <ul>
                                <MenuLink to="MissionVision" label="Mission & Vision" />
                                <MenuLink to="CoreValues" label="Core Values" />
                                <MenuLink to="KeyBehaviours" label="Key Behaviours" />
                                <MenuLink to="OurTeam" label="Our Team" />
                                <MenuLink to="SectorOverview" label="Sector Overview" />
                            </ul>
                        <div class="text-2xl">Products</div>
                            <ul>
                                <MenuLink to="/products" label="Aerogels"/>
                                <MenuLink to="/products" label="Geosynthetics"/>
                                <MenuLink to="/products" label="Pipeline Protection"/>
                                <MenuLink to="/products" label="Mining"/>
                                <MenuLink to="/products" label="Drilling Subs"/>
                                <MenuLink to="/products" label="Supply Chain Solutions"/>
                            </ul>
                        <div class="text-2xl hover:text-blue-900 cursor-pointer">
                            <span >Indigenous Relations</span>
                        </div>
                        <div class="text-2xl">Contact Us</div>                
                    </div>
                </div>
                <div class="h-2" style="background-color: rgb(76,148,216);" /> <!-- line on bottom -->

            </div>

    </div>
</template>
