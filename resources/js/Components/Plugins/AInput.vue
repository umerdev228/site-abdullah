<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: {
        type: String,
        required: false,
    },
    modelClass: {
        type: String,
        required: true,
    },
    modelType: {
        type: String,
        required: true,
    },
    modelName: {
        type: String,
        required: true,
    },
    modelId: {
        type: String,
        required: false,
    },
    modelPlaceholder: {
        type: String,
        required: false,
    },

    validator: (modelType) => ['button', 'checkbox', 'color',
        'date', 'datetime-local', 'email',
        'file', 'hidden', 'image',
        'month', 'number', 'password',
        'radio', 'range', 'reset',
        'search', 'submit', 'tel',
        'text', 'time', 'url', 'week'
    ].includes(modelType)

});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        :type="modelType"
        :class="modelClass"
        :value="modelValue"
        :placeholder="modelPlaceholder"
        :name="modelName"
        :id="modelId"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
</template>
