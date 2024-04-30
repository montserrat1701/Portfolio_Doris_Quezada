<template>
    <Head title="Edit Skill" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <br />
            <h2 class="font-semibold text-xl text-purple-500 leading-tight">
                EDIT SKILL
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white rounded-xl">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="name" value="Name" class="font-semibold text-gary-800"/>

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full text-gray-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                            v-model="form.name"
                            autofocus
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="$page.props.errors.name" />
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
                        <PrimaryButton class="ms-4 bg-teal-700 hover:bg-purple-500" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
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
    skill: Object,
});

const form = useForm({
    name: props.skill?.name,
    image: null,
});

const submit = () => {
    Inertia.post(`/skills/${props.skill.id}`, {
        _method: "put",
        name: form.name,
        image: form.image
    });
};

</script>