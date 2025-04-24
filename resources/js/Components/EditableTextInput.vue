<script setup>
import { ref, watch, nextTick } from 'vue';

const props = defineProps({
    modelValue: String,
});

const emit = defineEmits(['update:modelValue']);

const editing = ref(false);
const editableValue = ref(props.modelValue);

watch(() => props.modelValue, (newValue) => {
    if (!editing.value) editableValue.value = newValue;
})

const inputRef = ref(null);

function edit () {
    editableValue.value = props.modelValue;
    editing.value = true;
    nextTick(() => {
      inputRef.value?.focus()
    })
}

function save() {
    emit('update:modelValue', editableValue.value);
    editing.value = false;
}

function cancel() {
    editableValue.value = props.modelValue;
    editing.value = false;
}
</script>

<template>
    <span v-if="!editing" @click="edit">{{ modelValue }}</span>
    <input
        v-else
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        v-model="editableValue"
        :placeholder="editableValue"
        @blur="save"
        @keydown.enter="save"
        @keydown.esc="cancel"
        ref="input"
    />
</template>
