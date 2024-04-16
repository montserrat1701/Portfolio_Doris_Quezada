<script setup>
import { Link } from "@inertiajs/inertia-vue3";
defineProps({
  project: Object,
});
</script>
<template>
  <Link
    :href="project.project_url"
    class="group flex flex-col items-center text-center cursor-pointer"
    v-motion
    :initial="{
      opacity: 0,
      y: 100,
    }"
    :enter="{
      opacity: 1,
      y: 0,
    }"
  >
    <div class="mb-6">
      <img class="rounded-2xl h-56" :src="project.image" :alt="project.name" />
    </div>
    <span
      class="
       group-hover:text-purple-800
        text-2xl
        font-semibold
        text-teal-800
        capitalize
        mb-3
      "
      >{{ project.name }}</span
    >
    <h3
      class="
      group-hover:text-purple-500
        capitalize
        text-teal-700 text-sm
        mb-3
      "
    >
      {{ project.description }}
    </h3>
  </Link>
</template>