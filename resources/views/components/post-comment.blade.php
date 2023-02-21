@props(['comment'])

<x-panel class="bg-gray-100">

    <article class="flex space-x-4">

        <div class="flex-shrink-0">
            <a href="{{ url('?author=') }}{{ $comment->author->username }}">
                <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="avatar" width="60px" height="60px" class="rounded-xl">
            </a>
        </div>

        <div>
            <header class="mb-4">
                <a href="{{ url('?author=') }}{{ $comment->author->username }}" class="font-bold">{{ $comment->author->username }}</a>
                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at->format('F j, Y, H:i') }}</time>
                </p>
            </header>
            <p>
                {!! $comment->body !!}
            </p>
        </div>

    </article>

</x-panel>
