<scrip setup>

</scrip>
<template>
  <section
    id="services"
    class="section bg-light-secondary dark:bg-dark-secondary"
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
        <h2 class="section-title font-extrabold">What I do for clients</h2>
        <p class="subtitle text-gray-600 dark:text-gray-300">
          These are some of the branches that offer my services and skills, 
          covering all my knowledge and what I have learned during my stay 
          in social service.
        </p>
      </div>
      <div class="grid lg:grid-cols-4 gap-8">
        <div class="bg-indigo-300 dark:bg-dark-navy-500 p-6 rounded-2xl">
          <div
            class="
              text-indigo-600
              rounded-sm
              w-12
              h-12
              flex
              justify-center
              items-center
              mb-24
              text-[28px]
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-24 w-24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"
              />
            </svg>
          </div>
          <h4 class="text-xl mb-2 text-light-primary font-extrabold">Web Design</h4>
          <p class="text-dark-primary dark:text-gray-300">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
            perferendis volm quibusdam ullam qui dolore.
          </p>
        </div>
        <div class="bg-indigo-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
          <div
            class="
              text-light-tail-500
              rounded-sm
              w-12
              h-12
              flex
              justify-center
              items-center
              mb-24
              text-[28px]
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-24 w-24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
              />
            </svg>
          </div>
          <h4 class="text-xl font-extrabold mb-2">Web Development</h4>
          <p class="text-gray-500 dark:text-gray-300">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
            perferendis volm quibusdam ullam qui dolore.
          </p>
        </div>
        <div class="bg-indigo-300 dark:bg-dark-navy-500 p-6 rounded-2xl">
          <div
            class="
              text-pink-400
              rounded-sm
              w-12
              h-12
              flex
              justify-center
              items-center
              mb-24
              text-[28px]
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-24 w-24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8 6h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm0 0l3 4m5-4l-3 4m0 0l-3-4m3 4V6m0 0l3 4m-3-4l3-4"
              />
            </svg>
          </div>
          <h4 class="text-xl font-extrabold mb-2 text-light-primary">Graphic Design</h4>
          <p class="text-dark-primary dark:text-gray-300">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
            perferendis volm quibusdam ullam qui dolore.
          </p>
        </div>
        <div class="bg-indigo-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
          <div
            class="
              text-purple-500
              rounded-sm
              w-12
              h-12
              flex
              justify-center
              items-center
              mb-24
              text-[28px]
            "
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-24 w-24"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 8h16v8H4zM6 4h12v4H6zM6 16h12v4H6z"
              />
            </svg>
          </div>
          <h4 class="text-xl font-extrabold mb-2">Basic Computers Maintenance</h4>
          <p class="text-gray-500 dark:text-gray-300">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
            perferendis volm quibusdam ullam qui dolore.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>