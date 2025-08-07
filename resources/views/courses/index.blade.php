@extends('layout.app')
@section('content')
    <h2 class="text-2xl font-bold mb-4">Cursos disponíveis</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($courses as $course)
            <div class="border p-4 rounded">
                <img src="{{ $course->thumbnail }}" class="w-full h-40 object-cover mb-2" />
                <h3 class="text-lg font-semibold">{{ $course->title }}</h3>
                <p>{{ $course->category->name }}</p>
                <a href="{{ route('courses.show', $course) }}" class="text-blue-600">Ver curso</a>
            </div>
        @endforeach
    </div>
@endsection
