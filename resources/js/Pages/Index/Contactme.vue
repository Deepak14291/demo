<template>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet" />

    <div class="mt-12 grid grid-cols-12 custom-font">
        <div class="col-start-3 col-end-6 col-span-2 font-extrabold text-2xl">
            Contact me
        </div>
    </div>

    <div class="mt-10 text-sm custom-font font-bold">
        <form @submit.prevent="contactmesubmitted">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-start-3 col-end-5 col-span-2">
                    <label for="name">Name</label>
                </div>
                <div class="col-start-5 col-end-8 col-span-3">
                    <input id="name" type="text" v-model="form.name" class="text-sm" />
                </div>
                <div class="col-start-3 col-end-5 col-span-2">
                    <label for="email">Email address</label>
                </div>
                <div class="col-start-5 col-end-8 col-span-3">
                    <input id="email" type="text" v-model="form.email" class="text-sm" />
                </div>
                <div class="col-start-3 col-end-5 col-span-2">
                    <label for="message">Message</label>
                </div>
                <div class="col-start-5 col-end-8 col-span-3">
                    <textarea id="message" row="30" cols="30" v-model="form.message" class="text-sm" />
                </div>
                <div class="mt-4 justify-items-center col-start-5 col-end-7 col-span-3">
                    <div>
                        <button class="bg-gray-700 hover:bg-[#0166B1] text-white font-semibold py-2 px-4 rounded">
                            Send
                            message
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div class="mt-3 justify-items-center custom-font font-bold text-sm grid grid-cols-12 text-gray-400">
        <div class="col-start-5 col-end-7 col-span-2">or</div>
    </div>

    <div class="mt-3 custom-font font-bold text-sm grid grid-cols-12 text-gray-400 ">
        <div class="col-start-5 col-end-8 col-span-3">

            <a href="mailto:deepak.kodi@icloud.com" class="hover:text-[#0166B1]">Contact using your default email
                client</a>
        </div>
    </div>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/vue3'

const form = useForm({
    name: null,
    email: null,
    message: null
})

const contactmesubmitted = () => form.post('/contactmesubmitted')

</script>