<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2"> All ideas</span>
        </a>
    </div>
    <div class="idea-container  bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#" >
                    <img src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>

            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    {{ $idea->description }}
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">{{ $idea->user->name }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">4 Comments</div>
                    </div>

                    <div
                        x-data="{ isOpen: false }"
                        class="flex items-center space-x-2"
                        >
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

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <div
                x-data="{ isOpen: false }"
                class="relative">
                <button
                    type="button"
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center h-11 w-32 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover text-white transition duration-150 ease-in px-6 py-3">
                    Reply
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left.duration.500ms="isOpen"
                    x-show="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-4" placeholder="Go ahead, dont't be shy.Share your thoughts..."></textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button
                                type="button"
                                class="flex items-center justify-center h-11 w-1/2 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover text-white transition duration-150 ease-in px-6 py-3">
                                Post comment
                            </button>
                            <button
                                type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">

                                <svg fill="none" class="text-gray-600 w-4 transform -rotate-45" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>


                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div
                x-data="{ isOpen: false }"
                class="relative">
                <button
                    type="button"
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center h-11 w-36 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                    <span >Set status</span>
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left.duration.500ms="isOpen"
                    x-show="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-gray-200 text-black border none" name="radio direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-gray-200 text-purple border none" name="radio direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-gray-200 text-yellow border none" name="radio direct" value="3">
                                    <span class="ml-2">in Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-gray-200 text-green border none" name="radio direct" value="4">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-gray-200 text-red border none" name="radio direct" value="5">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <textarea name="update-comment" id="update_comment" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Add and Update comment (optional)">
                            </textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button
                                type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">

                                <svg fill="none" class="text-gray-600 w-4 transform -rotate-45" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>


                                <span class="ml-1">Attach</span>
                            </button>
                            <button
                                type="button"
                                class="flex items-center justify-center h-11 w-1/2 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover text-white transition duration-150 ease-in px-6 py-3">
                                Update
                            </button>
                        </div>
                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button
                type="button"
                class="h-11 w-32 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span >Vote</span>

            </button>
        </div>
    </div>

    <div class="comments-container relative space-y-6 ml-22 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora optio odit maxime! Impedit consequuntur animi illum, vel reiciendis necessitatibus velit omnis nemo nam rerum laborum porro iusto
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>

                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2">
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
                                        class="absolute w-44 z-20 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li> <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                        <li> <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete post</a></li>
                                    </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Status changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora optio odit maxime! Impedit consequuntur animi illum, vel reiciendis necessitatibus velit omnis nemo nam
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>

                        <div class="flex items-center space-x-2">
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
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora optio odit maxime! Impedit consequuntur animi illum, vel reiciendis necessitatibus velit omnis nemo nam rerum laborum porro iusto
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>

                        <div class="flex items-center space-x-2">
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
