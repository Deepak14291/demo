<template>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet" />
  <div class="m-0 bg-gray-100 divide-y-10 divide-x custom-font font-semibold">
    <div class="h-20 ml-12 grid grid-cols-12 text-center text-sm">
      <Link href="/" class="col-start-4 col-end-5 col-span-1 content-center hover:bg-gray-200">
      Home
      </Link>
      <Link href="/about" class="col-start-5 col-end-6 col-span-1 content-center hover:bg-gray-200">
      About
      </Link>
      <Link href="/skills" class="col-start-6 col-end-7 col-span-1 content-center hover:bg-gray-200">
      Skills
      </Link>
      <Link href="/myprojects" class="col-start-7 col-end-8 col-span-1 content-center hover:bg-gray-200">
      Projects
      </Link>
      <Link href="/contactme" class="col-start-8 col-end-9 col-span-1 content-center hover:bg-gray-200">
      Contact
      </Link>
      <Link href="/login" class="col-start-9 col-end-10 col-span-1 content-center hover:bg-gray-200">
      Admin
      </Link>
    </div>
  </div>

  <div v-if="flashSuccess">{{ flashSuccess }}</div>
  <slot></slot>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3'

import { computed } from 'vue'
const page = usePage();

const flashSuccess = computed(
  () => page.props.flash.success,
)
</script>
