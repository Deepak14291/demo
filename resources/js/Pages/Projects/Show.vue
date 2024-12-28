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