<template>
    <ul>
        <li><Link href="/births">Births</Link></li>
        <li><Link href="/deaths">Deaths</Link></li>
        <li><Link href="/movements">Movements</Link></li>
        <li><Link href="/tags">Tags</Link></li>
        <li><Link href="/inventory">Inventory</Link></li>
        
    </ul>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
    components: { Link },
};
</script>