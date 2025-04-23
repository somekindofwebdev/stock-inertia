<template>
    <header class="font-bold text-xl">Animals</header>
    <table>
        <thead>
            <tr>
                <th class="p-4">ID</th>
                <th class="p-4">Date of Identification</th>
                <th class="p-4">Genotype</th>
                <th class="p-4">Breed</th>
                <th class="p-4">Tag No.</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="animal in animals">
                <td class="p-4">{{ animal.id }}</td>
                <td class="p-4"></td>
                <td class="p-4">{{ animal.breed.genotype.genotype }}</td>
                <td class="p-4">{{ animal.breed.breed }}</td>
                <td class="p-4">{{ animal.tag.tag_no }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>

import TextInput from '../Components/TextInput.vue';

const props = defineProps({
        animals: Array,
        editing: Number
    });

function saveRow() {
    this.editing = null;
}

</script>
