<?php

namespace VendorName\Skeleton\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;

class SkeletonCommand extends Command
{
    public $signature = 'user:expire';

    public $description = '清理过期用户';

    public function handle(): int
    {
        Admin::where('status', 0)->delete();
        return self::SUCCESS;
    }
}
