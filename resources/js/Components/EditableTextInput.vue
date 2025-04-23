<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: {
        type: String,
        required: true,
    },
});

defineEmits(['update:modelValue']);

const input = ref(null);
const editing = ref(false);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

function editValue () {
    editing.value = true;
}

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <span v-if="!editing">{{ modelValue }}</span>
    <input
        v-if="editing"
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        :value="modelValue"
        :placeholder="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        @click="editValue"
        ref="input"
    />
</template>
