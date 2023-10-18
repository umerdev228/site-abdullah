<script setup>
defineProps({
    modelClass: {
        type: String,
        required: false,
        default: null,
    },
    modelName: {
        type: String,
        required: true,
    },
    modelId: {
        type: String,
        required: true,
    },
    modelOptions: {
        type: Array,
        required: true,
    },
});

</script>

<template>
    <select :class="modelClass" :name="modelName" :id="modelName">
        <option v-for="opt in modelOptions" :value="opt.id">{{ opt.label }}</option>
    </select>
</template>

<style scoped>

</style>
