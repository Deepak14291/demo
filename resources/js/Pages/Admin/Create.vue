<template>
    <div> Add a new project</div>
    <form @submit.prevent="create">
        <div class="col-start-5 col-end-9 col-span-4 text-red-500" v-if="form.errors.project_name">
            {{ form.errors.project_name }}
        </div>
        <div class="col-start-5 col-end-9 col-span-4 text-red-500" v-if="form.errors.project_name">
            {{ form.errors.project_name }}
        </div>
        <div class="mt-10 grid grid-cols-12 gap-4">
            <div class="col-start-4 col-end-6 col-span-2">
                <label for="project_name">Project Name</label>
            </div>
            <div class="col-start-6 col-end-9 col-span-3">
                <input id="project_name" type="text" v-model="form.project_name" />
            </div>
            <div class="col-start-4 col-end-6 col-span-2">
                <label for="project_short_description">Project Short Description</label>
            </div>
            <div class="col-start-6 col-end-9 col-span-3">
                <textarea id="project_short_description" v-model="form.project_short_description" />
            </div>
            <div class="mt-4 col-start-6 col-end-8 col-span-2">
                <button type="submit" class="bg-gray-700 hover:bg-[#0166B1] text-white font-semibold py-2 px-4 rounded">
                    Add new project
                </button>
            </div>
        </div>
    </form>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    project_name: null,
    project_short_description: null
})

const create = () => form.post('/project')
</script>

<script>
import AdminNavBar from '@/Layouts/AdminNavBar.vue';
export default {
    layout: AdminNavBar
}
</script>
