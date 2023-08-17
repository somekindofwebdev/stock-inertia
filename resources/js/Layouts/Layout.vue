<template>
    <Nav />
    <div class="mx-6">
        <slot />
    </div>
</template>

<script>
    
import Nav from '@/Components/Nav.vue';
    
export default {
    components: { Nav },
};
    
</script>