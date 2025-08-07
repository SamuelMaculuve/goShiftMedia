@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h2 class="text-3xl font-bold mb-2">{{ $course->title }}</h2>
        <p class="text-gray-700 mb-4">{{ $course->description }}</p>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if(!$course->students->contains(auth()->id()))
            <form method="POST" action="{{ route('courses.enroll', $course) }}">
                @csrf
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">Inscrever-se</button>
            </form>
        @else
            <div class="mt-6">
                <h3 class="text-xl font-semibold mb-2">Conteúdo do curso</h3>
                <ul class="list-disc pl-6 space-y-2">
                    @foreach($course->lessons as $lesson)
                        <li>
                            <span class="font-medium">{{ $lesson->title }}</span> —
                            <a href="{{ $lesson->video_url }}" target="_blank" class="text-blue-600 hover:underline">Ver vídeo</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @endsection
