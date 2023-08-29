<template>
    <header class="font-bold text-xl">Animals</header>
    <table>
        <thead>
            <tr>
                <th class="p-4">ID</th>
                <th class="p-4">Date of Identification</th>
                <th class="p-4">Genotype</th>
                <th class="p-4">Breed</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="animal in animals">
                <td class="p-4">{{ animal.id }}</td>
                <td class="p-4" v-if="editing == animal.id"><input v-model="animal.date_of_identification"></td>
                <td class="p-4" v-else>{{ animal.date_of_identification }}</td>
                <td class="p-4" v-if="editing == animal.id"><input v-model="animal.genotype"></td>
                <td class="p-4" v-else>{{ animal.genotype }}</td>
                <td class="p-4" v-if="editing == animal.id"><input v-model="animal.breed"></td>
                <td class="p-4" v-else>{{ animal.breed }}</td>
                <td class="p-4" v-if="editing == animal.id"><button @click="commit">Done</button></td>
                <td class="p-4" v-else @click="editing = animal.id">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    
export default {
    props: {
        animals: Array,
        editing: Number
    },
    methods: {
        async commit() {
            alert('Working');
        }
    }
};

</script>
