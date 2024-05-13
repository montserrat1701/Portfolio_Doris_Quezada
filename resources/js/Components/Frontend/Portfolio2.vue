<template>
  <section
    id="portfoliodb"
    class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
    <div class="container mx-auto">
      <div class="flex flex-col items-center text-center">
        <div v-for="about in abouts.data" :key="about.id">
          <template v-if="about.text === 'title 3'">
            <h2 class="section-title font-extrabold text-purple-800">
              {{ about.description }}
            </h2>
          </template>
          <template v-if="about.text === 'text 4'">
            <p class="subtitle text-gray-800 dark:text-gray-300">
              {{ about.description }}
            </p>
          </template>
        </div>
      </div>
      <Projects :skills="skills" :projects="projects" />
    </div>
  </section>
</template>

<script setup>
import Projects from "./Projects.vue";
defineProps({
  abouts: Object,
  skills: Object,
  projects: Object,
});
</script>