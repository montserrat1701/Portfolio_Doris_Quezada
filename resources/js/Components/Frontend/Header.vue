<script setup>
import { ref, onMounted } from "vue";
const showMobileMenu = ref("false");
const scrollBg = ref(false);

const navigations = [
  { name: "Home", href: "#extraer" },
  { name: "About me", href: "#aboutdb" },
  { name: "Projects", href: "#portfoliodb" },
  { name: "Knowledge", href: "#servicesdb" },
  { name: "Contact me", href: "#contactdb" },
];
const setScrollBg = (value) => {
  scrollBg.value = value;
};

onMounted(() => {
  window.addEventListener("scroll", () => {
    return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
  });
  
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      showMobileMenu.value = true;

      const target = document.querySelector(this.getAttribute('href'));
      const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
      const startPosition = window.pageYOffset;
      const distance = targetPosition - startPosition;
      const duration = 800; // Duración del desplazamiento en milisegundos
      const startTime = performance.now();

      function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
      };

      function scrollAnimation(currentTime) {
        const elapsedTime = currentTime - startTime;
        window.scrollTo(0, ease(elapsedTime, startPosition, distance, duration));
        if (elapsedTime < duration) {
          requestAnimationFrame(scrollAnimation);
        }
      };

      requestAnimationFrame(scrollAnimation);
    });
  });

});
</script>

<template>
  <nav
    class="w-full fixed z-20 border-gray-200 px-2 sm:px-4 py-2.5 rounded"
    :class="{
      'bg-light-primary dark:bg-slate-800': !scrollBg,
      'bg-light-primary dark:bg-dark-primary': scrollBg,
    }"
  >
    <div
      class="container flex flex-wrap justify-between items-center mx-auto"
      bis_skin_checked="1"
    >
      <a href="https://github.com/montserrat1701" class="flex items-center">
        <img
          src="http://portfolio.test/img/logo10.png"
          class="mr-3 h-12 sm:h-12"
          alt="Logo"
          style="width: 65px; height: 65px"
        />
        <span
          class="
            self-center
            text-xl
            font-extrabold
            whitespace-nowrap
            text-indigo-300
            dark:text-white
          "
          ></span
        >
      </a>
      <button
        @click="showMobileMenu = !showMobileMenu"
        data-collapse-toggle="navbar-default"
        type="button"
        class="
          inline-flex
          items-center
          p-2
          ml-3
          text-sm text-gray-500
          rounded-lg
          md:hidden
          hover:bg-gray-100
          focus:outline-none focus:ring-2 focus:ring-gray-200
          dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600
        "
        aria-controls="navbar-default"
        aria-expanded="false"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="w-6 h-6"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <div
        class="w-full md:block md:w-auto"
        :class="{ hidden: showMobileMenu }"
        id="navbar-default"
        bis_skin_checked="1"
      >
        <ul
          class="
            flex flex-col
            p-4
            mt-4
            rounded-lg
            border border-teal-700
            dark:border-dark-navy-100
            md:flex-row md:space-x-8 md:mt-0 md:font-medium md:border-0
          "
        >
          <li v-for="(navigation, index) in navigations" :key="index">
            <a
              :href="navigation.href"
              class="
                block
                py-2
                pr-4
                pl-3
                text-teal-700
                rounded
                dark:text-dark-navy-100
                hover:text-purple-500
                dark:hover:text-white
              "
              aria-current="page"
              >{{ navigation.name }}</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>