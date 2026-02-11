<?php

namespace App\Filament\Resources\Posts\Schemas;


use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->columnSpanFull()
                    ->schema([
                        Section::make('Content')
                            ->columnSpan(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true),
                                Textarea::make('short_description')
                                    ->columnSpanFull(),
                                RichEditor::make('content')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),

                        Section::make('Meta Data')
                            ->columnSpan(1)
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->image()
                                    ->directory('posts'),
                                DateTimePicker::make('published_at'),
                                Select::make('user_id')
                                    ->relationship('user', 'name')
                                    ->searchable()
                                    ->required(),
                                CheckboxList::make('categories')
                                    ->relationship('categories', 'name')
                                    ->searchable()
                                    ->bulkToggleable(),
                                CheckboxList::make('tags')
                                    ->relationship('tags', 'name')
                                    ->searchable()
                                    ->bulkToggleable()
                                    ->columns(2),
                            ]),
                    ]),
            ]);
    }
}
