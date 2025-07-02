<?php

namespace VendorName\Skeleton\Commands;

use Illuminate\Console\Command;
use VendorName\Skeleton\Models\Admin;

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
