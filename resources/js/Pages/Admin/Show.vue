<template>
    <div>
        {{ project.project_name }} ,
        {{ project.project_short_description }}
    </div>
</template>
<script setup>
defineProps({
    project: Object
})
</script>

<script>
import AdminNavBar from '@/Layouts/AdminNavBar.vue';
export default {
    layout: AdminNavBar
}
</script>
