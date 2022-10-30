


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- @foreach ($blogposts as $blogpost)
                    <p>Title: {{$blogpost->title}}</p>
                    <p>Body: {{$blogpost->body}}</p>
                    <p><a href="{{route('blogpost.show',[$blogpost->id])}}">Show More Details</a></p>
                    <br>
                @endforeach -->

                <style>
                    table {
                        table-layout: fixed;
                        border: 1px solid;
                        text-align: center;
                        }

                        th, td {
                        border: 1px solid;
                        padding: 5px;
                        }
                </style>
                <table>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>More Details</th>
                    </tr>
                    @foreach ($blogposts as $blogpost)
                        <tr>
                            <td>{{$blogpost->id}}</td>
                            <td>{{$blogpost->title}}</td>
                            <td><a href="{{route('blogpost.show',[$blogpost->id])}}">View</a></td>
                        </tr>   
                    @endforeach
                </table>
                
                <br>
                <a href="{{route('blogpost.create')}}">> Add New <</a>
                
            </div>
        </div>
    </div>
</x-app-layout>
