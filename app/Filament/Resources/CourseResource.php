<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Models\Course;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;
    protected static ?string $navigationIcon = 'heroicon-m-academic-cap';
    protected static ?string $navigationLabel = 'Cursos';

    protected static ?string $navigationGroup = 'Gestão de Cursos';

    public static function form(Form|Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\Textarea::make('description'),
            Forms\Components\FileUpload::make('thumbnail')
                ->image()
                ->directory('thumbnails')
                ->visibility('public')
                ->label('Thumbnail')
                ->required(),
            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->label('Categoria')
                ->searchable()
                ->required(),
            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),
        ]);
    }

    public static function table(Table|Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->searchable(),
            Tables\Columns\TextColumn::make('category.name')->label('Categoria'),
            Tables\Columns\TextColumn::make('user.name')->label('Criado por'),
        ]);
    }
    public static function afterCreate(CreateRecord $action, Course $record, array $data): void
    {
        if ($data['thumbnail']) {
            $record->addMedia($data['thumbnail'])->toMediaCollection('thumbnail');
        }
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
