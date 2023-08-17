<template>
    <header class="font-bold text-xl">Inventory</header>
    <p>{{ animal }}</p>
</template>

<script>

export default {
    props: {
        animal: String
    }
};

</script>