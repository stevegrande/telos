<script setup>
    import { onMounted,defineProps } from 'vue';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/vue3';

    let props = defineProps({
        currentHeading: String
    })

</script>
<template>
    <AppLayout title="Core Values">
        <div class="text-2xl italic text-center">
            ”Our Core Values transform everything we do, inform every decision we make, govern every action we undertake.”
        </div>
        <div>
            <table class="table-auto border border-black mt-8">
                <tr>
                    <td class="p-4 text-2xl font-bold uppercase bg-sky-600 border text-white border-black w-1/4">
                        People
                    </td>
                    <td class="ml-4 bg-gray-200 p-4 text-blue-900 border border-black font-bold text-lg">
                        “Prioritizing People over Profit”
                    </td>
                </tr>
                <!-- ************** -->
                <tr>
                    <td class=" border border-black bg-[url('/images/img5.png')] bg-cover">
                    </td>
                    <td class="p-2 ml-4 bg-white text-blue-900 border border-black">
                        <div class="my-2 mx-4">
                            We lead with honour, recognizing the infinite value of each person. Every individual is uniquely created, possesses a distinct purpose, and brings invaluable gifts to the marketplace.
                        </div>
                        <div class="my-2 mx-4">
                            We aspire to identify where each person will	thrive, shine, find satisfaction, and achieve fulfillment.
                            When individuals thrive, the company thrives.
                        </div>
                        <div class="my-2 mx-4">
                            We aim to equip every person —be it a customer, vendor, or employee —empowering them to realize
                            their full potential.
                        </div>
                    </td>
                </tr>
                <!-- ************** -->
                <tr>
                    <td class="p-4 text-2xl font-bold uppercase bg-sky-600 border text-white border-black w-1/4">
                        Servant Leadership
                    </td>
                    <td class="ml-4 bg-gray-200 p-4 text-blue-900 border border-black font-bold text-lg">
                        “Nurturing Dreams over Profits”
                    </td>
                </tr>
                <!-- ************** -->
                <tr>
                    <td class="border border-black bg-[url('/images/img6.png')] bg-cover" />

                    <td class="p-2 bg-white text-blue-900 border border-black">
                        <div class="my-2 mx-4">
                            Servant Leadership entails the profound responsibility of uplifting those in our sphere; empowering them to reach their aspirations and fulfill	their dreams.
                        </div>
                        <div class="my-2 mx-4">
                            As leaders, we deliberately choose to safeguard the well-being of those entrusted to us —individuals impacted by our influence, including employees, customers, and vendors.
                        </div>
                        <div class="my-2 mx-4">
                            We cultivate trust by extending it to our team and diligently working to earn that trust in return.
                        </div>
                        <div class="my-2 mx-4">
                            We foster a shared purpose, encouraging individual	creativity in the pursuit of common objectives.
                        </div>
                        <div class="my-2 mx-4">
                            Our commitment to servant leadership is encapsulated in the mantra: "I am here to support your dreams, not exploit your contributions for my gain."
                        </div>
                    </td>
                    
                </tr>
                <tr>
                    <td class="p-4 text-2xl font-bold uppercase bg-sky-600 border text-white border-black w-1/4">
                        Integrity
                    </td>
                    <td class="ml-4 bg-gray-200 p-4 text-blue-900 border border-black font-bold text-lg">
                        “Conducting Ourselves with Honesty and Fairness”
                    </td>
                </tr>
                <!-- ************** -->
                <tr>
                    <td class="border border-black bg-[url('/images/img7.png')] bg-cover" />

                    <td class="p-2 bg-white text-blue-900 border border-black">
                        <div class="h-10"></div>
                        <div class="my-2 mx-4">
                            We unwaveringly commit to constructing a prosperous enterprise rooted in the bedrock of honesty, fairness, and ethical conduct in every interaction.
                        </div>
                        <div class="my-2 mx-4">
                            Taking full responsibility for our actions and decisions, we honor our commitments and uphold a culture of accountability for ourselves and our colleagues.
                        </div>
                        <div class="h-10"></div>
                        <div class="h-10"></div>
                    </td>
                    
                </tr>
                <tr>
                    <td class="p-4 text-2xl font-bold uppercase bg-sky-600 border text-white border-black w-1/4">
                        Stewardship
                    </td>
                    <td class="ml-4 bg-gray-200 p-4 text-blue-900 border border-black font-bold text-lg">
                        “Enhancing Management Excellence”
                    </td>
                </tr>
                <!-- ************** -->
                <tr>
                    <td class="border border-black bg-[url('/images/img8.png')] bg-cover" />

                    <td class="p-2 bg-white text-blue-900 border border-black">
                        <div class="h-10"></div>
                        <div class="my-2 mx-4">
                            Recognizing that everything is under God's ownership, we embrace the responsibility to faithfully manage the people, resources, and environment entrusted to us.
                        </div>
                        <div class="my-2 mx-4">
                            Each team member acts as a steward of their specific role within the company, understanding their broader role as a custodian of the company and its valuable resources.
                        </div>
                        <div class="h-10"></div>
                        <div class="h-10"></div>
                    </td>
                    
                </tr>
                <tr>
                    <td class="p-4 text-2xl font-bold uppercase bg-sky-600 border text-white border-black w-1/4">
                        Continuous Improvement
                    </td>
                    <td class="ml-4 bg-gray-200 p-4 text-blue-900 border border-black font-bold text-lg">
                        “Striving Every Day to Enhance Our Impact.”
                    </td>
                </tr>
                <!-- ************** -->
                <tr>
                    <td class="border border-black bg-[url('/images/img9.png')] bg-cover" />

                    <td class="p-2 bg-white text-blue-900 border border-black">
                        <div class="h-10"></div>
                        <div class="my-2 mx-4">
                            Believing that there is perpetually a more effective way to accomplish tasks, we embrace change.
                        </div>
                        <div class="my-2 mx-4">
                            We proactively seek opportunities for self-improvement, sustained growth, and advancement that generates societal progress, shapes a more positive world, and creates meaningful value for humanity.
                        </div>
                        <div class="h-10"></div>
                        <div class="h-10"></div>

                    </td>
                    
                </tr>
            </table>
        </div>

        <div class="mt-4 text-2xl text-white italic text-center">
            <Link href="/KeyBehaviours">
                <span>Key Behaviours >> </span>
            </Link>
        </div>

</AppLayout>
</template>