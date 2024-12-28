<template>
    <div class="mt-10 grid grid-cols-12 text-sm font-semibold">
        <div class="col-start-6 col-end-8 col-span-2">
            Edit a project
        </div>
    </div>
    <form @submit.prevent="update">
        <div class="col-start-5 col-end-9 col-span-4 text-red-500" v-if="form.errors.project_name">
            {{ form.errors.project_name }}
        </div>
        <div class="col-start-5 col-end-9 col-span-4 text-red-500" v-if="form.errors.project_name">
            {{ form.errors.project_name }}
        </div>
        <div class="mt-10 grid grid-cols-12 gap-4 text-sm font-semibold">
            <div class="col-start-4 col-end-6 col-span-2 content-center">
                <label for="project_name">Project Name</label>
            </div>
            <div class="col-start-6 col-end-9 col-span-3">
                <input id="project_name" type="text" v-model="form.project_name" class="text-sm" />
            </div>
            <div class="col-start-4 col-end-6 col-span-2 content-center">
                <label for="project_short_description">Project Short Description</label>
            </div>
            <div class="col-start-6 col-end-9 col-span-3">
                <textarea id="project_short_description" v-model="form.project_short_description" class="text-sm" />
            </div>
            <div class="mt-4 col-start-6 col-end-8 col-span-2">
                <button type="submit" class="bg-gray-700 hover:bg-[#0166B1] text-white font-semibold py-2 px-4 rounded">
                    Update project
                </button>
            </div>
        </div>
    </form>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    project: Object
})

const form = useForm({
    project_name: props.project.project_name,
    project_short_description: props.project.project_short_description

})

const update = () => form.put(`/project/${props.project.id}`)
</script>

<script>
import AdminNavBar from '@/Layouts/AdminNavBar.vue';
export default {
    layout: AdminNavBar
}
</script>
