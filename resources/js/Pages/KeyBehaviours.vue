<script setup>
    import { onMounted,defineProps } from 'vue';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link } from '@inertiajs/vue3';

    let props = defineProps({
        currentHeading: String
    })

</script>
<template>
    <AppLayout title="Key Behaviours">
        <div class="text-2xl italic text-center">
            ”We will achieve our Mission and Vision through how we act and how we behave.”
        </div>
        <div>
            <table class="table-auto border border-black mt-8">
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-2xl">1.</div>
                        <div>LIVE BY OUR CORE VALUES</div>
                    </td>
                    <td class="ml-4 bg-white p-8 text-blue-900 border border-black">
                        <div>
                            We embrace the journey with unwavering integrity, allowing our Core Values to serve as the compass that governs and guides every step we take. In every endeavor, we are committed to upholding the principles that define us, ensuring that our actions reflect the essence of who we are and what we stand for.
                        </div>
                        <div class="font-extrabold mt-2">
                            We Ask Ourselves: “Is what I’m doing in alignment with and demonstrating our Core Values?"
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-900 border text-white border-black">
                        <div class="text-2xl">2.</div>
                        <div>PRIORITIZE OUR RELATIONSHIPS</div>
                    </td>
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900 border border-black">
                        <div>
                            We embrace a values-driven approach to prioritize our relationships, recognizing the importance of each connection.
                            <ol class="list-decimal ml-4" type="1">
                                <li>
                                    Faith Connection: Nurture a profound relationship with God, seeking guidance, strength, and purpose in all endeavors.
                                </li>
                                <li>
                                    Family Focus: Extending care and support to our internal family - our employees and their families — we cultivate a work environment that values each member, fostering collaboration and mutual growth.
                                </li>
                                <li>
                                    Vendor & Customer Partnership: Engaging in meaningful relationships with our vendors and customers, we foster trust, transparency, and collaboration to build strong partnerships that contribute to shared success.
                                </li>
                                <li>
                                    Community Commitment: Actively participating in and contributing to the well-being of the broader community, and embracing social responsibility, we aim to make a positive impact on the lives of those around us.
                                </li>  
                            </ol> 
                        </div>
                        <div class="font-extrabold mt-2">
                            We Ask Ourselves: “Is my intended course of action putting the right people first?”
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-2xl">3.</div>
                        <div>EMBRACE INNOVATION AND CHANGE</div>
                    </td>
                    <td class="ml-4 bg-white p-8 text-blue-900 border border-black">
                        <div>
                            We aspire to cultivate and champion innovation and change within our marketplace through an unwavering commitment to delivering premium products and services that consistently surpass both industry standards and customer expectations.
                        </div>
                        <div class="font-extrabold mt-2">
                            We Ask Ourselves: “What can I personally do to make things better? Is there a better way?”
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-900 border text-white border-black">
                        <div class="text-2xl">4.</div>
                        <div>THINK AND LEAD STRATEGICALLY</div>
                    </td>
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900 border border-black">
                        <div>
                            We meticulously craft each decision within a strategic lens, deliberately assessing how every activity contributes to the realization of our mission to ensure a purposeful and cohesive approach.
                        </div>
                        <div class="font-extrabold mt-2">
                            We Ask Ourselves: “How does this decision contribute to our mission and vision?”
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-600 border text-white border-black">
                        <div class="text-2xl">5.</div>
                        <div>CREATE TRUSTING RELATIONSHIPS</div>
                    </td>
                    <td class="ml-4 bg-white p-8 text-blue-900 border border-black">
                        <div>
                            We cultivate Trustworthy Connections through:
                                <ul class="space-y-1">
                                    <li>• Demonstrated Expertise in Supply Chain Management; and</li>
                                    <li>• Outstanding Customer Service. Our commitment revolves around placing our customers and vendors at the core of our operations. We aim to surpass their expectations, fostering enduring relationships.</li>
                                </ul>

                        </div>
                        <div class="font-extrabold mt-2">
                            We Ask Ourselves: “What outcome could I reasonably expect as a customer that would inspire me to work with Telos again?”
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center p-8 text-2xl font-bold uppercase bg-sky-900 border text-white border-black">
                        <div class="text-2xl">6.</div>
                        <div>COLLABORATE AND WORK AS A TEAM</div>
                    </td>
                    <td class="ml-4 bg-gray-200 p-8 text-blue-900 border border-black">
                        <div>
                            We work as a team. Realizing teamwork is essential to our success, we cherish a range of viewpoints, foster transparent communication, and unite in our efforts to reach shared objectives. <span class="italic">"Our collective strength enhances our capabilities."</span>
                        </div>
                        <div class="font-extrabold mt-2">
                            We Ask Ourselves: “How can my team help me be better? How can I serve and inspire my team?”
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="mt-4 text-2xl text-white italic text-center">
            <Link href="/OurTeam">
                <span>Our Team >> </span>
            </Link>
        </div>

</AppLayout>
</template>