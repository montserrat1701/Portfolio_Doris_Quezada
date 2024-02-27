<script setup>
defineProps({
  abouts: Object,
});
</script>

<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
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
        <div class="flex flex-col xl:flex-row gap-24">
          <img
            class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
            src="http://portfolio.test/img/about.jpg"
            alt="about"
          />
          <div
            class="
              flex flex-col
              items-center
              text-center
              lg:items-start lg:text-left
            "
          >
            <div class="flex flex-col">
              <h2 class="text-3xl lg:text-4xl font-extrabold mb-3">
                About Me
              </h2>
              <P class="mb-4 text-indigo-300">Student of Computer Systems Engineering</P>
              <hr class="mb-8 opacity-90 dark:opacity-5" />
              <p class="mb-8 text-gray-500 dark:text-gray-300">
                I´m a systems engineering student with a strong technical background in graphic 
                design. My technical skills range from programming languages to creating visual 
                content using graphic design tools. I have had the opportunity to work on school 
                software development projects and have also implemented my graphic design foundations 
                in different projects. <br />
                <br />
                Also, i'm a novice frontend developer eager to expand my experience and in frontend
                technologies. My goal is to enhance my skills and deepen my understanding of frontend 
                development frameworks, and best practices. I'm very excited to exploring new 
                technologies and embracing challenges to grow as a frontend developer.
              </p>
            </div>
            <a href="#contact" class="btn btn-md bg-indigo-300 hover:bg-indigo-500 dark:bg-dark-primary text-white rounded-md font-extrabold">
              Contact me
            </a>
          </div>
        </div>
      </div>
    </section>
  </template>