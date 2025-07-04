<template>

    <div class="h-full w-full border-r-4 border-solid border-indigo-700 bg-slate-800">
        <ul>
            <li v-for="(url, text) in links" class="px-10 py-4 font-sans hover:font-semibold size-full">
                <Link :href="url">{{ text }}</Link>
            </li>
        </ul>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
    components: { Link },
    data() {
        return {
            links: {
                'Add': 'add',
            }
        }
    }
};
</script>
