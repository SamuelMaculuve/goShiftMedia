<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Models\Lesson;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;
    protected static ?string $navigationIcon = 'heroicon-m-play-circle';
    protected static ?string $navigationLabel = 'Aulas';
    protected static ?string $navigationGroup = 'Gestão de Cursos';

    public static function form(Form|Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Select::make('course_id')
                ->relationship('course', 'title')
                ->required(),
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\FileUpload::make('video_url')
                ->label('Vídeo da Aula')
                ->acceptedFileTypes(['video/mp4', 'video/quicktime', 'video/x-matroska'])
                ->maxSize(102400) // 100MB
                ->directory('lessons/videos')
                ->required()
                ->visibility('public'),
            Forms\Components\Textarea::make('description'),
        ]);
    }

    public static function table(Table|Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('course.title')->label('Curso'),
            Tables\Columns\TextColumn::make('title')->searchable(),
        ]);
    }
    public static function afterCreate(CreateRecord $action, Lesson $record, array $data): void
    {
        if ($data['video_url']) {
            $record->addMedia($data['video'])->toMediaCollection('video_url');
        }
    }

    public static function afterUpdate(EditRecord $action, Lesson $record, array $data): void
    {
        if ($data['video_url']) {
            $record->clearMediaCollection('video_url');
            $record->addMedia($data['video_url'])->toMediaCollection('video_url');
        }
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}
