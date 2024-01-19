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
                Soy estudiante de ingeniería en sistemas con una solida formación técnica 
                en diseño gráfico. 
                Mis habilidades técnicas abarcan desde lenguajes de programación hasta la 
                creación de contenido visual utilizando herramientas de diseño gráfico.
                He tenido la oportunidad de trabajar en proyectos escolares de desarrollo 
                de software y también he implementado mis bases de diseño gráfico en distintos
                proyectos. <br />
                <br />
                Mi objetivo es seguir aprendiendo de nuevos conocimientos 
                acerca de distintas tecnologías y lenguajes, y estoy muy 
                emocionada por explorar oportunidades que me permitan 
                integrar mis habilidades técnicas y creativas.
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