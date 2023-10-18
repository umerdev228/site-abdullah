<script setup>

defineProps({
    modelValue: {
        type: String,
        required: true,
    },
    modelClass: {
        type: String,
        required: false,
        default: null,
    },
    modelLink: {
        type: String,
        required: true,
        default: 'javascript:void(0)',
    },
    modelTarget: {
        type: String,
        required: false,
        default: '_blank', //_blank|_self|_parent|_top|framename
    },
});

</script>

<template>
    <a v-if="modelValue" :href="modelLink" :class="modelClass" :target="modelTarget">{{modelValue}}</a>
    <a v-else :href="modelLink" :class="modelClass" :target="modelTarget"><slot/></a>
</template>
