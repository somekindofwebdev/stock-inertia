<template>
    <ul class="flex bg-slate-800 text-slate-100">
        <li v-for="(url, text) in links" class="mx-10 my-4 font-sans hover:font-semibold">
            <Link :href="url">{{ text }}</Link>
        </li>
    </ul>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
    components: { Link },
    data() {
        return {
            links: {
                'Animals': 'animals',
                'Births': 'births',
                'Deaths': 'deaths',
                'Movements': 'movements',
                'Tags': 'tags',
                'Inventory': 'inventory',
            }
        }
    }
};
</script>