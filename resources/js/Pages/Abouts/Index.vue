<template>
    <Head title="Abouts Index" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Information
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link 
                        href="/abouts/create" 
                        class="
                            px-4 
                            py-2 
                            bg-indigo-500 
                            hover:bg-indigo-700 
                            text-white 
                            rounded-md
                        "
                        >New About</Link>
               </div>
            </div>

            <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    TEXT
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    DESCRIPTION
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    IMAGE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="about in abouts.data" :key="about.id"
                            class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ about.id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ about.text }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ about.description }}
                                </td>
                                <td class="px-6 py-4">
                                    <img :src="about.image" class="w-12 h-12 rounded-full"/>
                                </td>
                                <td class="px-6 py-4">
                                    <Link 
                                        :href="route('abouts.edit', about.id)" 
                                        class="font-medium text-blue-500 hover:text-blue-700 mr-2"
                                        >Edit</Link
                                    >
                                    <Link 
                                        :href="route('abouts.destroy', about.id)" 
                                        method="delete"
                                        as="button"
                                        type="button"
                                        class="font-medium text-red-500 hover:text-red-700 mr-2"
                                        >Delete</Link
                                    >
                                </td>

                                <td class="px-6 py-4">
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    abouts: Object,
});
</script>