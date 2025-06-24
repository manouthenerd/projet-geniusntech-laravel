  {{-- <div class="max-w-[85rem] border border-blue-500 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto"> --}}
      <!-- Grid -->
      <div class="grid gap-6">
          <!-- Card -->
          <a class="group relative block rounded-xl focus:outline-hidden" href="#">
              <div
                  class="shrink-0 relative rounded-xl overflow-hidden w-full h-87.5 before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-gray-900/70">
                  <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500" src="{{ $image }}" alt="Blog Image">
              </div>

              <div class="absolute top-0 inset-x-0 z-10">
                  <div class="p-4 flex flex-col h-full sm:p-6">
                      <!-- Avatar -->
                      <div class="flex items-center">
                          <div class="shrink-0">
                              <img class="size-11 border-2 border-white rounded-full" src="/images/big-logo.png"
                                  alt="Avatar">
                          </div>
                          <div class="ms-2.5 sm:ms-4">
                              <h4 class="font-semibold text-white">
                                  Genius Network Technology
                              </h4>
                              <p class="text-xs text-white/80">
                                  {{ $date }}
                              </p>
                          </div>
                      </div>
                      <!-- End Avatar -->
                  </div>
              </div>

              <div class="absolute bottom-0 inset-x-0 z-10">
                  <div class="flex flex-col h-full p-4 sm:p-6">
                      <h3
                          class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/80 group-focus:text-white/80">
                          {{ $title }}
                      </h3>

                  </div>
              </div>
          </a>

      </div>
      
  {{-- </div> --}}
