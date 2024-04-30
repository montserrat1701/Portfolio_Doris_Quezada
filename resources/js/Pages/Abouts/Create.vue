<template>
    <Head title="New About" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <br />
            <h2 class="font-semibold text-xl text-purple-500 leading-tight">
                NEW ABOUT
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white rounded-xl">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="project_id" value="Project" class="font-semibold text-gary-800" />
                        <select 
                        v-model="form.project_id" 
                        id="project_id" 
                        name="project_id"
                        class="mt-1 
                            block
                            w-full
                            pl-3
                            pr-10
                            py-2
                            text-base
                            border-gray-300
                            text-gray-500
                            focus:outline-none focus:ring-purple-500 focus:border-purple-500
                            sm:text-sm
                            rounded-md">
                            <option v-for="project in projects" :key="project.id" :value="project.id">{{ project.name }}</option>
                        </select>
                        <InputError class="mt-2" :message="form.errors.project_id" />
                    </div>
                    <div>
                        <br />
                        <InputLabel for="text" value="Text" class="font-semibold text-gary-800"/>

                        <TextInput
                            id="text"
                            type="text"
                            class="mt-1 block w-full text-gray-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                            v-model="form.text"
                            autofocus
                            autocomplete="text"
                        />

                        <InputError class="mt-2" :message="form.errors.text" />
                    </div>

                    <div>
                        <br />
                        <InputLabel for="description" value="Description" class="font-semibold text-gray-800"/>

                        <TextInput
                            id="description"
                            type="text"
                            class="mt-1 block w-full rounded-md text-gray-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                            v-model="form.description"
                            autocomplete="description"
                        />

                        <InputError class="mt-2" :message="form.errors.description" />
                    </div>


                    <div class="mt-2">
                        <br />
                        <InputLabel for="image" value="Image" class="font-semibold text-gray-800" />

                        <TextInput
                            id="image"
                            type="file"
                            class="mt-1 block w-full text-gray-500"
                            @input="form.image = $event.target.files[0]"
                        />

                        <InputError class="mt-2" :message="form.errors.image" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ms-4 bg-teal-700 hover:bg-purple-500" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            ADD
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    projects: Array
})

const form = useForm({
    text: "",
    image: null,
    project_id: "",
    description: ""
});

const submit = () => {
    form.post(route('abouts.store'));
};
</script>