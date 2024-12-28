<template>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <div class="m-0 bg-gray-100 divide-y-10 divide-x custom-font font-semibold">
        <div class="h-20 ml-12 grid grid-cols-12 text-center text-sm">
            <div class="col-start-6 col-end-8 col-span-2 content-center">
                <div>
                    <Link href="/">Admin panel</Link>
                </div>
            </div>
            <div class="h-full flex items-center col-start-10 col-end-12 col-span-2" v-if="user">
                <Link :href="route('login')" class="text-sm h-full px-2 content-center text-gray-500 hover:bg-gray-200">
                {{
                    user.name
                }}</Link>
                <Link :href="route('logout')" class="text-sm h-full px-2 hover:bg-gray-200" method="DELETE" as="button">
                Logout
                </Link>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 text-sm">
        <div class="h-screen bg-gray-100 flex-col justify-start items-start">
            <div class="p-4 hover:bg-gray-200">
                <Link class="h-full" :href="route('project.index')">Projects</Link>
            </div>
            <div class="p-4 hover:bg-gray-200">
                <Link :href="route('project.index')">Home</Link>
            </div>
            <div class="p-4 hover:bg-gray-200">
                <Link :href="route('project.index')">Skills</Link>
            </div>
            <div class="p-4 hover:bg-gray-200">
                <Link :href="route('project.index')">About me</Link>
            </div>
        </div>
        <div class="col-start-3 col-end-12 col-span-9">
            <slot></slot>
        </div>
    </div>


</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const page = usePage()

const user = computed(
    () => page.props.user
)
</script>
