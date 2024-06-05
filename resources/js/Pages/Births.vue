<template>
    <header class="font-bold text-xl">Births</header>
    <p>{{ animal }}</p>
</template>

<script>
    
export default {
    props: {
        animal: String
    }
};

</script>