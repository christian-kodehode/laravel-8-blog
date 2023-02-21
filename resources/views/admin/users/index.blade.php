<x-layout>

    <x-admin-setting heading="Manage Users" class="py-8 max-w-6xl mx-auto">

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
                                        <x-sort-button name="Name" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="username" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="posts" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="comm." />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="Email" />
                                    </td>
                                    <td class="px-4 py-2 border-r">
                                        <x-sort-button name="joined" />
                                    </td>
                                </tr>

                                @foreach ($users as $user)
                                    <tr>
                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center text-sm">
                                                <h4>{{ $user->id }}</h4>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r whitespace-nowrap">
                                            <div class="flex items-center  text-md font-semibold text-blue-800">
                                                <a href="{{ url('?author=') }}{{ $user->username }}">
                                                    {{ $user->name }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r whitespace-nowrap">
                                            <div class="flex items-center text-sm text-blue-500">
                                                <a href="{{ url('?author=') }}{{ $user->username }}">
                                                    {{ $user->username }}
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center text-sm">
                                                <h4>{{ $user->posts->count() }}</h4>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center text-sm">
                                                <h4>{{ $user->comments->count() }}</h4>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center text-xs text-blue-500">
                                                <a href="mailto:{{ $user->email}}">
                                                    <h4>{{ $user->email }}</h4>
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-4 py-2 border-r">
                                            <div class="flex items-center justify-between text-xs">
                                                <h4 class="pr-1">{{ $user->created_at->format('Y') }}</h4>
                                                <h4>{{ $user->created_at->format('M') }}</h4>
                                                <h4 class="pl-1">{{ $user->created_at->format('d') }}</h4>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>

    </x-admin-setting>

</x-layout>
