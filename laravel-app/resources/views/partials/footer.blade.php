<footer class="mt-12 bg-slate-800 px-4 py-4 text-white">
      <div class="mb-8 text-xl font-bold text-white">
        <a href="{{ route("index") }}">strength4u</a>
      </div>

      <hr class="mx-auto mb-8 w-3/4 opacity-50" />

      <div class="flex flex-col items-center justify-center">
        <ul
          class="mb-6 flex gap-8 rounded-full border border-solid border-transparent bg-slate-200 px-4 py-1 text-slate-800"
        >
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src={{ Vite::asset("resources/assets/icons/instagram-svgrepo-com.svg") }}
                alt="instagram icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src={{ Vite::asset("resources/assets/icons/facebook-svgrepo-com.svg") }}
                alt="facebook icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src={{ Vite::asset("resources/assets/icons/twitter-color-svgrepo.svg") }}
                alt="facebook icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src={{ Vite::asset("resources/assets/icons/youtube-svgrepo-com.svg") }}
                alt="facebook icon"
              />
            </a>
          </li>
        </ul>
        <p class="font-extralight">&copy; 2024 strenght4u. All rights reserved.</p>
      </div>
</footer>