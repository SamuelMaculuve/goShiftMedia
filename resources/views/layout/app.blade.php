@extends('layouts.app')
@section('content')
    <h2 class="text-2xl font-bold mb-4">{{ $course->title }}</h2>
    <p class="mb-2">{{ $course->description }}</p>
    @if(!$course->students->contains(auth()->id()))
        <form method="POST" action="{{ route('courses.enroll', $course) }}">
            @csrf
            <button class="bg-green-500 text-white px-4 py-2 rounded">Inscrever-se</button>
        </form>
    @else
        <h3 class="mt-4 font-semibold">Aulas:</h3>
        <ul class="list-disc pl-6">
            @foreach($course->lessons as $lesson)
                <li>{{ $lesson->title }} — <a href="{{ $lesson->video_url }}" target="_blank" class="text-blue-600">Ver vídeo</a></li>
            @endforeach
        </ul>
    @endif
@endsection
