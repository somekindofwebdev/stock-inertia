<template>
    <Nav class="h-[56px]"/>
    <div class="flex h-[calc(100vh-56px)]">
        <Sidebar class="w-[10vw] h-full" />
        <div class="mx-10 w-[90vw] h-full overflow-scroll">
            <slot />
        </div>
    </div>
</template>

<script setup>

import Nav from '@/Components/Nav.vue';
import Sidebar from '@/Components/Sidebar.vue';

</script>
