@auth
    <x-panel>

        <form
            method="POST"
            action="/posts/{{ $post->slug }}/comments">

            @csrf

            <header class="flex items-center">

                <img
                    src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                    alt="avatar"
                    width="40px"
                    height="40px"
                    class="rounded-full"
                >

                <h2 class="ml-4">Want to participate?</h2>

            </header>

            <x-form.field>

                <x-form.comment-textarea
                    name="body"
                    class="w-full text-sm focus:outline-none focus:ring border border-gray-400 rounded-xl p-3"
                    placeholder="Quick, think of something to say..."
                    rows="5"
                />

                <x-form.error name="body" />

            </x-form.field>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>Post</x-form.button>
            </div>
        </form>

    </x-panel>

@else
    <p class="font-semibold">
        <a href="/register" class="text-sm text-white border border-gray-200 bg-blue-500 py-2 px-10 mr-2 rounded-xl">Register</a> or
        <a href="/login" class="text-sm text-white border border-gray-200 bg-blue-500 py-2 px-10 ml-2 mr-2 rounded-xl">Log in</a> to leave a comment.
    </p>
@endauth
