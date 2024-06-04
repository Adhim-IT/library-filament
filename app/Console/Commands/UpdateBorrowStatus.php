<?php

namespace App\Console\Commands;

use App\Models\borrow;
use Illuminate\Console\Command;

class UpdateBorrowStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'borrow:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update status of overdue borrows';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $overdueBorrows = borrow::where('actual_return', '<', now())
                                ->whereNull('returned_at')
                                ->get();

        foreach ($overdueBorrows as $borrow) {
            $borrow->update(['returned_at' => now()]);
        }

        $this->info('Borrow status updated successfully.');
    }
}
