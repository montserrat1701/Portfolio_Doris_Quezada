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
              <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                About Me
              </h2>
              <P class="mb-4 text-accent">Student of Engineering in computer systems</P>
              <hr class="mb-8 opacity-90 dark:opacity-5" />
              <p class="mb-8">
                I am a systems engineering student with a strong technical background in graphic 
                design. My technical skills range from programming languages to creating visual 
                content using graphic design tools. I have had the opportunity to work on school 
                software development projects and have also implemented my graphic design foundations 
                in different projects. <br />
                <br />
                My goal is to continue learning new knowledge about different 
                technologies and languages, and I am very excited to explore 
                opportunities that allow me to integrate my technical and 
                creative skills.
              </p>
            </div>
            <a href="#contact" class="btn btn-md bg-accent text-light-tail-100">
              Contact me
            </a>
          </div>
        </div>
      </div>
    </section>
  </template>