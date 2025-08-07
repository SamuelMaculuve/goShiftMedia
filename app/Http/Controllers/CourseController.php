<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Mostrar todos os cursos disponíveis
     */
    public function index()
    {
        $courses = Course::with('category')->paginate(10);

        return view('courses.index', compact('courses'));
    }

    /**
     * Mostrar detalhes de um curso
     */
    public function show(Course $course)
    {
        $isEnrolled = $course->students()->where('user_id', auth()->id())->exists();

        return view('courses.show', [
            'course' => $course->load('lessons'),
            'isEnrolled' => $isEnrolled,
        ]);
    }

    /**
     * Fazer inscrição num curso
     */
    public function enroll(Course $course)
    {
        if ($course->students()->where('user_id', auth()->id())->exists()) {
            return redirect()->route('courses.show', $course)->with('info', 'Já estás inscrito neste curso.');
        }

        $course->students()->attach(auth()->id());

        return redirect()->route('courses.show', $course)->with('success', 'Inscrição feita com sucesso!');
    }

    /**
     * Mostrar uma lição (aula) do curso
     */
    public function viewLesson(Course $course, $lessonId)
    {
        // Verifica se o utilizador está inscrito
        if (!$course->students()->where('user_id', auth()->id())->exists()) {
            abort(403, 'Precisas de te inscrever para ver esta lição.');
        }

        $lesson = $course->lessons()->findOrFail($lessonId);

        return view('courses.lesson', compact('course', 'lesson'));
    }
}
