<x-layout>

    <x-user-setting heading="Manage Comments" class="py-8 max-w-6xl mx-auto">

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
                                        <x-sort-button name="created" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="updated" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                    </td>
                                </tr>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center text-xs text-gray-600">
                                                <a href="/posts/{{ $comment->post_id }}">
                                                    {{ $comment->id }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center text-sm text-blue-500">
                                                <a href="/posts/{{ $comment->post_id }}">
                                                    {{ $comment->post->title }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center">
                                                <div class="text-xs font-medium text-gray-900">
                                                    <h4>{{ $comment->created_at->format('Y M-d h:i A') }}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center">
                                                <div class="text-xs font-medium text-gray-900">
                                                    <h4>{{ $comment->updated_at->format('Y M-d h:i A') }}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/posts/{{ $comment->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>

                                        <td class="px-4 py-2 whitespace-nowrap text-right text-sm font-medium">
                                            <form method="POST" action="/admin/posts/{{ $comment->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400">Delete</button>
                                            </form>
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

    </x-user-setting>

</x-layout>
