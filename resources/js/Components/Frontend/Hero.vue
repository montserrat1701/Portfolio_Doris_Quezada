<script setup>
defineProps({
  abouts: Object,
});
</script>
<template>
  <section
    id="home"
    class="
      lg:h-[90vh]
      flex
      items-center
      bg-light-primary
      dark:bg-dark-primary
      py-32
      lg:py-0
      overflow-hidden
    "
  >
    <div
      class="container mx-auto h-full">
      <div class="flex flex-col md:flex-row items-center h-full pt-8">
        <div class="flex-1 flex flex-col items-center lg:items-start">
          <p class="text-lg text-dark-accent font-extrabold text-indigo-300 text-md mb-[22px]">Hey, I'm Doris! 👾</p>
          <h1
            class="
              text-4xl
              leading-[44px]
              md:text-5xl md:leading-tight
              lg:text-7xl lg:leading-[1.2]
              font-bold
              md:tracking-[-2px]"
            >
            Student of <br />
            Computer Systems Engineering.
          </h1>
          <p
            class="
              pt-4
              pb-8
              md:pt-6 md:pb-12
              max-w-[480px]
              text-lg text-center
              text-gray-600
              lg:text-left
            "
          >
            I´m a frontend developer, wanting to increase my knowledge and my skills 
            in any branch of technology.
          </p>
          <a href="#about" class="btn btn-md bg-indigo-300 text-white hover:bg-indigo-500 font-extrabold rounded-md">
            See More About Me
          </a>
          <div class="pt-12">
            <h5 class="text lg flex justify-center lg:justify-start items-center text-xl font-extrabold text-dark-primary dark:text-white mb-2">
              Follow me on
            </h5>
            <div class="flex items-center mb-6">
              <a
              class="
                  w-12
                  h-12
                  rounded-full
                  flex
                  items-center
                  justify-center
                  border border-purple-200
                  text-purple-500
                  dark:text-white
                  hover:bg-light-secondary hover:border-light-secondary
                  dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                  mr-3
                  sm:mr-4
                "
                href="https://github.com/montserrat1701"
              >
              <svg 
                xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 24 24" 
                width="24" 
                height="24" 
                class="fill-current"
              >
                <path 
                  d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.385.6.11.793-.26.793-.577 0-.285-.01-1.23-.015-2.23-3.348.728-4.042-1.61-4.042-1.61C4.39 18.46 3.633 18 3.633 18c-1.085-.744.083-.728.083-.728 1.2.086 1.828 1.23 1.828 1.23 1.065 1.824 2.794 1.297 3.48.992.108-.772.415-1.297.754-1.592-2.648-.3-5.42-1.324-5.42-5.89 0-1.304.465-2.365 1.235-3.2-.124-.3-.534-1.517.116-3.16 0 0 1.005-.322 3.3 1.227.958-.267 1.983-.4 3.003-.405 1.02.005 2.045.138 3.003.405 2.292-1.55 3.297-1.227 3.297-1.227.65 1.643.24 2.86.12 3.16.765.835 1.233 1.896 1.233 3.2 0 4.577-2.776 5.587-5.43 5.882.428.36.807 1.093.807 2.204 0 1.59-.015 2.874-.015 3.265 0 .317.187.692.8.574C20.566 21.797 24 17.303 24 12c0-6.627-5.373-12-12-12"
                />
              </svg>
              </a>
              <a
                class="
                  w-12
                  h-12
                  rounded-full
                  flex
                  items-center
                  justify-center
                  border border-red-200
                  text-red-500
                  dark:text-white
                  hover:bg-light-secondary hover:border-light-secondary
                  dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                  mr-3
                  sm:mr-4
                "
                href="https://www.youtube.com/channel/UCX5JRhpKdQ6w2J1KTlHQyQA"
              >
                <svg
                  width="16"
                  height="12"
                  viewBox="0 0 16 12"
                  class="fill-current"
                >
                  <path
                    d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z"
                  />
                </svg>
              </a>
              <a
                class="
                  w-12
                  h-12
                  rounded-full
                  flex
                  items-center
                  justify-center
                  border border-blue-200
                  text-blue-500
                  dark:text-white
                  hover:bg-light-secondary hover:border-light-secondary
                  dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                  mr-3
                  sm:mr-4
                "
                href="https://www.linkedin.com/in/doris-montserrat-quezada-garcia-5503a52b1/"
              >
                <svg
                  width="14"
                  height="14"
                  viewBox="0 0 14 14"
                  class="fill-current"
                >
                  <path
                    d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0">
            <img class="rounded-lg" src="http://portfolio.test/img/foto4.jpeg" alt="Hero" />
        </div>
      </div>
    </div>
  </section>
</template>