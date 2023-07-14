<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>

        <div class="w-2/3 relative">

            <input type="search" placeholder="Find an Idea" class="w-full rounded-xl border-none placeholder-gray-900 bg-white px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>

                </svg>
            </div>

        </div>
    </div>


    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>

            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full flex flex-col justify-between mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>

                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none border rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163,163,163,.5)"> </svg>
                                    <ul
                                        x-cloak
                                        x-show.transition.origin.top.left.duration.500ms="isOpen"
                                        x-show="isOpen"
                                        @click.away="isOpen = false"
                                        @keydown.escape.window="isOpen = false"
                                        class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li> <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                        <li> <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete post</a></li>
                                    </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="text-blue font-semibold text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-blue text-white border border-gray-200 hover:border-gray-400  font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Voted</button>
                </div>
            </div>

            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora optio odit maxime! Impedit consequuntur animi illum, vel reiciendis necessitatibus velit omnis nemo nam rerum laborum porro iusto obcaecati optio sit blanditiis ducimus mollitia ab error facilis magnam, debitis, assumenda explicabo! Aut mollitia possimus soluta culpa dignissimos numquam velit. Voluptates quibusdam, repudiandae ut fugit a quis laudantium omnis aperiam itaque magni dolor perferendis exercitationem iure corporis accusamus deleniti eius architecto. At molestiae, sit cupiditate voluptatibus iusto omnis officiis veniam repellendus porro alias cumque tempora officia veritatis distinctio temporibus rem ex suscipit! In voluptatem perferendis fugiat ab maxime dignissimos nulla pariatur velit!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-gray-100 textsm font-semibold uppercase leading-none w-full border rounded-full text-center h-7 py-2 px-4">
                                In progress
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163,163,163,.5)"> </svg>
                                    <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li> <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                        <li> <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete post</a></li>
                                    </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
                </div>
            </div>

            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora optio odit maxime! Impedit consequuntur animi illum, vel reiciendis necessitatibus velit omnis nemo nam rerum laborum porro iusto obcaecati optio sit blanditiis ducimus mollitia ab error facilis magnam, debitis, assumenda explicabo! Aut mollitia possimus soluta culpa dignissimos numquam velit. Voluptates quibusdam, repudiandae ut fugit a quis laudantium omnis aperiam itaque magni dolor perferendis exercitationem iure corporis accusamus deleniti eius architecto. At molestiae, sit cupiditate voluptatibus iusto omnis officiis veniam repellendus porro alias cumque tempora officia veritatis distinctio temporibus rem ex suscipit! In voluptatem perferendis fugiat ab maxime dignissimos nulla pariatur velit!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-gray-200 text-xxs font-bold uppercase leading-none border rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163,163,163,.5)"> </svg>
                                    <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li> <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                        <li> <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete post</a></li>
                                    </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</x-app-layout>
