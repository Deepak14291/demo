<template>
  <!-- 

  #     #   # # # # #   #         #           # #         
  #     #   #           #         #         #     #          
  # # # #   # # # # #   #         #        #       #   
  #     #   #           #         #         #     #    
  #     #   # # # # #   # # # #   # # # #     # #    

-->
  <!-- <div class="mt-10 grid grid-cols-12 items-center">
        <div class="col-start-4 col-end-8 col-span-7 ">
            <hr class="h-1 w-full bg-gray-400 border-0 rounded">
        </div>
        <div class="col-start-9 col-end-10 col-span-1 ">
            <img src="/build/assets/images/🦆 icon _LinkedIn_.svg" width="30px">
        </div>
        <div class="col-start-10 col-end-11 col-span-1">
            <img src="/build/assets/images/🦆 icon _mark github_.svg" width="30px">
        </div>
    </div> -->
  <div class="h-12" />
  <div class="mt-10 grid grid-cols-12 gap-4">
    <div class="col-start-4 col-end-10 col-span-6 text-center index-font font-light font-['spectral'] leading-normal">
      Hi there, I’m Deepak.<br />
      Full stack <span class="text-[#0166B1]">web developer</span>,<br />
      focused on creating <i class="font-extralight">beautiful</i> and
      minimalistic web applications.
    </div>

    <div
      class="mt-12 col-start-4 col-end-10 col-span-6 text-center text-lg font-light font-['spectral'] leading-normal">
      <a href="mailto:deepak.kodi@icloud.com"><button
          class="bg-gray-700 hover:bg-[#0166B1] text-white italic py-2 px-4 rounded">
          Get in
          touch
        </button>
      </a>
    </div>
  </div>
  <div class="h-14 " />
  <div class="mt-12 h-20 bg-gray-100 divide-y-10 divide-x fixed inset-x-0 bottom-0">
    <div class=" flex place-items-end custom-font text-sm justify-between px-6 py-6">
      <div class="w-50">Designed and Built by Deepak Kodi</div>
      <div class="flex gap-4">
        <div><a href="https://github.com/Deepak14291" class="hover:text-[#0166B1]">Github</a></div>
        <div><a href="https://www.linkedin.com/in/deepak-kodi-uk/" class="hover:text-[#0166B1]">Linkedin</a></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
