<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import MenuBar from '@/Components/MenuBar.vue';
import MyDropdown from '@/Components/MyDropdown.vue';
import MyDropdownLink from '@/Components/MyDropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);


</script>

<template>
    <div>
        <Head :title="title" />
        <div class="min-h-screen">
            <nav class=" border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <NavLink :href="'/Welcome'" :active="route().current('Welcome')">
                                    <ApplicationMark class="block h-9 w-auto" />
                                </NavLink>
                                </div>

                            <!-- Navigation Links -->

                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <MyDropdown>
                                    <template #trigger>
                                        About Us
                                    </template>
                                    <template #list>
                                        <MyDropdownLink :linkadd="'/MissionVision'" >
                                            Mission and Vision
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/CoreValues'" >
                                            Core Values
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/KeyBehaviours'" >
                                            Key Behaviours
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/OurTeam'" >
                                            Our Team
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/SectorOverview'" >
                                            Sector Overview
                                        </MyDropdownLink>

                                    </template>
                                </MyDropdown>                                </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <MyDropdown>
                                    <template #trigger>
                                        Products
                                    </template>
                                    <template #list>
                                        <MyDropdownLink :linkadd="'/Aerogels'" >
                                            Aerogels
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/Geosynthetics'" >
                                            Geosynthetics
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/PipelineProtection'" >
                                            Pipeline Protection
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/Mining'" >
                                            Mining
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/DrillingSubs'" >
                                            Drilling Subs
                                        </MyDropdownLink>
                                        <MyDropdownLink :linkadd="'/SupplyChain'" >
                                            Supply Chain Solutions
                                        </MyDropdownLink>
                                    </template>
                                </MyDropdown>    
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <NavLink :href="'IndigenousRelations'" >
                                    Indigenous Relations
                                </NavLink>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <NavLink :href="'ContactUs'">
                                    Contact Us
                                </NavLink>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" @click="showingNavigationDropdown = ! showingNavigationDropdown">
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                </div>
            </nav>
            <MenuBar >{{ title }}</MenuBar> 

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="container mx-auto p-20 pt-8 my-auto text-white"> <!-- Outside container -->
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
