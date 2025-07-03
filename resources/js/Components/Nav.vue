<template>
    <ul class="flex bg-slate-900 justify-around">
        <li class="size-full">Logo</li>
        <li v-for="(url, text) in links" class="px-10 py-4 font-sans hover:font-semibold size-full">
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
