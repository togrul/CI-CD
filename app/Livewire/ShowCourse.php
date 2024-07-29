<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use Filament\Infolists\Infolist;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;

class ShowCourse extends Component implements HasInfolists,HasForms
{
    use InteractsWithInfolists,InteractsWithForms;

    public Course $course;

    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function courseInfolist(Infolist $infolist) : Infolist
    {
        return $infolist
            ->record($this->course)
            ->schema([
                TextEntry::make('title'),
                Section::make('Media')
                ->description('Images used in the page layout.')
                ->schema([
                    ImageEntry::make('hero_image'),
                    TextEntry::make('alt_text'),
                ])
            ]);
    }

    public function render()
    {
        return view('livewire.show-course');
    }
}
