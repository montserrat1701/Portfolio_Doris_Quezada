<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <br />
            <br />
            <h1 class="text-3xl lg:text-4xl font-extrabold mb-3 text-teal-800">Hello, {{ $page.props.auth.user.name }}! 👩🏻‍💻</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-light-primary overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="mb-4 text-xl text-gray-900 font-semibold">Edit your home information!</div>
                </div>
            </div>
            <br />
            <div class="flex justify-center items-center h-full pt-8">
                <img class="max-w-full max-h-full rounded-lg w-64 h-64" src="http://portfolio.test/img/editar3.png" alt="home" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>