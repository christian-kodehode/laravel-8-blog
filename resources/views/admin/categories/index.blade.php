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
                                        <x-sort-button name="name" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="slug" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="posts" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="created" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="updated" />
                                    </td>
                                </tr>

                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center">
                                                <div class="text-xs font-medium text-gray-900">
                                                    <h4>{{ $category->id }}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r whitespace-nowrap">
                                            <div class="flex items-center text-md font-semibold text-blue-800">
                                                <a href="{{ url('?category=') }}{{ $category->slug }}">
                                                    {{ ucwords($category->name) }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r whitespace-nowrap">
                                            <div class="flex items-center text-xs text-blue-500">
                                                <a href="{{ url('?category=') }}{{ $category->slug }}">
                                                    /{{ $category->slug }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r whitespace-nowrap">
                                            <div class="flex items-center justify-center text-sm">
                                                    {{ $category->posts->count() }}
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center">
                                                <div class="text-xs font-medium text-gray-900">
                                                    <h4>{{ $category->created_at->format('Y M d') }}</h4>
                                                    <h4>{{ $category->created_at->format('h:i A') }}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center">
                                                <div class="text-xs font-medium text-gray-900">
                                                    <h4>{{ $category->updated_at->format('Y M d') }}</h4>
                                                    <h4>{{ $category->updated_at->format('h:i A') }}</h4>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>

    </x-admin-setting>

</x-layout>
