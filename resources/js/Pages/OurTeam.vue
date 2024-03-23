<script setup>
    import { onMounted,defineProps } from 'vue';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/vue3';

    let props = defineProps({
        currentHeading: String
    })


</script>
<template>
    <AppLayout title="Experienced Servant Leaders">
        <div class="text-2xl italic text-center">
            ”Experienced business professionals who are dedicated wholeheartedly to the mission, vision, and core values of Telos.”
        </div>
        <div >
            <table class="table-auto border border-black mt-8 space-y-8">
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-2xl uppercase">Steve&nbsp;Hawyes</div>
                    </td>
                    <td class="ml-4 bg-white p-8 text-blue-900 font-bold border border-black">
                        <div>Chief Culture and Communications Officer</div>
                        <div>Sales & Business Development</div>
                        <div>Founding Partner</div>
                    </td>
                </tr>
                <tr>
                    <td class=" border border-black bg-[url('/images/Hawyes.png')] bg-center bg-cover" />
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900 border border-black">
                        <div class="space-y-3">
                            <div>
                                “I am committed to showcasing Telos' enduring dedication to a flourishing culture that shapes its core identity. Influenced by effective leadership, strong organizational values, and collective experiences, it fosters a distinctive and cohesive work atmosphere.”
                            </div>
                            <div>
                                An accomplished entrepreneur and leader, Steve founded several businesses in South Africa before immigrating to Canada nine years ago with his wife, Karen, and their two children. His commitment to servant leadership led him to Terrace, BC, where he has served as a pastor since 2015.
                            </div>
                            <div>
                                Steve is passionate about life, loves people, and is captivated by culture and strategy. A devoted family man, he is blessed with a beautiful wife, two gorgeous children, and two cherished grandkids. Steve finds enjoyment in squash, hunting, and outdoor activities with friends and family. His passion for life, people, and his desire to bring out the best in others align seamlessly with Telos' values and ethos of "helping companies and people go further."
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="h-10"></tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-2xl uppercase">Ted Balas</div>
                    </td>
                    <td class="ml-4 bg-white font-bold p-8 text-blue-900 border border-black">
                        <div>Chief Operating Officer</div>
                        <div>Supply Chain & Manufacturing</div>
                        <div>Founding Partner</div>
                    </td>
                </tr>
                <tr>
                    <td class=" border border-black bg-[url('/images/Balas.png')] bg-center bg-cover" />
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900 border border-black">
                        <div class="space-y-3">
                            <div>
                                Born in Romania under communist rule, Ted learned the value of hard work and perseverance. Formally educated in textiles, Ted worked in the textile industry in Austria as a designer, creating many designs for high-end fashion stores. Shortly after arriving in Canada, Ted’s entrepreneurial spirit led him to open an industrial clothing factory in Winnipeg, MB where he sold uniforms and industrial clothing across Canada for over a decade.
                            </div>
                            <div>
                                Over the years Ted has travelled the world, sourcing products and securing the supply chains. He is a results driven professional with a proven aptitude for finding solutions to complex issues that ensure the success of his clients.
                            </div>
                            <div>
                                Ted is married to a lovely wife, and together they have raised two terrific sons. Ted enjoys gold panning, travelling, gardening, and camping; but his favorite time is the time spent with family.
                            </div>
                            <div>
                                “Energy & Persistence conquer all things” Benjamin Franklin
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="h-10"></tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-2xl uppercase">Tim Ulmer</div>
                    </td>
                    <td class="ml-4 bg-white font-bold p-8 text-blue-900 border border-black">
                        <div>President and CEO</div>
                        <div>Founding Partner</div>
                    </td>
                </tr>
                <tr>
                    <td class=" border border-black bg-[url('/images/Ulmer.png')] bg-center bg-cover" />
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900 border border-black">
                        <div>
                            <div>
                                “I want to be a part of a company where ‘people come before profit’. Here at Telos, I can truly serve my team members, my customers, and my vendors.”
                            </div>
                            <div>
                                Tim has spent over 30 years in the oil and gas and resource sector as a senior executive and manager. During this time, he has provided supply chain and project management to virtually every petro-chemical facility and major pipeline in Western Canada. He has worked closely with end users to design application specific solutions, including proprietary products that have been used by resource companies across Western Canada.
                            </div>
                            <div>
                                Tim is passionate about providing an outstanding customer service experience with superior and innovative products that ‘help companies (and people) go further’.
                            </div>
                            <div>
                                A Calgarian since 2001, blessed with a loving wife and three wonderful children, and a youth group leader, Tim enjoys airplanes, motorcycles, and every outdoor activity Alberta and the Rocky Mountains have to offer.
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="h-10"></tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-2xl uppercase">YANNICK BEDARD</div>
                    </td>
                    <td class="ml-4 bg-white font-bold p-8 text-blue-900 border border-black">
                        <div>Indigenous Relations</div>
                        <div>New Business Development</div>
                    </td>
                </tr>
                <tr class="h-10"></tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-2xl uppercase">DEAN&nbsp;MIKALAUSKAS</div>
                    </td>
                    <td class="ml-4 bg-white font-bold p-8 text-blue-900 border border-black">
                        <div>Business Development</div>
                    </td>
                </tr>

            </table>
        </div>
        <div class="mt-4 text-2xl text-white italic text-center">
            <Link href="/SectorOverview">
                <span>Sector Overview >> </span>
            </Link>
        </div>

</AppLayout>
</template>