<script setup>

import AInput from "@/Components/Plugins/AInput.vue";
import ClientLayout from "@/Layouts/ClientLayout.vue";
import ASelect from "@/Components/Plugins/ASelect.vue";
import ALabel from "@/Components/Plugins/ALabel.vue";
import ALink from "@/Components/Plugins/ALink.vue";
</script>

<template>
    <ClientLayout>
        <section class="py-10 bg-gray-50 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="p-10 bg-white rounded-3xl">
                    <div class="flex flex-wrap -m-8">
                        <div class="w-full md:w-1/2 p-8">
                            <div class="py-12 md:max-w-md mx-auto">
                                <div class="flex flex-wrap items-center justify-between -m-2 mb-24">
                                    <div class="w-auto p-2"><img
                                        src="https://static.shuffle.dev/uploads/files/5e/5eff168bb8ad8388b2cfa272a3528f64e4d85b9d/text-customcolor-icon-transparent-background.png"
                                        alt="" class="w-60"></div>

                                </div>
                                <div class="mb-10">
                                    <h3 class="font-heading mb-3 text-3xl font-black tracking-tight text-gray-900">
                                        Create free account</h3>
                                    <hr class="rounded-full mb-4 w-16 border-4 border-yellow-200 bg-yellow-200">
                                </div>


                                <form>
                                    <div class="flex flex-wrap -m-2 mb-6">

                                        <div class="p-2 w-full">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Account Type</p>
                                            <select
                                                class="px-6 py-3.5 mb-4 bg-white border border-gray-200 lw-full bg-transparent text-lg text-gray-900 placeholder-gray-200 font-bold outline-none rounded-full w-full"
                                                name="gender">
                                                <option>Job Seeker / Employee</option>
                                                <option>Employer</option>
                                                <option>Training Institute</option>
                                            </select></div>

                                        <div class="w-full p-2">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Full name</p>
                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="text" model-placeholder="i.e. John Doe" model-name="name"
                                            />
                                        </div>
                                        <div class="w-full p-2">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Email address</p>
                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="text" model-placeholder="Email address" model-name="email"
                                            />
                                        </div>


                                        <div class="p-2 w-60">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Gender</p>
                                            <ASelect
                                                :model-options="[{'id': '1', 'label': 'Male'}, {'id': '2', 'label': 'Female'}, ]"
                                                model-name="gender" model-id="gender"
                                                model-class="px-6 py-3.5 mb-4 bg-white border border-gray-200 lw-full bg-transparent text-lg text-gray-900 placeholder-gray-200 font-bold outline-none rounded-full w-full"/>
                                        </div>

                                        <div class="p-2 w-56">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Date of birth</p>

                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="date" model-id="birthday" model-name="birthday"
                                            />
                                        </div>


                                        <div class="p-2 w-60">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Country</p>
                                            <ASelect
                                                :model-options="[{'id': 'AF', 'label': 'Afghanistan'}, {'id': 'AX', 'label': 'Aland Islands'}, ]"
                                                model-name="country" model-id="country"
                                                model-class="px-6 py-3.5 mb-4 bg-white border border-gray-200 lw-full bg-transparent text-lg text-gray-900 placeholder-gray-200 font-bold outline-none rounded-full w-full"/>
                                        </div>

                                        <div class="p-2 w-56">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">City</p>
                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="text" model-placeholder="Enter Your city" model-id="city"
                                                model-name="city"
                                            />
                                        </div>

                                        <div class="p-2 w-full">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Residential</p>
                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="text" model-placeholder="Enter Your Residential"
                                                model-id="residential" model-name="residential"
                                            />
                                        </div>

                                        <div class="w-full p-2 ">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Phone Number</p>
                                        </div>

                                        <div class="p-2 lg:w-36">
                                            <ASelect
                                                :model-options="[{'id': '93', 'label': 'Afghanistan +93'}, {'id': '358', 'label': 'Åland Islands +358'}, ]"
                                                model-id="phone" model-name="phone"
                                                model-class="px-6 py-3.5 mb-4 bg-white border border-gray-200 lw-full bg-transparent text-lg text-gray-900 placeholder-gray-200 font-bold outline-none rounded-full w-full"/>
                                        </div>

                                        <div class="p-2 w-80">
                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="text" model-placeholder="Enter Your Phone Number"
                                                model-id="phone" model-name="phone"
                                            />
                                        </div>

                                        <div class="p-2 w-full">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Civil ID</p>
                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="text" model-placeholder="Enter your Civil ID"
                                                model-id="civilid" model-name="civilid"
                                            />
                                        </div>


                                        <div class="w-full p-2">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Password</p>
                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="password" model-placeholder="********" model-id="password"
                                                model-name="password"
                                            />
                                        </div>

                                        <div class="w-full p-2">
                                            <p class="block mb-2 text-sm text-gray-500 font-bold">Password
                                                Confirm</p>
                                            <AInput
                                                model-class="appearance-none px-6 py-3.5 w-full text-lg text-gray-500 font-bold bg-gray-100 placeholder-gray-500 outline-none border border-gray-200 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                model-type="password" model-placeholder="********"
                                                model-id="confirmpassword" model-name="confirmpassword"
                                            />
                                        </div>

                                        <div class="flex p-2 items-center">
                                            <AInput model-class="opacity-0 absolute h-6 w-6"
                                                    model-type="checkbox" model-id="signUpLightReverseCheckbox4-1"
                                                    model-name="signUpLightReverseCheckbox4-1"
                                            />
                                            <div
                                                class="flex flex-shrink-0 justify-center items-center w-6 h-6 mr-4 text-transparent bg-white border border-gray-200 border-neutral-200 rounded-md">
                                                <svg width="9" height="7" viewbox="0 0 9 7" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.603516 3.77075L2.68685 5.85409L7.89518 0.645752"
                                                          stroke="currentColor" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <ALabel model-class="text-gray-500 font-bold"
                                                    model-for="signUpLightReverseCheckbox4-1">
                                                <span>By signing up, I agree to the </span>
                                                <ALink model-class="text-blue-500 hover:text-blue-600" model-link="#"
                                                       model-value="Terms &amp; Conditions"/>
                                            </ALabel>
                                        </div>

                                        <div class="w-full p-3">
                                            <div class="flex flex-wrap md:justify-end -m-2">
                                                <div class="w-full p-2">
                                                    <ALink
                                                        model-class="block px-8 py-3.5 text-lg text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full"
                                                        model-link="#" model-value="Create free account"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full p-3">
                                            <div class="flex flex-wrap md:justify-end -m-2">
                                                <div class="w-full p-2">
                                                    <ALink
                                                        model-class="block px-8 py-3.5 text-lg text-center font-bold hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full border-2 border-blue-500 text-blue-500 hover:text-white"
                                                        model-link="#" model-value="Sign In"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full p-3">
                                            <div class="flex flex-wrap md:justify-end -m-2">
                                                <div class="w-full p-2">
                                                    <ALink
                                                        model-class="flex items-center justify-center px-8 py-3.5 bg-white hover:bg-gray-50 focus:ring-4 focus:ring-blue-200 rounded-full">
                                                        <img class="mr-2.5"
                                                             src="/assets/zanrly-assets/images/sign-in/google-play.svg"
                                                             alt="">
                                                        <span class="text-lg text-gray-900 text-center font-bold">Sign in with Google</span>
                                                    </ALink>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full p-3">
                                            <div class="flex flex-wrap md:justify-end -m-2">
                                                <div class="w-full p-2">
                                                    <ALink
                                                        model-class="flex items-center justify-center px-8 py-3.5 bg-white hover:bg-gray-50 focus:ring-4 focus:ring-blue-200 rounded-full">
                                                        <img class="mr-2.5"
                                                             src="/assets/zanrly-assets/images/sign-in/twitter.svg"
                                                             alt="">
                                                        <span class="text-lg text-gray-900 text-center font-bold">Sign in with Twitter</span>
                                                    </ALink>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="w-full md:w-1/2 p-8 hidden lg:block">
                            <div class="flex flex-col justify-end py-16 px-8 text-center h-full rounded-3xl"
                                 style="background-image: url('https://static.shuffle.dev/uploads/files/5e/5eff168bb8ad8388b2cfa272a3528f64e4d85b9d/Untitled-1.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <div class="md:max-w-md mx-auto">
                                    <h3 class="font-heading mb-3 text-3xl text-white font-black tracking-tight">Pure
                                        enjoyment with WorkGo</h3>

                                    <div class="flex flex-wrap justify-center -m-1">
                                        <div class="w-auto p-1">
                                            <ALink model-class="inline-block w-3 h-3 bg-white rounded-full"
                                                   model-link="#"/>
                                        </div>
                                        <div class="w-auto p-1">
                                            <ALink
                                                model-class="inline-block w-3 h-3 rounded-full bg-yellow-200"
                                                model-link="#"/>
                                        </div>
                                        <div class="w-auto p-1">
                                            <ALink
                                                model-class="inline-block w-3 h-3 rounded-full bg-yellow-200"
                                                model-link="#"/>
                                        </div>
                                        <div class="w-auto p-1">
                                            <ALink
                                                model-class="inline-block w-3 h-3 rounded-full bg-yellow-200"
                                                model-link="#"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 bg-gray-50 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="py-16 px-8 mb-8 bg-white rounded-3xl">
                    <div class="max-w-7xl mx-auto">
                        <div class="flex flex-wrap items-center justify-between -m-4">
                            <div class="w-auto p-4"><a class="inline-block" href="#"><img
                                src="https://static.shuffle.dev/uploads/files/5e/5eff168bb8ad8388b2cfa272a3528f64e4d85b9d/text-customcolor-icon-transparent-background.png"
                                alt="" class="w-40"></a></div>
                            <div class="w-auto p-4">
                                <ul class="-m-6">
                                    <li class="inline-flex p-6">
                                        <ALink
                                            model-class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                                            model-link="https://web.workgo.agency/" model-value="Home"/>
                                    </li>
                                    <li class="inline-flex p-6">
                                        <ALink
                                            model-class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                                            model-link="https://web.workgo.agency/about/" model-value="About us"/>
                                    </li>
                                    <li class="inline-flex p-6">
                                        <ALink
                                            model-class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                                            model-link="#" model-value="Support"/>
                                    </li>
                                    <li class="inline-flex p-6">
                                        <ALink
                                            model-class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                                            model-link="#" model-value="Privacy"/>
                                    </li>
                                    <li class="inline-flex p-6">
                                        <ALink
                                            model-class="inline-block text-gray-500 hover:text-gray-600 font-bold"
                                            model-link="https://web.workgo.agency/en/contact/"
                                            model-value="Contact us"/>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-auto p-4">
                                <div class="flex flex-wrap -m-4">
                                    <div class="w-auto p-4">
                                        <ALink model-class="block"><img
                                            src="/assets/zanrly-assets/images/insta.svg" alt=""></ALink>
                                    </div>
                                    <div class="w-auto p-4">
                                        <ALink model-class="block"><img
                                            src="/assets/zanrly-assets/images/twitter.svg" alt=""></ALink>
                                    </div>
                                    <div class="w-auto p-4">
                                        <ALink model-class="block"><img
                                            src="/assets/zanrly-assets/images/footers/fb.svg" alt=""></ALink>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center font-bold"><span>Ⓒ Copyright. All rights reserved by </span>
                    <ALink model-class="text-blue-500 hover:text-blue-600" model-link="#" model-value="WorkGo"/>
                </p>
            </div>
        </section>
    </ClientLayout>
</template>

<style scoped>

</style>
