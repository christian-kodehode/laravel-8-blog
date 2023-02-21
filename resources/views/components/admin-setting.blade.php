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
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500 font-bold' : '' }}">All Posts</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500 font-bold' : '' }}">+ New Post</a>
                </li>
                <li>
                    <a href="/admin/users" class="{{ request()->is('admin/users') ? 'text-blue-500 font-bold' : '' }}">Users</a>
                </li>
                <li>
                    <a href="/admin/comments" class="{{ request()->is('admin/comments') ? 'text-blue-500 font-bold' : '' }}">Comments</a>
                </li>
                <li>
                    <a href="/admin/categories" class="{{ request()->is('admin/categories') ? 'text-blue-500 font-bold' : '' }}">Categories</a>
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
