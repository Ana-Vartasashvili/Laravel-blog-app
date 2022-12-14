<x-layout>
    <x-setting heading="Manage Posts">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class=" flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach($posts as $post)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="ml-4">
                                                <a href="/posts/{{$post->slug}}">
                                                    <div class="font-medium text-gray-900">{{$post->title}}</div>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a href="/admin/posts/{{$post->id}}/edit"
                                               class="text-blue-500 hover:text-blue-599">Edit</a>
                                        </td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <form method="POST" action="/admin/posts/{{$post->id}}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400" >Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>
