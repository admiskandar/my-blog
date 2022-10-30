<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form action="" method="post">
                    @csrf    
                    <table>
                            <tr>
                                <th>Title</th>
                                <td><input type="text" name="title" value="{{$blogpost->title}}"></td>
                            </tr>
                            <tr>
                                <th>Body</th>
                                <td><input type="text" name="body" value="{{$blogpost->body}}"></td>
                            </tr>
                            <tr>
                                <td><input type="submit"></td>
                            </tr>
                        </table>
                    </form>
                
            </div>
        </div>
    </div>
</x-app-layout>
