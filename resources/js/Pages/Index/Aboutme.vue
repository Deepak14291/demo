<template>
  <!-- <div class="mt-12 grid grid-cols-12 content-center text-center">
        <Link class="font-extrabold col-start-5 col-end-6 col-span-1" href="/about">About me</Link>
        <Link class="font-extrabold col-start-7 col-end-8 col-span-1" href="/myprojects">My projects</Link>
        <Link class="font-extrabold col-start-9 col-end-10 col-span-1" href="/contact">Contact me</Link>
    </div> -->

  <div class="mt-10 grid grid-cols-12 gap-4">
    <div class="col-start-2 col-end-5 col-span-3">
      <div>
        <img :src="imageurl" width="239px" height="279px" />
        <div class="mt-4 custom-font text-sm font-semibold ">Full stack web developer</div>
        <div class="mt-2 custom-font text-sm font-semibold underline text-[#0166B1]">
          <a href="https://www.linkedin.com/in/deepak-kodi-uk/">Linkedin</a>
        </div>
        <div class="mt-2 custom-font text-sm font-semibold underline text-[#0166B1]">
          <a class="mt-2" href="https://github.com/Deepak14291">Github</a>
        </div>
      </div>
    </div>
    <div
      class="subpixel-antialiased text-sm leading-relaxed font-semibold custom-font col-start-5 col-end-10 col-span-5 text-justify">
      <div>
        Hello! I'm Deepak Kodi, a recent masters graduate in mobile and web development from the
        university of the west of scotland. My passion for technology and problem-solving stems from my 7 years
        of experience at Concentrix, where I worked as a senior subject matter expert on the Microsoft outlook
        in-app support team.
      </div>
      <div class="mt-4">
        During my time at Concentrix, I specialised in troubleshooting technical issues, assisting my
        team
        with
        complex
        cases, and working closely with microsoft outlook's engineering team to identify and resolve
        product
        bugs. I
        also contributed by providing suggestions for articles and blogs to help reduce repeated support
        cases
        on
        common
        issues.
      </div>
      <div class="mt-4">
        My curiosity about the inner workings of software development and the desire to understand how
        bugs
        were
        fixed
        and how features were created, drove me to transition into the field of software engineering.
        Now,
        with
        a
        solid
        foundation in web and mobile development, I'm excited to take on new challenges, not just
        supporting
        applications in post production but in the creation of software application.
      </div>
      <div class="mt-4">
        <Link class="font-bold" href="/readmore">READ MORE</Link>
      </div>
    </div>
  </div>
</template>

<script setup>

import { Link } from '@inertiajs/vue3'

defineProps({
  imageurl: String,
})
</script>
