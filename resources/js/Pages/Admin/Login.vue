<template>
    <div class="mt-10 text-sm custom-font font-bold">
        <div class="mt-10 grid grid-cols-12">
            <div class="col-start-6 col-end-8 col-span-2">
                Hello, Welcome!
            </div>
        </div>
        <div v-if="user" class="grid grid-cols-12">
            <div class="mt-4 col-start-6 col-end-8 col-span-2">You are logged in.</div>
        </div>

        <div v-else class="text-sm">
            <form @submit.prevent="login">
                <div class="col-start-5 col-end-9 col-span-4 text-red-500" v-if="form.errors.name">
                    {{ form.errors.name }}
                </div>
                <div class="col-start-5 col-end-9 col-span-4 text-red-500" v-if="form.errors.password">
                    {{ form.errors.password }}
                </div>
                <div class="mt-10 grid grid-cols-12 gap-4">
                    <div class="col-start-4 col-end-6 col-span-2 content-center">
                        <label for="name">Username</label>
                    </div>
                    <div class="col-start-6 col-end-9 col-span-3">
                        <input id="name" type="text" v-model="form.name" class="text-sm font-extrabold" />
                    </div>
                    <div class="col-start-4 col-end-6 col-span-2 content-center">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-start-6 col-end-9 col-span-3">
                        <input id="password" type="password" v-model="form.password" class="text-sm font-extrabold" />
                    </div>
                    <div class="mt-4 col-start-6 col-end-8 col-span-2">
                        <button class="bg-gray-700 hover:bg-[#0166B1] text-white font-semibold py-2 px-4 rounded">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script setup>
import { useForm, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const form = useForm({
    name: null,
    password: null,
})

const login = () => form.post(route('login.store'))

const page = usePage()

const user = computed(
    () => page.props.user
)

</script>

<script>
import AdminNavBar from '@/Layouts/AdminNavBar.vue';
export default {
    layout: AdminNavBar
}
</script>
