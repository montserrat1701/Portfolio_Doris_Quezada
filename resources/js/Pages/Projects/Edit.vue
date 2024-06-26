<template>
    <Head title="New Project" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <br />
            <h2 class="font-semibold text-xl text-purple-500 leading-tight">
                EDIT PROJECT
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white rounded-xl">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="skill_id" value="Skill" class="font-semibold text-gary-800"/>
                        <select 
                        v-model="form.skill_id" 
                        id="skill_id" 
                        name="skill_id"
                        class="mt-1 
                            block
                            w-full
                            pl-3
                            pr-10
                            py-2
                            text-base
                            text-gray-500
                            border-gray-300
                            focus:outline-none focus:ring-purple-500 focus:border-purple-500
                            sm:text-sm
                            rounded-md">
                            <option v-for="skill in skills" :key="skill.id" :value="skill.id">{{ skill.name }}</option>
                            <InputError class="mt-2" :message="$page.props.errors.skill_id" />
                        </select>
                    </div>
                    <div>
                        <br />
                        <InputLabel for="name" value="Name" class="font-semibold text-gary-800"/>

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full text-gray-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                            v-model="form.name"
                            autofocus
                            autocomplete="name"
                        />

                        <InputError class="mt-2" :message="$page.props.errors.name" />
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

                    <div>
                        <br />
                        <InputLabel for="project_url" value="URL" class="font-semibold text-gary-800"/>

                        <TextInput
                            id="project_url"
                            type="text"
                            class="mt-1 block w-full text-gray-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                            v-model="form.project_url"
                            autocomplete="projecturl"
                        />

                        <InputError class="mt-2" :message="$page.props.errors.project_url" />
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
    skills: Array,
    project: Object,
})

const form = useForm({
    name: props.project?.name,
    image: null,
    skill_id: props.project?.skill_id,
    project_url: props.project?.project_url,
    description: props.project?.description
});

const submit = () => {
    Inertia.post(`/projects/${props.project.id}`, {
        _method: "put",
        name: form.name,
        image: form.image,
        skill_id: form.skill_id,
        project_url: form.project_url,
        description: form.description
    });
};
</script>