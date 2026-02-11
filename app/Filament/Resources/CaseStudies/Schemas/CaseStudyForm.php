<?php

namespace App\Filament\Resources\CaseStudies\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CaseStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Grid::make(3)
                    ->columnSpanFull()
                    ->schema([
                        \Filament\Schemas\Components\Section::make('Case Study Details')
                            ->columnSpan(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (\Filament\Schemas\Components\Utilities\Set $set, ?string $state) => $set('slug', \Illuminate\Support\Str::slug($state))),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true),
                                TextInput::make('client_name')
                                    ->required(),
                                TextInput::make('industry')
                                    ->required(),
                                \Filament\Forms\Components\RichEditor::make('challenge')
                                    ->required()
                                    ->columnSpanFull(),
                                \Filament\Forms\Components\RichEditor::make('solution')
                                    ->required()
                                    ->columnSpanFull(),
                                \Filament\Forms\Components\RichEditor::make('results')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),

                        \Filament\Schemas\Components\Section::make('Meta Data')
                            ->columnSpan(1)
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->image()
                                    ->directory('case-studies'),
                                DateTimePicker::make('published_at'),
                                \Filament\Forms\Components\KeyValue::make('key_metrics')
                                    ->keyLabel('Metric Name')
                                    ->valueLabel('Value')
                                    ->reorderable(),
                            ]),
                    ]),
            ]);
    }
}
