<template>
    <Head title="Skills Index" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <br />
            <h2 class="font-semibold text-xl text-teal-800 leading-tight">
                EDIT YOUR SKILLS
            </h2>
        </template>

        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="flex justify-end m-2 p-2">
                    <Link 
                        href="/skills/create" 
                        class="
                            px-4 
                            py-2 
                            bg-purple-500
                            dark:bg-gray-700
                            hover:bg-teal-800 
                            text-white 
                            font-extrabold
                            rounded-md
                        "
                        >New Skill</Link>
               </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-teal-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    NAME
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    IMAGE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="skill in skills.data" :key="skill.id"
                            class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ skill.id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ skill.name }}
                                </td>
                                <td class="px-6 py-4">
                                    <img :src="skill.image" class="w-12 h-12 rounded-full"/>
                                </td>
                                <td class="px-6 py-4">
                                    <Link 
                                        :href="route('skills.edit', skill.id)" 
                                        class="font-medium text-blue-500 hover:text-blue-700 mr-2"
                                        >Edit</Link
                                    >
                                    <Link 
                                        :href="route('skills.destroy', skill.id)" 
                                        method="delete"
                                        as="button"
                                        type="button"
                                        class="font-medium text-red-500 hover:text-red-700 mr-2"
                                        >Delete</Link
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    skills: Object,
});
</script>