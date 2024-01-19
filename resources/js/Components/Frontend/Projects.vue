<script setup>
import Project from "./Project.vue";
import { ref } from "vue";
defineProps({
  skills: Object,
  projects: Object,
});
/*
const filteredProjects = ref(props.projects.data);
const selectedSkill = ref("all");

const filterProjects = (id) => {
  if (id === "all") {
    filteredProjects.value = props.projects.data;
    selectedSkill.value = id;
  } else {
    filteredProjects.value = props.projects.data.filter((project) => {
      return project.skill.id === id;
    });
    selectedSkill.value = id;
  }

  @click="filterProjects('all')" va a bajo de button
};*/
</script>
<template>
  <div class="container mx-auto">
    <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
      <ul class="flex flex-col lg:flex-row justify-evenly items-center">
        <li class="cursor-pointer capitalize m-4">
          <button
            
            class="
              flex
              text-center
              px-4
              py-2
              hover:bg-light-tail-500
              dark:text-dark-navy-100
            "
          >
            All
          </button>
        </li>
        <li
          class="cursor-pointer capitalize m-4"
          v-for="projectSkill in skills.data"
          :key="projectSkill.id"
        >
          <button
            class="
            flex
              text-center
              px-4
              py-2
              hover:bg-light-tail-500
              dark:text-dark-navy-100
            "
          >
            {{ projectSkill.name }}
          </button>
        </li>
      </ul>
    </nav>
  </div>
</template>