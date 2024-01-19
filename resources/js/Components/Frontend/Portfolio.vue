<script setup>
import Projects from "./Projects.vue";
defineProps({
  skills: Object,
  projects: Object,
});

</script>
<template>
  <section
    id="portfolio"
    class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
  >
    <div
      class="container mx-auto">
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title">My latest work</h2>
        <p class="subtitle">
          Here are my latest school projects on which I have been working. Some of 
          them involve various frameworks, programming languages and technologies.
        </p>
      </div>
    </div>
    <Projects :skills="skills" :projects="projects" />
  </section>
</template>