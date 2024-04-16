<template>
    <div class="bg-teal-600 dark:bg-dark-navy-500">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-light-tail-500 dark:text-dark-navy-100 sm:text-4xl">
                <div v-for="about in abouts.data" :key="about.id">
                    <div v-if="about.text === 'title 9'">
                        <span class="block text-purple-300">{{ about.description }}</span>
                    </div>
                    <div v-if="about.text === 'text 10'">
                        <span class="block text-white dark:text-white">{{ about.description }}</span>
                    </div>
                </div>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a
                        href="https://github.com/montserrat1701"
                        class="
                            inline-flex
                            items-center
                            justify-center
                            rounded-md
                            border border-transparent
                            bg-purple-400
                            dark:bg-dark-secondary
                            px-5
                            py-3
                            text-base
                            font-extrabold
                            text-white
                            dark:text-white
                            hover:bg-purple-300
                            dark:hover:bg-dark-primary
                        "
                    >Go to GitHub</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    abouts: Object
});
</script>