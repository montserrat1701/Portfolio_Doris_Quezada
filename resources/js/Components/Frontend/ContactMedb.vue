<template>
    <section id="contactdb" class="section bg-light-primary dark:bg-dark-primary">
        <div class="container mx-auto" v-motion :initial="{ opacity: 0, y: 100 }" :visible="{ opacity: 1, y: 0 }">
            <div class="flex flex-col items-center text-center"> <!-- flex 1 -->
                <div v-for="about in abouts.data" :key="about.id">
                    <div v-if="about.text === 'title 10'">
                        <h2 class="section-title font-extrabold text-purple-800">
                            {{ about.description }}
                        </h2>
                    </div>
                    <div v-if ="about.text === 'text 11'">
                        <p class="subtitle text-gray-800 dark:text-gray-300">
                            {{ about.description }}
                        </p>
                    </div>
                </div>
            </div> <!-- end of flex 1 -->
            <div class="flex flex-col lg:flex-row lg:gap-x-8 items-center"> <!-- flex 2 -->
                <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2"> <!--flex antes de form-->
                    <div class="flex flex-col lg:flex-row gap-x-4"> <!-- gap 4 -->
                        <div class="text-teal-700 rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                                />
                            </svg>
                        </div> 
                        <div> <!--div que hace que jale-->
                            <div v-for="about in abouts.data" :key="about.id">
                                <div v-if="about.text === 'title 11'">
                                    <h4 class="font-extrabold text-xl mb-1">
                                        {{ about.description }}
                                    </h4>
                                </div>
                                <div v-if="about.text === 'text 12'">
                                    <p class="mb-1 text-gray-500">
                                        {{ about.description }}
                                    </p>
                                </div>
                                <div v-if="about.text === 'text 13'">
                                    <p class="text-purple-500 font-normal">
                                        {{ about.description }}
                                    </p>
                                </div>
                            </div>
                        </div><!--end of div que hace que jale-->
                    </div> <!-- end of gap 4 -->
                    <div class="flex flex-col lg:flex-row gap-x-4"> <!--gap 4.2-->
                        <div class="text-teal-700 rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                                />
                            </svg>
                        </div>
                        <div> <!--new div que hace que jale-->
                            <div v-for="about in abouts.data" :key="about.id">
                                <div v-if="about.text === 'title 12'">
                                    <h4 class="font-extrabold text-xl mb-1">
                                        {{ about.description }}
                                    </h4>
                                </div>
                                <div v-if="about.text === 'text 14'">
                                    <p class="mb-1 text-gray-500">
                                        {{ about.description }}
                                    </p>
                                </div>
                                <div v-if="about.text === 'text 15'">
                                    <p class="text-purple-500 font-normal">
                                        {{ about.description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end of flex antes del form-->
                <form @submit.prevent="submit" class="space-y-8 w-full max-w-md">
                    <div v-if="showMessage" class="m-2 p-4 bg-teal-700 dark:bg-dark-navy-100 text-light-secondary rounded-lg">
                        Thank you for contacting me.
                    </div>
                    <div class="flex gap-8">
                        <div> <!--div input 1-->
                            <input v-model="form.name" type="text" class="input border-b-1 border-purple-400" placeholder="Your Name"/>
                            <span v-if="form.errors.name" class="text-sm m-2 text-red-400">
                                {{ form.errors.name }}
                            </span>
                        </div>
                        <div> <!--div input 2-->
                            <input v-model="form.email" type="email" class="input border-b-1 border-purple-400" placeholder="Your Email"/>
                            <span v-if="form.errors.email" class="text-sm m-2 text-red-400">
                                {{ form.errors.email }}
                            </span>
                        </div>
                    </div>
                    <textarea v-model="form.body" class="textarea border-purple-400" placeholder="Your Message" spellcheck="false"></textarea>
                    <span v-if="form.errors.body" class="text-sm m-2 text-red-400">
                        {{ form.errors.body }}
                    </span>
                    <button class="btn btn-lg bg-teal-800 hover:bg-purple-400 text-white rounded-md font-extrabold">
                        Send message
                    </button>
                </form>
            </div> <!-- end of flex 2 -->
        </div>
    </section>
</template>

<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

defineProps({
    abouts: Object
});

const showMessage = ref(false);

const form = useForm({
  name: "",
  email: "",
  body: "",
});

function setShowMessage(value) {
  showMessage.value = value;
}

function cleanForm() {
  form.reset();
  setShowMessage(true);
  setTimeout(() => setShowMessage(false), 2000);
}

const submit = () => {
  form.post(route("contact"), {
    preserveScroll: true,
    onSuccess: () => cleanForm(),
  });
};

</script>