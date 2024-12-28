<template>
    <div class="mt-10 container mx-auto">
        <div class="grid grid-cols-2 gap-4 justify-items-center mulish-font">
            <div class="mt-6" v-for="project in projects" :key="project.id">
                <img src="/build/assets/images/project_images/project_1/sample1.jpg" width="400" height="400" />
                <div class="mt-4 font-extrabold text-2xl">{{ project.project_name }}</div>
                <div class="mt-4 text-sm">
                    {{ project.project_short_description }}
                </div>
                <div class="mt-4 font-bold text-sm">
                    <Link :href="route('project.show', { project: project.id })">VIEW PROJECT</Link>
                </div>
                <div class="mt-4 font-bold text-sm">
                    <Link :href="route('project.edit', { project: project.id })">EDIT PROJECT</Link>
                </div>
                <div class="mt-4 font-bold text-sm">
                    <Link :href="route('project.destroy', { project: project.id })" method="DELETE" as="button">DELETE
                    PROJECT</Link>
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