<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ShortLink;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DeleteFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete files that are over one week old';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to delete files older than one week...');

        // Get all ShortLinks where the created_at is older than one week
        $expiredLinks = ShortLink::where('created_at', '<', Carbon::now()->subWeek())->get();

        foreach ($expiredLinks as $link) {
            // Delete the file from storage
            if (Storage::disk('public')->exists($link->path)) {
                Storage::disk('public')->delete($link->path);
                $this->info("Deleted file: {$link->path}");
            } else {
                $this->warn("File not found: {$link->path}");
            }

            // Delete the ShortLink record from the database
            $link->delete();
            $this->info("Deleted database record for short link: {$link->short_link}");
        }

        $this->info('File deletion process completed.');
    }
}
