<template>
    <Nav />
    <div class="mx-10">
        <slot />
    </div>
</template>

<script>
    
import Nav from '@/Components/Nav.vue';
    
export default {
    components: { Nav },
};
    
</script>