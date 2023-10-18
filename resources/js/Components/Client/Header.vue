<script setup>
import ALink from "@/Components/Plugins/ALink.vue";
</script>

<template>
    <section class="py-6 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between px-6 py-3.5 bg-gray-800 rounded-full">
                <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto">
                            <ALink model-link="#">
                                <img
                                    src="https://static.shuffle.dev/uploads/files/5e/5eff168bb8ad8388b2cfa272a3528f64e4d85b9d/workgo-logo.png"
                                    alt="" class="ml-3 w-40">
                            </ALink>
                        </div>
                    </div>
                </div>

                <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto hidden lg:block">
                            <ul class="flex items-center justify-center">
                                <li class="mr-9">
                                    <ALink model-class="inline-block text-md font-bold text-gray-200 hover:blue-500" model-link="https://web.workgo.agency/" model-value="Home" />
                                </li>
                                <li class="mr-9">
                                    <ALink model-class="inline-block text-md font-bold text-gray-200 hover:text-gray-300" model-link="https://web.workgo.agency/" model-value="Jobs" />
                                </li>
                                <li class="mr-9">
                                    <ALink model-class="inline-block text-md font-bold text-gray-200 hover:text-gray-300" model-link="https://web.workgo.agency/" model-value="Talents" />
                                </li>
                                <li class="mr-9">
                                    <ALink model-class="inline-block text-md font-bold text-gray-200 hover:text-gray-300" model-link="https://web.workgo.agency/" model-value="Courses" />
                                </li>
                                <li class="mr-9">
                                    <ALink model-class="inline-block text-md font-bold text-gray-200 hover:text-gray-300 https://web.workgo.agency/en/blog/" model-link="https://web.workgo.agency/blog/" model-value="Blog" />
                                </li>
                                <li class="mr-9">
                                    <ALink model-class="inline-block text-md font-bold text-gray-200 hover:text-gray-300" model-link="https://web.workgo.agency/about/" model-value="About" />
                                </li>
                                <li class="mr-9">
                                    <ALink model-class="inline-block text-md font-bold text-gray-200 hover:text-gray-300" model-link="https://web.workgo.agency/contact/" model-value="Contact" />
                                </li>
                                <li class="flex">
                                        <span class="inline-block mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                 id="Layer_1" x="0px" y="0px" viewBox="0 0 320.3 320.3"
                                                 style="enable-background:new 0 0 320.3 320.3;" xml:space="preserve"
                                                 class="text-gray-200 fill-current w-5">
                                                <g>
                                                    <path class="st0"
                                                          d="M107.1,103.4c-1.2,0-2.3,0-3.5,0c0,37.6,0,75.3,0,112.9c67.6,0,135.1,0,202.7,0c1.3,0,2.6,0,3.8,0.1   c6.6-17.5,10.2-36.5,10.2-56.3c0-20-3.7-39.2-10.4-56.8c-1.1,0-2.2,0-3.3,0C240.1,103.4,173.6,103.4,107.1,103.4z"></path>
                                                    <path class="st1"
                                                          d="M103.6,216.4c-18.5,18.5-36.9,37-55.4,55.5c-0.5,0.5-0.9,1-1.4,1.4c29,29,69.1,47,113.4,47   c68.6,0,127.2-43.2,150-103.8c-1.3,0-2.6-0.1-3.8-0.1C238.7,216.4,171.1,216.4,103.6,216.4z"></path>
                                                    <path class="st2"
                                                          d="M160.2,0C116,0,76.1,17.8,47.1,46.7C62.2,61.9,77.3,77,92.4,92.2c3.7,3.7,7.4,7.5,11.2,11.3l0,0v0   c1.2,0,2.3,0,3.5,0c66.5,0,133,0,199.5,0c1.1,0,2.2,0,3.3,0C287,42.9,228.6,0,160.2,0z"></path>
                                                    <path class="st3"
                                                          d="M103.6,216.4c0-37.6,0-75.3,0-112.9c-3.7-3.8-7.4-7.5-11.2-11.3C77.3,77,62.2,61.9,47.1,46.7   C18,75.7,0,115.8,0,160.2c0,44.2,17.9,84.2,46.8,113.1c0.5-0.5,0.9-1,1.4-1.4C66.7,253.4,85.1,234.9,103.6,216.4z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    <ALink
                                        model-class="inline-block text-md font-bold text-gray-200 hover:text-gray-300 items-center"
                                        model-value="العربية"/>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto hidden lg:block">
                            <div class="flex flex-wrap -m-2">
                                <div class="w-full md:w-auto p-2">
                                    <ALink model-link="#" model-value="Login"
                                           model-class="block w-full px-4 py-2.5 text-center text-white font-bold focus:ring-4 rounded-full border-2"/>
                                </div>
                                <div class="w-full md:w-auto p-2">
                                    <ALink model-link="#" model-value="Create Account"
                                           model-class="block w-full px-4 py-2.5 text-center text-white font-bold bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 rounded-full border-2 border-blue-500"/>
                                </div>
                            </div>
                        </div>
                        <div class="w-auto lg:hidden">
                            <ALink model-class="inline-block" model-link="#">
                                <svg class="navbar-burger text-blue-500" width="45" height="45" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                                    <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </ALink>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-menu fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50 hidden">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-80"></div>
                <nav class="relative z-10 px-9 pt-8 bg-gray-800 h-full overflow-y-auto">
                    <div class="flex flex-wrap justify-between h-full">
                        <div class="w-full">
                            <div class="flex items-center justify-between -m-2">
                                <div class="w-auto p-2">
                                    <ALink model-link="#" model-class="inline-block">
                                        <img
                                            src="https://static.shuffle.dev/uploads/files/5e/5eff168bb8ad8388b2cfa272a3528f64e4d85b9d/workgo-logo.png">
                                    </ALink>
                                </div>
                                <div class="w-auto p-2">
                                    <ALink model-link="#" model-class="inline-block navbar-burger">
                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 18L18 6M6 6L18 18" stroke="#ffffff" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </ALink>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col py-8 w-full">
                            <ul>
                                <li class="mb-9">
                                    <ALink
                                        model-class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                                        model-link="https://web.workgo.agency/" model-value="Home"/>
                                </li>
                                <li class="mb-9">
                                    <ALink
                                        model-class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                                        model-link="#" model-value="Jobs"/>
                                </li>
                                <li class="mb-9">
                                    <ALink
                                        model-class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                                        model-link="#" model-value="Talents"/>
                                </li>
                                <li class="mb-9">
                                    <ALink
                                        model-class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                                        model-link="#" model-value="Courses"/>
                                </li>
                                <li class="mb-9">
                                    <ALink
                                        model-class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                                        model-link="#" model-value="Blog"/>
                                </li>
                                <li class="mb-9">
                                    <ALink
                                        model-class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                                        model-link="#" model-value="About"/>
                                </li>
                                <li class="mb-9">
                                    <ALink
                                        model-class="inline-block text-sm font-bold text-gray-200 hover:text-gray-300"
                                        model-link="#" model-value="Contact"/>
                                </li>
                                <li class="mr-9 flex">
                                    <span class="inline-block mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                             id="Layer_1" x="0px" y="0px" viewbox="0 0 320.3 320.3"
                                             style="enable-background:new 0 0 320.3 320.3;" xml:space="preserve"
                                             class="text-gray-200 fill-current w-5">
                                            <g>
                                                <path class="st0"
                                                      d="M107.1,103.4c-1.2,0-2.3,0-3.5,0c0,37.6,0,75.3,0,112.9c67.6,0,135.1,0,202.7,0c1.3,0,2.6,0,3.8,0.1   c6.6-17.5,10.2-36.5,10.2-56.3c0-20-3.7-39.2-10.4-56.8c-1.1,0-2.2,0-3.3,0C240.1,103.4,173.6,103.4,107.1,103.4z"></path>
                                                <path class="st1"
                                                      d="M103.6,216.4c-18.5,18.5-36.9,37-55.4,55.5c-0.5,0.5-0.9,1-1.4,1.4c29,29,69.1,47,113.4,47   c68.6,0,127.2-43.2,150-103.8c-1.3,0-2.6-0.1-3.8-0.1C238.7,216.4,171.1,216.4,103.6,216.4z"></path>
                                                <path class="st2"
                                                      d="M160.2,0C116,0,76.1,17.8,47.1,46.7C62.2,61.9,77.3,77,92.4,92.2c3.7,3.7,7.4,7.5,11.2,11.3l0,0v0   c1.2,0,2.3,0,3.5,0c66.5,0,133,0,199.5,0c1.1,0,2.2,0,3.3,0C287,42.9,228.6,0,160.2,0z"></path>
                                                <path class="st3"
                                                      d="M103.6,216.4c0-37.6,0-75.3,0-112.9c-3.7-3.8-7.4-7.5-11.2-11.3C77.3,77,62.2,61.9,47.1,46.7   C18,75.7,0,115.8,0,160.2c0,44.2,17.9,84.2,46.8,113.1c0.5-0.5,0.9-1,1.4-1.4C66.7,253.4,85.1,234.9,103.6,216.4z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <ALink model-class="inline-block font-bold text-gray-200 hover:text-gray-300 items-center text-sm"
                                       model-value="العربية" model-link="#" />
                                </li>
                            </ul>
                        </div>

                        <div class="flex flex-col w-full">
                            <div class="flex flex-wrap -m-2">

                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </section>
</template>

<style scoped>

</style>
