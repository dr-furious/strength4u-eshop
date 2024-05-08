<nav
    class="flex items-center justify-end bg-primary-grey-100 px-4 py-4 font-light shadow-md"
>
    <ul class="flex w-full items-center justify-end gap-8 px-14">
        <li class="relative mr-auto flex items-center text-lg">
            <a
                href="{{ route('admin') }}"
                class="custom-underline-transition custom-number-bubble-after"
            >
                My Panel
            </a>
        </li>
        <li class="">
            <a
                class="transform rounded-[8px] bg-blue-600 px-4 py-2 capitalize text-slate-100 duration-200 ease-in-out hover:bg-blue-700"
                href="{{ route('admin_create') }}"
            >
                Add new
            </a>
        </li>
        <li class="relative flex items-center">
            <button
                id="user-btn"
                class="custom-underline-transition custom-number-bubble-after"
            >
                <svg
                    class="fill-slate-800"
                    xmlns="http://www.w3.org/2000/svg"
                    height="32"
                    viewBox="0 -960 960 960"
                    width="32"
                >
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"
                    />
                </svg>
                <div
                    id="user-signed"
                    class="absolute -right-4 -top-3 flex h-7 w-7 items-center justify-center rounded-full border border-primary-grey-100 border-transparent bg-green-500 bg-opacity-20"
                >
                    <svg
                        class="fill-green-700"
                        xmlns="http://www.w3.org/2000/svg"
                        height="24"
                        viewBox="0 -960 960 960"
                        width="24"
                    >
                        <path
                            d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"
                        />
                    </svg>
                </div>
            </button>
            <div
                id="user-nav"
                class="absolute -right-1/2 top-full mt-2 hidden w-36 overflow-hidden rounded-[8px] border border-slate-200 bg-white text-slate-800 shadow-md lg:-right-full"
            >
                <ul class="flex flex-col">
                    <li class="rounded-t-[8px]">
                        <a
                            id="login-link"
                            href="{{ route('index') }}}"
                            class="block px-4 py-2 hover:bg-gray-100 hover:text-red-600 hover:underline"
                        >Log out</a
                        >
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
