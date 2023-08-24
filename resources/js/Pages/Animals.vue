<template>
    <header class="font-bold text-xl">Animals</header>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date of Identification</th>
                <th>Genotype</th>
                <th>Breed</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="animal in animals">
                <td>{{ animal.id }}</td>
                <td>{{ animal.date_of_identification }}</td>
                <td>{{ animal.genotype }}</td>
                <td>{{ animal.breed }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    
export default {
    props: {
        animals: Array
    }
};

</script>