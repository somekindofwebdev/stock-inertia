<template>
    <Nav />
    <slot />
</template>

<script>
    
import Nav from '@/Components/Nav.vue';
    
export default {
    components: { Nav },
};
    
</script>