<script setup>
import FrontendLayout from '@/Layouts/Frontend.vue';
import { Head, Link } from '@inertiajs/vue3';
import Promote from '@/Components/Frontend/Promote.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import ContactMe from '@/Components/Frontend/ContactMe.vue';
import Extraers from '@/Components/Frontend/Extraer.vue';
import Aboutdb from '@/Components/Frontend/Aboutbd.vue';
import Portfolio2 from '@/Components/Frontend/Portfolio2.vue';
import Servicesdb from '@/Components/Frontend/Servicesdb.vue';
import Promotedb from '@/Components/Frontend/Promotedb.vue';

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
        <Extraers :abouts="abouts"/> 
        <!--<Hero />-->
        <!-- Promote tail-100 -->
        <Promotedb :abouts="abouts" />
        <!-- About secondary -->
        <Aboutdb :abouts="abouts"/>
        <!--<About :abouts="abouts"/>-->
        <!-- Skills tail-100 -->
        <Skills :skills="skills"/>
        <!-- Portfolio primary -->
        <Portfolio2 :abouts="abouts" :skills="skills" :projects="projects" />
        <!-- Services secondary -->
        <Servicesdb :abouts="abouts" />
        <!-- Contact primary -->
        <ContactMe />
        <!-- Extraers primary -->
        <!---->
    </FrontendLayout>
</template>
