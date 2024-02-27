<template>
  <div class="bg-pink-100 dark:bg-dark-navy-500">
    <div class="container mx-auto py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div v-for="about in abouts.data" :key="about.id">
          <template v-if="about.text === 'text 1'">
            <div class="flex items-center justify-center">
              <button class="px-4 py-2 bg-black text-white rounded-md hover:bg-gray-800">
                {{ about.text }}
              </button>
            </div>
          </template>
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