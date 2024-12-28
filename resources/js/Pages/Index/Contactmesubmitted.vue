<template>
    <div class="text-sm font-semibold custom-font flex h-screen justify-center items-center">
        Thank you!, Your message has been successfully sent to Deepak
        Please expect a response within 24hrs.
    </div>
    <Link :href="route('index')"> <button
        class="bg-gray-700 hover:bg-[#0166B1] text-white font-semibold py-2 px-4 rounded">
        Home
    </button></Link>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>