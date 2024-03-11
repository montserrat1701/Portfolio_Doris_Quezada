<script setup>
import FrontendLayout from '@/Layouts/Frontend.vue';
import { Head, Link } from '@inertiajs/vue3';
import Hero from '@/Components/Frontend/Hero.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';
import Services from '@/Components/Frontend/Services.vue';
import ContactMe from '@/Components/Frontend/ContactMe.vue';
import Extraers from '@/Components/Frontend/Extraer.vue';

defineProps({
    skills: Object,
    projects: Object,
    abouts: Object,
});

</script>

<template>
    <Head title="Doris Quezada | Graphic Designer & Student" />
    <FrontendLayout>
        <!-- Hero primary -->
        <Hero />
        <!-- Promote tail-100 -->
        <Promote />
        <!-- About secondary -->
        <About :abouts="abouts"/>
        <!-- Skills tail-100 -->
        <Skills :skills="skills"/>
        <!-- Portfolio primary -->
        <Portfolio :skills="skills" :projects="projects" />
        <!-- Services secondary -->
        <Services />
        <!-- Contact primary -->
        <ContactMe />
        <!-- Extraers primary -->
        <Extraers :abouts="abouts"/> 
    </FrontendLayout>
</template>
