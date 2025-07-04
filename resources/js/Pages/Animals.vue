<template>
    <header class="font-bold text-xl my-6 text-center">Animals</header>
    <table class="mx-auto mt-8 border-separate border-spacing-0 overflow-hidden border-4 border-solid border-indigo-600 bg-slate-700 rounded-xl w-3/4 text-center">
        <thead>
            <tr class="bg-slate-900">
                <th class="p-4">ID</th>
                <th class="p-4">Date of Identification</th>
                <th class="p-4">Genotype</th>
                <th class="p-4">Breed</th>
                <th class="p-4">Tag No.</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="animal in animals" class=" hover:bg-slate-700">
                <td class="p-4">{{ animal.id }}</td>
                <td class="p-4">{{ animal.identification_date }}</td>
                <td class="p-4"><EditableTextInput v-model="animal.breed.genotype.genotype" /></td>
                <td class="p-4">{{ animal.breed.breed }}</td>
                <td class="p-4">{{ animal.tag.tag_no }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>

import EditableTextInput from '../Components/EditableTextInput.vue';

const props = defineProps({
        animals: Array,
    });

function saveTable() {
    console.log('This is where we write to the db');
}

</script>
