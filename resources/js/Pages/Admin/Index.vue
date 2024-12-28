<template>
    <div class="mt-5 container mx-auto custom-font">
        <div class="grid grid-cols-2 gap-4 justify-items-center">
            <div class="mt-6" v-for="project in projects" :key="project.id">
                <img src="/build/assets/images/project_images/project_1/sample1.jpg" alt="" width="400" height="400" />
                <div class="mt-4 font-extrabold text-2xl">{{ project.project_name }}</div>
                <div class="mt-4 text-sm">
                    {{ project.project_short_description }}
                </div>
                <div class="flex justify-around">
                    <div class="mt-4 font-bold text-sm">
                        <Link :href="route('project.show', { project: project.id })">VIEW</Link>
                    </div>
                    <div class="mt-4 font-bold text-sm">
                        <Link :href="route('project.edit', { project: project.id })">EDIT </Link>
                    </div>
                    <div class="mt-4 font-bold text-sm">
                        <Link :href="route('project.destroy', { project: project.id })" method="DELETE" as="button">
                        DELETE</Link>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    projects: Array
})
</script>

<script>
import AdminNavBar from '@/Layouts/AdminNavBar.vue';
export default {
    layout: AdminNavBar
}
</script>
