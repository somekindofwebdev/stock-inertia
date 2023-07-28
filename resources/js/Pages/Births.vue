<template>
    <Layout>
        <header>Births</header>
        <p>{{ animal }}</p>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/Layout.vue';
    
export default {
    components: { Layout },
    props: {
        animal: String
    }
};

</script>