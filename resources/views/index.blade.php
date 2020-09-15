@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-gray-500 uppercase tracking-wide font-semibold">Popular Game</h2>
        <div class="pupular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16 ">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                             class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                    </a>
                    <div
                        style="right: -20px; bottom: -20px;"
                        class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                             class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                    </a>
                    <div
                        style="right: -20px; bottom: -20px;"
                        class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                             class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                    </a>
                    <div
                        style="right: -20px; bottom: -20px;"
                        class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                             class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                    </a>
                    <div
                        style="right: -20px; bottom: -20px;"
                        class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                             class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                    </a>
                    <div
                        style="right: -20px; bottom: -20px;"
                        class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                             class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                    </a>
                    <div
                        style="right: -20px; bottom: -20px;"
                        class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                             class="hover:opacity-75 transition ease-in-out duration-150" alt="Game image"/>
                    </a>
                    <div
                        style="right: -20px; bottom: -20px;"
                        class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row m-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 w-3/4 lg:mr-32">
                <h2 class="text-gray-500 tracking-wide uppercase font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div
                        class="game bg-black hover:bg-orange-700 transition duration-1000 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="">
                                <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                     class="w-48 hover:opacity-75 transition ease-in-out duration-150"
                                     alt="Game image"/>
                            </a>
                            <div
                                style="right: -20px; bottom: -20px;"
                                class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href=""
                               class="block text-lg text-base font-semibold leading-tight hover:text-white mt-4">
                                Final Fantasy VII Remake
                            </a>
                            <div class="text-white mt-1">Playstation 4</div>
                            <p class="text-white hidden lg:block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum
                                delectus dolor facilis in iusto laudantium molestiae, nam, nostrum porro provident, qui
                                sunt voluptatem? A accusantium asperiores excepturi exercitationem fuga nam reiciendis
                                vel! Accusamus adipisci aliquid corporis cum cumque debitis, ea eveniet nesciunt non
                                officia officiis provident reprehenderit repudiandae sequi?</p>
                        </div>
                    </div>
                    <div
                        class="game bg-black hover:bg-orange-700 transition duration-1000 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="">
                                <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                     class="w-48 hover:opacity-75 transition ease-in-out duration-150"
                                     alt="Game image"/>
                            </a>
                            <div
                                style="right: -20px; bottom: -20px;"
                                class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href=""
                               class="block text-lg text-base font-semibold leading-tight hover:text-white mt-4">
                                Final Fantasy VII Remake
                            </a>
                            <div class="text-white mt-1">Playstation 4</div>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum
                                delectus dolor facilis in iusto laudantium molestiae, nam, nostrum porro provident, qui
                                sunt voluptatem? A accusantium asperiores excepturi exercitationem fuga nam reiciendis
                                vel! Accusamus adipisci aliquid corporis cum cumque debitis, ea eveniet nesciunt non
                                officia officiis provident reprehenderit repudiandae sequi?</p>
                        </div>
                    </div>
                    <div
                        class="game bg-black hover:bg-orange-700 transition duration-1000 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="">
                                <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                     class="w-48 hover:opacity-75 transition ease-in-out duration-150"
                                     alt="Game image"/>
                            </a>
                            <div
                                style="right: -20px; bottom: -20px;"
                                class="absolute bottom-0 right-0 w-16 h-16 bg-black rounded-full">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href=""
                               class="block text-lg text-base font-semibold leading-tight hover:text-white mt-4">
                                Final Fantasy VII Remake
                            </a>
                            <div class="text-white mt-1">Playstation 4</div>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum
                                delectus dolor facilis in iusto laudantium molestiae, nam, nostrum porro provident, qui
                                sunt voluptatem? A accusantium asperiores excepturi exercitationem fuga nam reiciendis
                                vel! Accusamus adipisci aliquid corporis cum cumque debitis, ea eveniet nesciunt non
                                officia officiis provident reprehenderit repudiandae sequi?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto  most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-gray-500 tracking-wide uppercase font-semibold">Most Anticipated</h2>
                <div class="most-anticipated container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="">
                            <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                                 alt="Game image"/>
                        </a>
                        <div class="ml-5">
                            <a href="" class="hover:text-gray-400">Game Title</a>
                            <p class="text-white text-sm mt-1">Release Date</p>
                        </div>
                    </div><div class="game flex">
                        <a href="">
                            <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                                 alt="Game image"/>
                        </a>
                        <div class="ml-5">
                            <a href="" class="hover:text-gray-400">Game Title</a>
                            <p class="text-white text-sm mt-1">Release Date</p>
                        </div>
                    </div><div class="game flex">
                        <a href="">
                            <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                                 alt="Game image"/>
                        </a>
                        <div class="ml-5">
                            <a href="" class="hover:text-gray-400">Game Title</a>
                            <p class="text-white text-sm mt-1">Release Date</p>
                        </div>
                    </div>
                </div>
                <h2 class="text-gray-500 tracking-wide uppercase font-semibold mt-5">Coming Soon</h2>
                <div class="most-anticipated container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="">
                            <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                                 alt="Game image"/>
                        </a>
                        <div class="ml-5">
                            <a href="" class="hover:text-gray-400">Game Title</a>
                            <p class="text-white text-sm mt-1">Release Date</p>
                        </div>
                    </div><div class="game flex">
                        <a href="">
                            <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                                 alt="Game image"/>
                        </a>
                        <div class="ml-5">
                            <a href="" class="hover:text-gray-400">Game Title</a>
                            <p class="text-white text-sm mt-1">Release Date</p>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="">
                            <img src="{{ asset('img/horizon-cover-image.jpg') }}"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                                 alt="Game image"/>
                        </a>
                        <div class="ml-5">
                            <a href="" class="hover:text-gray-400">Game Title</a>
                            <p class="text-white text-sm mt-1">Release Date</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
