<template>
    <header class="font-bold text-xl">Animals</header>
    <p>{{ animal }}</p>
</template>

<script>
    
export default {
    props: {
        animal: String
    }
};

</script>