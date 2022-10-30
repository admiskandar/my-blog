


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Post') }} {{$blogpost->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <p>Title: {{$blogpost->title}}</p>
                    <p>Body: {{$blogpost->body}}</p>
                    <p><a href="{{route('blogpost.edit',[$blogpost->id])}}">> Edit <</a></p>
                    <br>
                    <a href="{{route('blogpost.index')}}">> Back <</a>
                
            </div>
        </div>
    </div>
</x-app-layout>
