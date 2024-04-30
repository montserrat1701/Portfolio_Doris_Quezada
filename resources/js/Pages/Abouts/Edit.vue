<template>
    <Head title="New Information" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <br />
            <h2 class="font-semibold text-xl text-purple-500 leading-tight">
                EDIT INFORMATION
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white rounded-xl">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="project_id" value="Project" class="font-semibold text-gary-800"/>
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
                            focus:outline-none focus:ring-purple-500 focus:border-purple-500
                            sm:text-sm
                            rounded-md
                            text-gray-500">
                            <option v-for="project in projects" :key="project.id" :value="project.id">{{ project.name }}</option>
                            <InputError class="mt-2" :message="$page.props.errors.project_id" />
                        </select>
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

                        <InputError class="mt-2" :message="$page.props.errors.text" />
                    </div>

                    <div>
                        <br />
                        <InputLabel for="description" value="Description" class="font-semibold text-gary-800"/>

                        <TextInput
                            id="description"
                            type="text"
                            class="mt-1 block w-full rounded-md text-gray-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                            v-model="form.description"
                            autocomplete="description"
                        />

                        <InputError class="mt-2" :message="$page.props.errors.description" />
                    </div>

                    <div class="mt-2">
                        <br />
                        <InputLabel for="image" value="Image" class="font-semibold text-gary-800"/>

                        <TextInput
                            id="image"
                            type="file"
                            class="mt-1 block w-full text-gray-500"
                            @input="form.image = $event.target.files[0]"
                        />

                        <InputError class="mt-2" :message="$page.props.errors.image" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ms-4 bg-teal-700 hover:bg-purple-500">
                            UPDATE
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
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    projects: Array,
    about: Object,
})

const form = useForm({
    text: props.about?.text,
    image: null,
    project_id: props.about?.project_id,
    description: props.about?.description
});

const submit = () => {
    Inertia.post(`/abouts/${props.about.id}`, {
        _method: "put",
        text: form.text,
        image: form.image,
        project_id: form.project_id,
        description: form.description
    });
};
</script>