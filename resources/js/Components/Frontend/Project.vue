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
       group-hover:text-pink-300
        text-2xl
        font-semibold
        text-indigo-400
        capitalize
        mb-3
      "
      >{{ project.name }}</span
    >
    <h3
      class="
      group-hover:text-pink-300
        capitalize
        text-gray-500 text-sm
        mb-3
      "
    >
      {{ project.description }}
    </h3>
  </Link>
</template>