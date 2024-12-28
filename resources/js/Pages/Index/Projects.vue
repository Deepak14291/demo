<template>
  <div class="mt-12 grid grid-cols-12 custom-font">
    <div class="col-start-2 col-end-4 col-span-2 font-extrabold text-2xl">
      My Projects
    </div>
    <!-- <div class="col-start-10 col-end-11 col-span-2 text-sm">
            <Link class="underlined font-bold" href="/">BACK</Link>
        </div> -->
    <div class="col-start-2 col-end-4 col-span-2">
      <div class="mt-5 flex custom-font gap-8">
        <label class="inline-block ">Front end <input type="checkbox" name="front" class="appearance-none"
            checked></label>
        <label class="inline-block ">Full stack <input type="checkbox" name="fullstack" class="appearance-none"></label>
      </div>
    </div>
  </div>


  <div class="mt-4 grid grid-cols-12 custom-font gap-6">

    <div class="col-start-2 col-end-11 col-span-9 drop-shadow-lg">
      <div class="flex flex-row gap-2 bg-gray-100">
        <div>
          <img src="/public/build/assets/images/project_images/project_1/sample1.jpg" width="400" height="400" />
        </div>
        <div class="pl-4 flex flex-col justify-around">
          <p class="project-name font-bold">
            Mazda
          </p>
          <p class="project-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, eius tempore dolorem laboriosam,
            exercitationem dolores, non ducimus voluptates sequi consectetur dolorum rem. Error neque nisi dolores
            itaque asperiores quisquam. Excepturi?
          </p>
          <div class="flex flex-row justify-between py-2">
            <div class="flex flex-row text-sm gap-2 pt-2">
              <div class="font-bold content-center">Tech Stack:</div>
              <div class="font-medium py-1 px-4 blue-color">HTML</div>
              <div class="font-medium py-1 px-4 blue-color">CSS</div>
              <div class="font-medium py-1 px-4 blue-color">JavaScript</div>
            </div>
            <Link href="/mazda" class="mr-4 font-bold text-sm text-end hover:text-[#0166B1] content-end">
            VIEW
            PROJECT</Link>
          </div>

        </div>
      </div>
    </div>


    <div class="col-start-2 col-end-11 col-span-9 drop-shadow-lg">
      <div class="flex flex-row gap-2 bg-gray-100">
        <div>
          <img src="/build/assets/images/project_images/project_1/sample1.jpg" width="400" height="400" />
        </div>
        <div class="pl-4 flex flex-col justify-around">
          <p class="project-name font-bold">
            Tesla
          </p>
          <p class="project-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, eius tempore dolorem laboriosam,
            exercitationem dolores, non ducimus voluptates sequi consectetur dolorum rem. Error neque nisi dolores
            itaque asperiores quisquam. Excepturi?
          </p>
          <div class="flex flex-row justify-between py-2">
            <div class="flex flex-row text-sm gap-2 pt-2">
              <div class="font-bold content-center">Tech Stack:</div>
              <div class="font-medium py-1 px-4 blue-color">HTML</div>
              <div class="font-medium py-1 px-4 blue-color">CSS</div>
              <div class="font-medium py-1 px-4 blue-color">JavaScript</div>
            </div>
            <Link href="/tesla" class="mr-4 font-bold text-sm text-end hover:text-[#0166B1] content-end">
            VIEW
            PROJECT</Link>
          </div>
        </div>
      </div>
    </div>

    <div class="col-start-2 col-end-11 col-span-9 drop-shadow-lg">
      <div class="flex flex-row gap-2 bg-gray-100">
        <div>
          <img src="/build/assets/images/project_images/project_1/sample1.jpg" width="400" height="400" />
        </div>
        <div class="pl-4 flex flex-col justify-around">
          <p class="project-name font-bold">
            Tesla
          </p>
          <p class="project-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, eius tempore dolorem laboriosam,
            exercitationem dolores, non ducimus voluptates sequi consectetur dolorum rem. Error neque nisi dolores
            itaque asperiores quisquam. Excepturi?
          </p>
          <Link href="/viewproject" class="mr-4 font-semibold text-sm text-end hover:text-[#0166B1]">VIEW PROJECT</Link>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="mt-10">
    <div class="grid grid-cols-12 custom-font">
      <div class="col-start-2 col-end-6 col-span-4 ">
        <img src="/build/assets/images/project_images/project_1/sample1.jpg" alt="" width="400" height="400" />
        <div class="mt-4 font-extrabold text-2xl">Decore</div>
        <div class="mt-4 text-sm">
          A tool design to help web developers to build live,
          <br /> custom templates & export code
        </div>
        <div class="mt-4 font-bold text-sm">
          <Link href="/viewproject">VIEW PROJECT</Link>
        </div>
      </div>
      <div class="col-start-7 col-end-11 col-span-4">
        <img src="/build/assets/images/project_images/project_1/sample1.jpg" alt="" width="400" height="400" />
        <div class="mt-4 font-extrabold text-2xl">Decore</div>
        <div class="mt-4 text-sm">
          A tool design to help web developers to build live,
          <br /> custom templates & export code
        </div>
        <div class="mt-4 font-bold text-sm">
          <Link href="/viewproject">VIEW PROJECT</Link>
        </div>
      </div>
      <div class="mt-6 col-start-2 col-end-6 col-span-4">
        <img src="/build/assets/images/project_images/project_1/sample1.jpg" alt="" width="400" height="400" />
        <div class="mt-4 font-extrabold text-2xl">Decore</div>
        <div class="mt-4 text-sm">
          A tool design to help web developers to build live,
          <br /> custom templates & export code
        </div>
        <div class="mt-4 font-bold text-sm">
          <Link href="/viewproject">VIEW PROJECT</Link>
        </div>
      </div>
      <div class="mt-6 col-start-7 col-end-11 col-span-4">
        <img src="/build/assets/images/project_images/project_1/sample1.jpg" alt="" width="400" height="400" />
        <div class="mt-4 font-extrabold text-2xl">Decore</div>
        <div class="mt-4 text-sm">
          A tool design to help web developers to build live,
          <br /> custom templates & export code
        </div>
        <div class="mt-4 font-bold text-sm">
          <Link href="/viewproject">VIEW PROJECT</Link>
        </div>
      </div>
    </div>
  </div> -->

  <div class="mt-6 font-bold custom-font text-sm grid grid-cols-12">
    <Link class="col-start-2 col-end-4 col-span-2" href="/">VIEW MORE PROJECTS</Link>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'


</script>