<script setup>
defineProps({
    modelValue: {
        type: String,
    },
    modelClass: {
        type: String,
    },
    modelFor: {
        type: String,
    },
});
</script>

<template>
    <label :class="modelClass" :for="modelFor">
        <span v-if="modelValue">{{ modelValue }}</span>
        <span v-else><slot /></span>
    </label>
</template>
