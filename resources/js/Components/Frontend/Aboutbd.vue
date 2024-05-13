<template>
    <section 
    id="aboutdb" class="section bg-light-primary dark:bg-dark-secondary">
        <div 
        class="container mx-auto"
        v-moniton
        :initial="{ 
            opacity: 0, 
            y: 100 
        }"
        :visible="{
            opacity: 1,
            y: 0
        }">
        <div class="flex flex-col xl:flex-row gap-24">
            <template v-for="about in abouts.data" :key="about.id">
                <div v-if="about.text === 'title 2'">
                    <img class="object-cover h-96 w-full  md:mx-auto lg:mx-0 rounded-2xl" :src="about.image" :alt="about.name"/>
                </div>
            </template>
            <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
                <div class="flex flex-col">
                    <template v-for="about in abouts.data" :key="about.id">
                        <div v-if="about.text === 'title 2'">
                            <h2 class="text-3xl lg:text-4xl font-extrabold mb-3 text-purple-500">
                                {{ about.description }}
                            </h2>
                        </div>
                    </template>
                    <template v-for="about in abouts.data" :key="about.id">
                        <div v-if="about.text == 'title 1'">
                            <p class="mb-4 text-teal-700">
                                {{ about.description }}
                            </p>
                        </div>
                    </template>
                    <hr class="mb-8 opacity-90 dark:opacity-5 " />
                    <template v-for="about in abouts.data" :key="about.id">
                        <div v-if="about.text === 'text 2'">
                            <p class="mb-8 text-gray-500 dark:text-gray-300">
                                {{ about.description }}
                            </p>
                        </div>
                    </template>
                    <template v-for="about in abouts.data" :key="about.id">
                        <div v-if="about.text === 'text 3'">
                            <p class="mb-8 text-gray-500 dark:text-gray-300">
                                {{ about.description }}
                            </p>
                        </div>
                    </template>
                </div>
                <a href="#contactdb" class="btn btn-md bg-teal-700 hover:bg-purple-400 dark:bg-dark-primary text-white rounded-md font-extrabold">
                        Contact me
                </a>
            </div>
        </div>
        </div>
    </section>
</template>

<script setup>
defineProps({
  abouts: Object
});
</script>