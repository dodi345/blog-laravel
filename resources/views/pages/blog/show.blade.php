<x-user-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <article class="py-8 max-w-screen-md border-b border-gray-400">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $posts->title }}
        </h2>
        <div >
            By
            <a href="/authors/{{ $posts->author->username }}" class="text-base text-gray-500 hover:underline">{{ $posts->author->name }}</a>
            in <a href="/category/{{ $posts->category->slug }}" class="text-base text-gray-500 hover:underline">{{ $posts->category->name }}</a>
            | {{ $posts->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light"> {{ Str::limit($posts->body, 150) }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Read More </a>

    </article> --}}


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-sm text-blue-600 hover:underline">&laquo; Previous</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $posts->author->name }}">
                            <div>
                                <a href="/posts?author={{ $posts->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white ">{{ $posts->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-2">
                                    {{ $posts->created_at->diffForHumans() }}</p>
                                <a href="/posts?category={{ $posts->category->slug }}">
                                    <span
                                        class="bg-{{ $posts->category->colors }}-300 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        {{ $posts->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $posts->title }}</h1>
                </header>
                <p>{{ $posts->body }}</p>
            </article>
        </div>
</x-user-layout>
