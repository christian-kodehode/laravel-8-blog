<x-layout>

    <x-admin-setting heading="Manage Categories" class="py-8 max-w-6xl mx-auto">

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="mb-6 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="id" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="post" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="author" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="created" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="updated" />
                                    </td>
                                </tr>

                                @foreach ($comments as $comment)
                                    <tr>
                                        <td class="px-4 py-2 border-r whitespace-nowrap">
                                            <div class="flex items-center text-sm text-gray-700">
                                                <a href="posts/{{ $comment->post_id }}">
                                                    {{ $comment->id }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r whitespace-nowrap">
                                            <div class="flex items-center text-sm text-blue-500">
                                                <a href="posts/{{ $comment->post_id }}">
                                                    {{ $comment->post->title }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r whitespace-nowrap">
                                            <div class="flex items-center text-sm text-blue-500">
                                                <a href="{{ url('?author=') }}{{ $comment->username }}">
                                                    {{ $comment->author->username }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center">
                                                <div class="text-xs text-gray-900">
                                                    <h4>{{ $comment->created_at->format('Y M d') }}</h4>
                                                    <h4>{{ $comment->created_at->format('h:i A') }}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center">
                                                <div class="text-xs text-gray-900">
                                                    <h4>{{ $comment->updated_at->format('Y M d') }}</h4>
                                                    <h4>{{ $comment->updated_at->format('h:i A') }}</h4>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{ $comments->links() }}
                </div>
            </div>
        </div>

    </x-admin-setting>

</x-layout>
