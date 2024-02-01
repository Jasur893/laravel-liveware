<div>
    <section class="bg-white">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl">From the blog</h1>

            <div class="mt-8 lg:-mx-6 lg:flex lg:items-center ">
                <img  class="object-cover w-full lg:mx-6 lg:w-1/2 h-72 lg:h-96 rounded-lg"  alt="art cover" loading="lazy" src='https://picsum.photos/seed/2/2000/1000' />

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6">
                    <p class="text-sm text-blue-500 uppercase">category</p>

                    <div class="space-y-2">
                        <div class="space-y-4">
                            <a href="#">
                                <h4 class="text-md font-semibold text-cyan-900 text-justify">
                                    {{ $post->title }}
                                </h4>
                            </a>
                        </div>

                        <p class="mt-3 text-sm text-gray-500 md:text-sm">
                            {{ $post->body }}
                        </p>

                        <div class="flex items-center space-x-4 justify-between">
                            <div class="flex gap-3 space-y-1">
                                <img  src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"  class="rounded-full h-8 w-8" />
                                <div class="mx-4">
                                    <h1 class="text-sm text-gray-700">{{ $post->user->name }} 🔥</h1>
                                    <p class="text-sm text-gray-500">Lead Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
