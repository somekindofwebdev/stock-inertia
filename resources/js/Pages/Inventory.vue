<template>
    <Layout>
        <header>Inventory</header>
        <p>{{ animal }}</p>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/Layout.vue';

export default {
    layout: Layout,
    props: {
        animal: String
    }
};

</script>