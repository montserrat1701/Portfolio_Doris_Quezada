<template>
    <section
    id="servicesdb"
    class="section bg-light-primary dark:bg-dark-secondary"
    >
        <div 
        class="container mx-auto"
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :visible="{
            opacity: 1,
            y: 0,
        }"
        >
            <div class="flex flex-col items-center text-center">
                <div  v-for="about in abouts.data" :key="about.id">
                    <template v-if="about.text === 'title 4'">
                        <h2 class="section-title font-extrabold text-teal-800">
                            {{ about.description }}
                        </h2>
                    </template>
                    <template v-if="about.text === 'text 5'">
                        <p class="subtitle text-gray-800 dark:text-gray-300">
                            {{ about.description }}
                        </p>   
                    </template>
                </div>
            </div>
            <div class="grid lg:grid-cols-4 gap-8">
                <div class="bg-purple-400 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="rounded-sm flex justify-center items-center mb-24">
                        <div v-for="about in abouts.data" :key="about.id"> 
                            <template v-if="about.text == 'title 5'">
                                <img 
                                    class="mr-3 h-12 sm:h-12 rounded-xl" 
                                    :src="about.image" 
                                    :alt="about.name"
                                    style="width: 200px; height: 150px"
                                />
                            </template>
                        </div>
                    </div>
                    <div v-for="about in abouts.data" :key="about.id"><!-- abouts -->
                        <template v-if="about.text === 'title 5'"><!-- sacar el texto especifico -->
                            <h4 class="text-xl mb-2 text-light-primary font-extrabold">
                                {{ about.description }} 
                            </h4>
                        </template>
                        <template v-if="about.text === 'text 6'"><!-- sacar el texto especifico -->
                            <p class="text-dark-primary dark:text-gray-300">
                                {{ about.description }}
                            </p>
                        </template>
                    </div>
                </div>
                <div class="bg-purple-200 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="rounded-sm flex justify-center items-center mb-24">
                        <div v-for="about in abouts.data" :key="about.id"> 
                            <template v-if="about.text == 'title 6'">
                                <img 
                                    class="mr-3 h-12 sm:h-12 rounded-xl" 
                                    :src="about.image" 
                                    :alt="about.name"
                                    style="width: 200px; height: 150px"
                                />
                            </template>
                        </div>
                    </div>
                    <div v-for="about in abouts.data" :key="about.id"><!-- abouts -->
                        <template v-if="about.text === 'title 6'"><!-- sacar el texto especifico -->
                            <h4 class="text-xl mb-2 font-extrabold">
                                {{ about.description }} 
                            </h4>
                        </template>
                        <template v-if="about.text === 'text 7'"><!-- sacar el texto especifico -->
                            <p class="text-gray-500 dark:text-gray-300">
                                {{ about.description }}
                            </p>
                        </template>
                    </div>
                </div>
                <div class="bg-purple-400 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="rounded-sm flex justify-center items-center mb-24">
                        <div v-for="about in abouts.data" :key="about.id"> 
                            <template v-if="about.text == 'title 7'">
                                <img 
                                    class="mr-3 h-12 sm:h-12 rounded-xl" 
                                    :src="about.image" 
                                    :alt="about.name"
                                    style="width: 200px; height: 150px"
                                />
                            </template>
                        </div>
                    </div>
                    <div v-for="about in abouts.data" :key="about.id">
                        <template v-if="about.text === 'title 7'">
                            <h4 class="text-xl font-extrabold mb-2 text-light-primary">
                                {{ about.description }} 
                            </h4>
                        </template>
                        <template v-if="about.text === 'text 8'">
                            <p class="text-dark-primary dark:text-gray-300">
                                {{ about.description }}
                            </p>
                        </template>
                    </div>
                </div>
                <div class="bg-purple-200 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="rounded-sm flex justify-center items-center mb-24">
                        <div v-for="about in abouts.data" :key="about.id"> 
                            <template v-if="about.text == 'title 8'">
                                <img 
                                    class="mr-3 h-12 sm:h-12 rounded-xl" 
                                    :src="about.image" 
                                    :alt="about.name"
                                    style="width: 200px; height: 150px"
                                />
                            </template>
                        </div>
                    </div>
                    <div v-for="about in abouts.data" :key="about.id">
                        <template v-if="about.text === 'title 8'">
                            <h4 class="text-xl font-extrabold mb-2">
                                {{ about.description }} 
                            </h4>
                        </template>
                        <template v-if="about.text === 'text 9'">
                            <p class="text-gray-500 dark:text-gray-300">
                                {{ about.description }}
                            </p>
                        </template>
                    </div>
                </div>
            </div> <!-- grid -->
        </div>

    </section>
</template>


<script setup>
defineProps({
    abouts: Object
});
</script>