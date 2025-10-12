<!-- down -->
<div class="bg-white shadow-lg lg:shadow-none lg:bg-zinc-50 px-4 md:px-8 lg:px-20 pt-7 pb-5 flex justify-between order-1 md:order-none md:shadow-custom">
    <div class="flex justify-between items-center gap-x-5 w-full md:w-auto">
        <svg class="md:hidden menu-mobile fill-zinc-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
        <div id="overlay" class="fixed z-10 inset-0 bg-black/35 hidden transition-opacity duration-300"></div>
        <ul id="mobile-menu"
            class="z-20 fixed md:static top-0 right-0 md:right-auto w-10/12 md:w-auto h-full md:h-auto font-yekanBakhRegular bg-white md:bg-transparent shadow-lg md:shadow-none transform md:translate-x-0 translate-x-full transition-transform duration-300 ease-in-out
          flex flex-col md:flex-row gap-y-8 md:gap-x-5 xl:gap-x-10 text-sm p-5 md:p-0 overflow-y-auto md:overflow-visible">
            <li>
                <!-- search -->
                <div class="relative md:hidden">
                    <input class="rounded-2xl text-zinc-700 bg-zinc-100 px-5 py-2.5 w-full placeholder:text-zinc-400 placeholder:text-xs focus:outline-0" type="text" placeholder="جستجو محصول ...">
                    <button class="absolute top-2 left-3 z-50 text-white cursor-pointer">
                        <svg class="size-6 fill-zinc-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                            <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                        </svg>
                    </button>
                </div>
            </li>
            <li>
                <a href="/" class="py-2 md:py-0 md:hover:bg-transparent md:rounded-none transition-all">
                    <span class="text-zinc-800 hover:text-primary-500 transition-all">صفحه اصلی</span>
                </a>
            </li>
            <div class="relative inline-block group">
                <a href="#" class="flex gap-x-2 items-center group relative">
                    <li class="relative text-zinc-800 hover:text-primary-500 transition-all pb-2">
                        محصولات
                    </li>
                    <svg class="group-hover:rotate-180 transition-all duration-300 fill-zinc-600 mb-2 group-hover:fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </a>
                <div id="dropdown-menu" class="absolute z-10 right-0 mt-2 w-72 h-fit bg-white p-5 shadow-lg rounded-3xl flex opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                    <ul class="rounded-2xl bg-white flex flex-col gap-y-3">
                        <a href="#">
                            <li class="group/cat flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="stroke-gray-600 group-hover/cat:stroke-primary-500 transition" d="M15.25 2.75H8.75C7.09315 2.75 5.75 4.09315 5.75 5.75V18.25C5.75 19.9069 7.09315 21.25 8.75 21.25H15.25C16.9069 21.25 18.25 19.9069 18.25 18.25V5.75C18.25 4.09315 16.9069 2.75 15.25 2.75Z" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path class="stroke-gray-600 group-hover/cat:stroke-primary-500 transition" d="M11 17.75H13" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                موبایل
                            </li>
                        </a>
                        <li class="group/cat flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-gray-600 group-hover/cat:fill-primary-500 transition" strke="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M8.945 2.25H15.055C16.422 2.25 17.525 2.25 18.392 2.367C19.292 2.487 20.05 2.747 20.652 3.348C21.254 3.95 21.512 4.708 21.634 5.608C21.75 6.475 21.75 7.578 21.75 8.945V14.052C21.75 14.951 21.75 15.7 21.67 16.294C21.586 16.922 21.4 17.489 20.944 17.944C20.489 18.4 19.922 18.586 19.294 18.67C18.7 18.75 17.951 18.75 17.052 18.75H6.948C6.05 18.75 5.3 18.75 4.706 18.67C4.078 18.586 3.511 18.4 3.056 17.944C2.6 17.489 2.414 16.922 2.33 16.294C2.25 15.7 2.25 14.95 2.25 14.052V8.945C2.25 7.578 2.25 6.475 2.367 5.608C2.487 4.708 2.747 3.95 3.348 3.348C3.95 2.746 4.708 2.488 5.608 2.367C6.475 2.25 7.578 2.25 8.945 2.25ZM5.808 3.853C5.074 3.952 4.686 4.133 4.409 4.409C4.132 4.686 3.952 5.074 3.853 5.809C3.752 6.562 3.75 7.564 3.75 9V14C3.75 14.964 3.752 15.612 3.817 16.095C3.879 16.556 3.986 16.754 4.117 16.884C4.248 17.014 4.444 17.121 4.905 17.184C5.388 17.248 6.036 17.25 7 17.25H17C17.964 17.25 18.612 17.248 19.095 17.183C19.556 17.121 19.754 17.014 19.884 16.883C20.014 16.752 20.121 16.556 20.184 16.095C20.248 15.612 20.25 14.964 20.25 14V9C20.25 7.565 20.248 6.563 20.147 5.808C20.048 5.074 19.867 4.686 19.591 4.409C19.314 4.132 18.926 3.952 18.191 3.853C17.436 3.752 16.435 3.75 15 3.75H9C7.565 3.75 6.563 3.752 5.808 3.853ZM8.25 15C8.25 14.8011 8.32902 14.6103 8.46967 14.4697C8.61032 14.329 8.80109 14.25 9 14.25H15C15.1989 14.25 15.3897 14.329 15.5303 14.4697C15.671 14.6103 15.75 14.8011 15.75 15C15.75 15.1989 15.671 15.3897 15.5303 15.5303C15.3897 15.671 15.1989 15.75 15 15.75H9C8.80109 15.75 8.61032 15.671 8.46967 15.5303C8.32902 15.3897 8.25 15.1989 8.25 15ZM1.25 21C1.25 20.8011 1.32902 20.6103 1.46967 20.4697C1.61032 20.329 1.80109 20.25 2 20.25H22C22.1989 20.25 22.3897 20.329 22.5303 20.4697C22.671 20.6103 22.75 20.8011 22.75 21C22.75 21.1989 22.671 21.3897 22.5303 21.5303C22.3897 21.671 22.1989 21.75 22 21.75H2C1.80109 21.75 1.61032 21.671 1.46967 21.5303C1.32902 21.3897 1.25 21.1989 1.25 21Z" fill=""/>
                            </svg>
                            کالای دیجیتال
                        </li>
                        <li class="group/cat flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-700 hover:text-primary-500 cursor-pointer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-gray-600 group-hover/cat:fill-primary-500 transition" d="M11.25 18C11.25 18.1989 11.329 18.3897 11.4697 18.5303C11.6103 18.671 11.8011 18.75 12 18.75C12.1989 18.75 12.3897 18.671 12.5303 18.5303C12.671 18.3897 12.75 18.1989 12.75 18V15C12.75 14.8011 12.671 14.6103 12.5303 14.4697C12.3897 14.329 12.1989 14.25 12 14.25C11.8011 14.25 11.6103 14.329 11.4697 14.4697C11.329 14.6103 11.25 14.8011 11.25 15V18Z" fill=""/>
                                <path class="fill-gray-600 group-hover/cat:fill-primary-500 transition" fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C11.292 1.25 10.649 1.453 9.95 1.792C9.276 2.12 8.496 2.604 7.523 3.208L5.456 4.491C4.536 5.063 3.797 5.521 3.229 5.956C2.64 6.406 2.188 6.866 1.861 7.463C1.535 8.058 1.389 8.692 1.318 9.441C1.25 10.166 1.25 11.054 1.25 12.167V13.78C1.25 15.684 1.25 17.187 1.403 18.362C1.559 19.567 1.889 20.54 2.633 21.309C3.38 22.082 4.33 22.428 5.508 22.591C6.648 22.75 8.106 22.75 9.942 22.75H14.058C15.894 22.75 17.352 22.75 18.492 22.591C19.669 22.428 20.62 22.082 21.368 21.309C22.111 20.54 22.441 19.567 22.598 18.362C22.75 17.187 22.75 15.684 22.75 13.78V12.167C22.75 11.054 22.75 10.167 22.682 9.441C22.612 8.691 22.465 8.058 22.139 7.463C21.812 6.866 21.359 6.407 20.771 5.956C20.203 5.52 19.465 5.063 18.544 4.491L16.477 3.208C15.504 2.604 14.724 2.12 14.049 1.792C13.352 1.452 12.709 1.25 12 1.25ZM8.28 4.504C9.295 3.874 10.01 3.432 10.607 3.141C11.188 2.858 11.6 2.75 12 2.75C12.4 2.75 12.812 2.858 13.393 3.141C13.991 3.431 14.705 3.874 15.72 4.504L17.72 5.745C18.681 6.342 19.356 6.761 19.86 7.147C20.349 7.522 20.63 7.831 20.823 8.183C21.016 8.536 21.129 8.949 21.188 9.581C21.249 10.229 21.25 11.046 21.25 12.204V13.725C21.25 15.695 21.248 17.101 21.11 18.168C20.974 19.216 20.717 19.824 20.29 20.267C19.865 20.706 19.287 20.967 18.286 21.106C17.26 21.248 15.907 21.25 14 21.25H10C8.092 21.25 6.74 21.248 5.714 21.106C4.713 20.966 4.135 20.706 3.711 20.266C3.283 19.824 3.026 19.216 2.891 18.168C2.751 17.101 2.75 15.696 2.75 13.725V12.204C2.75 11.046 2.75 10.229 2.812 9.581C2.871 8.949 2.984 8.536 3.177 8.183C3.37 7.831 3.651 7.522 4.141 7.147C4.644 6.761 5.319 6.342 6.28 5.745L8.28 4.504Z" fill=""/>
                            </svg>
                            خانه و آشپزخانه
                        </li>
                        <li class="group/cat flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-700 hover:text-primary-500 cursor-pointer">
                            <svg width="20" height="20" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2011_7)">
                                    <path class="stroke-gray-600 group-hover/cat:stroke-primary-500 transition" d="M1.29 9.71C1.10375 9.89736 0.999207 10.1508 0.999207 10.415C0.999207 10.6792 1.10375 10.9326 1.29 11.12L3.38 13.21C3.56736 13.3963 3.82081 13.5008 4.085 13.5008C4.34919 13.5008 4.60264 13.3963 4.79 13.21L8.5 9.5L5 6L1.29 9.71Z" stroke="" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path class="stroke-gray-600 group-hover/cat:stroke-primary-500 transition" d="M5.54001 6.54L11.29 0.789998C11.4306 0.651241 11.6092 0.557244 11.8032 0.51987C11.9972 0.482496 12.1979 0.503419 12.38 0.579998C12.5626 0.655018 12.719 0.782416 12.8293 0.946136C12.9396 1.10986 12.999 1.30257 13 1.5V3.67C13.0008 3.80161 12.9755 3.93207 12.9258 4.0539C12.876 4.17574 12.8027 4.28656 12.71 4.38L8.00001 9M8.04001 4.04L10.54 6.54" stroke="" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2011_7">
                                        <rect width="14" height="14" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            آرایشی بهداشتی
                        </li>
                        <li class="group/cat flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-700 hover:text-primary-500 cursor-pointer">
                            <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-gray-600 group-hover/cat:fill-primary-500 transition" d="M19.66 19L12.87 2.81C12.5 1.97 11.93 1.29 11.16 0.77C10.4 0.26 9.55 0 8.61 0C7.77 0 7 0.21 6.3 0.63C5.25 1.26 5.04 1.62 4.63 2.32C4.22 3.02 4 3.8 4 4.64L4.03 8H1.03V13.45C1.65 13.17 2.31 13.03 3 13.03V10.03H8C8.57 10.03 9.04 10.23 9.43 10.62C9.82 11 10 11.47 10 12V19.03H7.91C7.75561 19.7513 7.43359 20.4262 6.97 21H12V12C12 11.28 11.8 10.62 11.45 10C11.1 9.38 10.61 8.91 10 8.56C9.42 8.2 8.75 8 8 8H6V4.64C6 3.92 6.25 3.31 6.76 2.79C7.27 2.27 7.89 2 8.61 2C9.14 2 9.63 2.16 10.06 2.46C10.49 2.76 10.81 3.14 11 3.61L17.46 19L15 19.03V21H22V19.03L19.66 19ZM3 17C3.55 17 4 17.45 4 18C4 18.55 3.55 19 3 19C2.45 19 2 18.55 2 18C2 17.45 2.45 17 3 17ZM3 15C1.34 15 0 16.34 0 18C0 19.66 1.34 21 3 21C4.66 21 6 19.66 6 18C6 16.34 4.66 15 3 15Z" fill=""/>
                            </svg>
                            لوازم خانگی برقی
                        </li>
                        <li class="group/cat flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-700 hover:text-primary-500 cursor-pointer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-gray-600 group-hover/cat:stroke-primary-500 transition" d="M13 11L18 6M19 7L17 5L19.5 3.5L20.5 4.5L19 7ZM4.025 8.975C3.5449 8.49532 3.2146 7.8864 3.07434 7.22237C2.93408 6.55835 2.9899 5.86787 3.235 5.235L4.657 6.657H6.657V4.657L5.235 3.235C5.86792 2.98934 6.55862 2.93306 7.22295 3.07302C7.88729 3.21297 8.49658 3.54312 8.97659 4.02324C9.4566 4.50336 9.78662 5.11272 9.92643 5.77709C10.0662 6.44145 10.0098 7.13214 9.764 7.765L16.234 14.236C16.8669 13.9902 17.5575 13.9338 18.2219 14.0736C18.8863 14.2134 19.4956 14.5434 19.9758 15.0234C20.4559 15.5034 20.786 16.1127 20.926 16.7771C21.0659 17.4414 21.0097 18.1321 20.764 18.765L19.343 17.343H17.343V19.343L18.765 20.765C18.1322 21.0107 17.4417 21.067 16.7775 20.9272C16.1133 20.7874 15.504 20.4575 15.024 19.9777C14.5439 19.4978 14.2137 18.8887 14.0736 18.2246C13.9336 17.5604 13.9896 16.8699 14.235 16.237L7.763 9.765C7.1304 10.0097 6.44032 10.0653 5.7767 9.92503C5.11308 9.78477 4.50452 9.45472 4.025 8.975Z" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="stroke-gray-600 group-hover/cat:stroke-primary-500 transition" d="M12.203 14.5L6.59901 20.104C6.47361 20.2296 6.32468 20.3293 6.16072 20.3973C5.99677 20.4653 5.82101 20.5003 5.64351 20.5003C5.46601 20.5003 5.29025 20.4653 5.12629 20.3973C4.96234 20.3293 4.8134 20.2296 4.68801 20.104L3.89601 19.312C3.77038 19.1866 3.67071 19.0377 3.6027 18.8737C3.5347 18.7098 3.49969 18.534 3.49969 18.3565C3.49969 18.179 3.5347 18.0032 3.6027 17.8393C3.67071 17.6753 3.77038 17.5264 3.89601 17.401L9.50001 11.797" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            ابزار آلات
                        </li>
                        <li class="group/cat flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-700 hover:text-primary-500 cursor-pointer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-gray-600 group-hover/cat:fill-primary-500 transition" d="M12 4.5C11.348 4.5 10.792 4.916 10.585 5.5C10.5534 5.59436 10.5033 5.68148 10.4376 5.75629C10.372 5.83109 10.2921 5.89208 10.2026 5.93571C10.1132 5.97933 10.0159 6.00471 9.91658 6.01037C9.81721 6.01603 9.71771 6.00186 9.62388 5.96868C9.53005 5.9355 9.44376 5.88398 9.37004 5.81711C9.29632 5.75025 9.23665 5.66938 9.1945 5.57922C9.15235 5.48906 9.12856 5.39141 9.12453 5.29197C9.1205 5.19253 9.1363 5.09327 9.17101 5C9.32784 4.55656 9.58674 4.15621 9.92681 3.83126C10.2669 3.50632 10.6786 3.26589 11.1287 3.12939C11.5788 2.99288 12.0547 2.96413 12.518 3.04545C12.9813 3.12677 13.4189 3.31588 13.7957 3.59751C14.1724 3.87915 14.4776 4.24542 14.6867 4.66675C14.8957 5.08809 15.0028 5.55268 14.9993 6.02302C14.9957 6.49336 14.8816 6.95628 14.6661 7.37439C14.4507 7.79251 14.14 8.15411 13.759 8.43C13.458 8.649 13.191 8.868 13.002 9.097C12.816 9.323 12.75 9.504 12.75 9.66C12.7501 9.77887 12.7823 9.89552 12.8432 9.99761C12.9041 10.0997 12.9915 10.1834 13.096 10.24L20.703 14.352C21.1869 14.6138 21.5696 15.0295 21.7907 15.5333C22.0118 16.0371 22.0585 16.6002 21.9236 17.1336C21.7886 17.6669 21.4797 18.1401 21.0456 18.4781C20.6116 18.8161 20.0772 18.9998 19.527 19H4.47301C3.92285 18.9998 3.38847 18.8161 2.95441 18.4781C2.52035 18.1401 2.21141 17.6669 2.07646 17.1336C1.94152 16.6002 1.98828 16.0371 2.20934 15.5333C2.4304 15.0295 2.81315 14.6138 3.29701 14.352L9.39701 11.054C9.48369 11.0072 9.57873 10.9779 9.67672 10.9678C9.77471 10.9577 9.87373 10.967 9.96812 10.9952C10.0625 11.0234 10.1504 11.0699 10.2268 11.1321C10.3033 11.1942 10.3667 11.2708 10.4135 11.3575C10.4603 11.4442 10.4896 11.5392 10.4997 11.6372C10.5098 11.7352 10.5005 11.8342 10.4723 11.9286C10.4441 12.023 10.3976 12.1109 10.3354 12.1873C10.2733 12.2638 10.1967 12.3272 10.11 12.374L4.01001 15.671C3.81948 15.774 3.66875 15.9375 3.58169 16.1358C3.49463 16.3342 3.47621 16.5558 3.52936 16.7658C3.58251 16.9757 3.70418 17.1619 3.87511 17.2949C4.04603 17.4279 4.25644 17.5001 4.47301 17.5H19.527C19.7436 17.5001 19.954 17.4279 20.1249 17.2949C20.2958 17.1619 20.4175 16.9757 20.4707 16.7658C20.5238 16.5558 20.5054 16.3342 20.4183 16.1358C20.3313 15.9375 20.1805 15.774 19.99 15.671L12.383 11.559C12.0404 11.3738 11.7543 11.0995 11.5548 10.7651C11.3554 10.4306 11.2501 10.0484 11.25 9.659C11.25 9.036 11.528 8.528 11.844 8.144C12.158 7.764 12.551 7.454 12.879 7.216C13.1362 7.03028 13.3278 6.76783 13.4264 6.46636C13.525 6.16488 13.5255 5.83991 13.4279 5.53813C13.3302 5.23635 13.1394 4.97329 12.8828 4.78677C12.6263 4.60024 12.3172 4.49984 12 4.5Z" fill=""/>
                            </svg>
                            مد و پوشاک
                        </li>
                        <li class="group/cat flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-700 hover:text-primary-500 cursor-pointer">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-gray-600 group-hover/cat:fill-primary-500 transition" d="M10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2ZM8.336 3.199C9.42984 2.93113 10.5722 2.93113 11.666 3.199L10 4.17L8.336 3.199ZM7.092 3.631L9.502 5.036V6.736L6.733 8.688L5.173 8.121L4.547 5.609C5.2298 4.76031 6.10125 4.08367 7.092 3.631ZM3.801 6.746L4.194 8.326L3.03 9.36C3.115 8.423 3.383 7.54 3.801 6.746ZM3.035 10.692L4.862 9.072L6.408 9.633L7.453 12.923L6.736 13.996H4.252C3.5695 13.0173 3.15008 11.8795 3.034 10.692M5.097 14.996H6.651L7.161 16.4C6.39444 16.0594 5.69532 15.5839 5.097 14.996ZM8.373 16.81L7.558 14.564L8.268 13.501H11.735L12.446 14.564L11.631 16.809C10.5601 17.0652 9.44388 17.0662 8.373 16.81ZM12.844 16.397L13.354 14.995H14.903C14.306 15.5817 13.6086 16.0565 12.844 16.397ZM15.748 13.995H13.27L12.55 12.92L13.575 9.633L15.142 9.069L16.966 10.691C16.8499 11.8785 16.4305 13.0163 15.748 13.995ZM16.971 9.357L15.811 8.326L16.204 6.754C16.618 7.544 16.886 8.424 16.971 9.357ZM15.457 5.615L14.832 8.118L13.248 8.688L10.501 6.736V5.036L12.91 3.63C13.9025 4.08399 14.775 4.76375 15.458 5.615M7.398 9.445L10 7.607L12.586 9.444L11.634 12.5H8.367L7.398 9.445Z" fill=""/>
                            </svg>
                            ورزش و سفر
                        </li>
                    </ul>
                </div>
            </div>
            <li>
                <a href="/aboutUs" class="py-2 md:py-0 md:hover:bg-transparent md:rounded-none transition-all">
                    <span class="text-zinc-800 hover:text-primary-500 transition-all">درباره ما</span>
                </a>
            </li>
            <li>
                <a href="#" class="py-2 md:py-0 md:hover:bg-transparent md:rounded-none transition-all">
                    <span class="text-zinc-800 hover:text-primary-500 transition-all">تماس با ما</span>
                </a>
            </li>
            <li>
                <a href="/blogs" class="py-2 md:py-0 md:hover:bg-transparent md:rounded-none transition-all">
                    <span class="text-zinc-800 hover:text-primary-500 transition-all">بلاگ</span>
                </a>
            </li>
            <div class="relative inline-block group">
                <a href="#" class="flex gap-x-2 items-center group relative">
                    <li class="relative text-zinc-800 hover:text-primary-500 transition-all pb-2">
                        صفحات پروژه
                    </li>
                    <svg class="group-hover:rotate-180 transition-all duration-300 fill-zinc-600 mb-2 group-hover:fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </a>
                <div id="dropdown-menu" class="absolute z-10 right-0 mt-2 w-72 h-fit bg-white p-5 shadow-lg rounded-3xl flex opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                    <ul class="w-full rounded-2xl bg-white flex flex-col">
<!--                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">-->
<!--                            <a class="w-full" href="index-2.html">-->
<!--                                صفحه اصلی-->
<!--                            </a>-->
<!--                        </li>-->
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="index2.html">
                                صفحه اصلی 2
                            </a>
                        </li>
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="aboutUs">
                                درباره ما
                            </a>
                        </li>
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="blogs">
                                وبلاگ
                            </a>
                        </li>
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="cart">
                                سبد خرید
                            </a>
                        </li>
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="checkout">
                                پرداخت
                            </a>
                        </li>
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="contactUs">
                                ارتباط با ما
                            </a>
                        </li>
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="dashboard">
                                داشبورد کاربر
                            </a>
                        </li>
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="search">
                                جستجو محصول
                            </a>
                        </li>
                        <li class="w-full flex items-center gap-x-1 bg-gradient-to-l hover:from-zinc-100 hover:to-transparent text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer">
                            <a class="w-full" href="singleProduct">
                                جزئیات محصول
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
    </div>
    <div class="hidden md:flex items-center gap-x-2 lg:gap-x-3">
        <div class="text-zinc-400 text-xs">
            تماس با پشتیبانی
        </div>
        <div class="text-zinc-300">
            |
        </div>
        <a href="tel:05144556677" class="text-zinc-600 flex text-xs gap-x-1.5 items-center">
            051-44556677
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path class="stroke-primary-500" d="M3 18V12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12V18" stroke="#52525c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path class="stroke-primary-500" d="M21 19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H18C17.4696 21 16.9609 20.7893 16.5858 20.4142C16.2107 20.0391 16 19.5304 16 19V16C16 15.4696 16.2107 14.9609 16.5858 14.5858C16.9609 14.2107 17.4696 14 18 14H21V19ZM3 19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H6C6.53043 21 7.03914 20.7893 7.41421 20.4142C7.78929 20.0391 8 19.5304 8 19V16C8 15.4696 7.78929 14.9609 7.41421 14.5858C7.03914 14.2107 6.53043 14 6 14H3V19Z" stroke="#52525c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</div>
