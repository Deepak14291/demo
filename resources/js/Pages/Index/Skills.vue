<template>
  <div class="mt-12 grid grid-cols-12 custom-font">
    <div class="col-start-2 col-end-4 col-span-2 font-extrabold text-2xl">
      My Skills
    </div>
  </div>
  <div class="mt-6 grid grid-cols-12 custom-font text-sm leading-relaxed font-semibold">
    <div class="col-start-2 col-end-9 col-span-7">
      Apart from the modules included in my masters programme, I have also completed few courses on udemy such as
      APIs
      in PHP from basic to advanced, Master Laravel, vue3, inertia (VILT stack) 2024 and Vue3 in action: 7
      projects to
      master the framework and I am currently working on
    </div>
  </div>

  <div class="mt-6 custom-font">
    <ul class="list-image-[url(/build/assets/images/skills/circle.png)] grid grid-cols-12 gap-3 text-sm font-bold">
      <li class="ml-2 col-start-2 col-end-4 col-span-2">&nbsp;HTML & CSS</li>
      <li class="col-start-4 col-end-5 col-span-2">&nbsp;Laravel</li>
      <li class="col-start-6 col-end-7 col-span-1">&nbsp;PHP</li>
      <li class="col-start-8 col-end-9 col-span-1">&nbsp;Tailwind CSS</li>
      <li class="ml-2 col-start-2 col-end-3 col-span-1">&nbsp;Javascript</li>
      <li class="col-start-4 col-end-5 col-span-1">&nbsp;Vue</li>
      <li class="col-start-6 col-end-7 col-span-1">&nbsp;Git</li>
      <li class="col-start-8 col-end-9 col-span-1">&nbsp;SQL</li>
      <li class="ml-2 col-start-2 col-end-3 col-span-1">&nbsp;Symfony</li>
      <li class="col-start-4 col-end-5 col-span-1">&nbsp;Docker</li>
      <li class="col-start-6 col-end-7 col-span-1">&nbsp;AWS</li>
    </ul>
  </div>

  <div class="mt-12 grid grid-cols-12 custom-font font-extrabold text-2xl">
    <div class="col-start-2 col-end-4 col-span-2">
      My Certifications
    </div>
  </div>

  <div class="mt-6 grid grid-cols-12 custom-font text-sm leading-relaxed font-semibold">
    <div class="col-start-2 col-end-9 col-span-7">
      As many companies are transitioning to cloud based infrastructure, I have explored the cloud computing
      technology and I have completed and passed couple of AWS certifications such as AWS certified cloud
      practitioner and AWS certified developer associate.
    </div>
  </div>

  <div class="mt-6 custom-font font-semibold text-sm">
    <ul class="list-image-[url(/build/assets/images/skills/circle.png)]  grid grid-cols-12">
      <li class="ml-2 col-start-2 col-end-5 col-span-3">
        &nbsp;AWS certified cloud practitioner
      </li>
      <li @click="isOpen = true"
        class="col-start-7 col-end-9 col-span-2 font-bold underline underline-offset-2 hover:cursor-pointer hover:text-[#0166B1]">
        &nbsp;VIEW CERTIFICATE
      </li>
      <li class="ml-2 mt-3 col-start-2 col-end-5 col-span-3 ">&nbsp;AWS certified developer associate</li>
      <li
        class="mt-3 col-start-7 col-end-9 col-span-2 font-bold underline underline-offset-2 hover:cursor-pointer hover:text-[#0166B1]">
        &nbsp;VIEW CERTIFICATE
      </li>
    </ul>
  </div>

  <Teleport to="body">
    <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center" role="dialog"
      aria-modal="true" v-if="isOpen">
      <div class="bg-white p-5 rounded w-1/2 ">
        <img src="/build/assets/images/skills/AWS CCP.jpg" alt="" width="600" height="600" />
        <button class="mt-4 bg-gray-700 hover:bg-[#0166B1] text-white font-semibold py-2 px-4
          rounded" @click="isOpen = false">Close</button>
      </div>
    </div>
  </Teleport>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue';

const isOpen = ref(false)


</script>