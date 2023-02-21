@props(['heading', 'class'])

<section class="{{ $class }}">

    <h1 class="text-xl font-bold mb-8 pb-4 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">

        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/user/dashboard" class="{{ request()->is('user/dashboard') ? 'text-blue-500 font-bold' : '' }}">My Posts</a>
                </li>
                <li>
                    <a href="/user/posts/create" class="{{ request()->is('user/posts/create') ? 'text-blue-500 font-bold' : '' }}">+ New Post</a>
                </li>
                <li>
                    <a href="/user/comments" class="{{ request()->is('user/comments') ? 'text-blue-500 font-bold' : '' }}">My Comments</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>

    </div>

</section>
