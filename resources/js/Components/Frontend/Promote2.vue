<template>
    <div class="bg-teal-600 dark:bg-dark-navy-500">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-light-tail-500 dark:text-dark-navy-100 sm:text-4xl">
                <div v-for="about in abouts.data" :key="about.id">
                    <div v-if="about.text === 'title 13'">
                        <span class="block text-purple-800">{{ about.description }}</span>
                    </div>
                </div>
            </h2>
        </div>
    </div>
</template>

<script setup>
defineProps({
    abouts: Object
});
</script>