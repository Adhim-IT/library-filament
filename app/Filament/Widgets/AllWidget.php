<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\BookResource;
use App\Models\Book;
use App\Models\borrow;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AllWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New User', User::count())
                ->description('New users that have joined')
                ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40])
                ->color('success'),
            Stat::make('New Books', Book::count())
                ->description('New books that have been added')
                ->descriptionIcon('heroicon-o-book-open', IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40])
                ->color('danger'),
            Stat::make('New Borrows', borrow::count())
                ->description('Latest book loans today')
                ->descriptionIcon('heroicon-o-inbox-arrow-down', IconPosition::Before)
                ->chart([1, 3, 5, 10, 20, 40])
                ->color('warning'),


        ];
    }
}


