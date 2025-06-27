<?php

namespace VendorName\Skeleton;

use App\Models\Admin;

class Skeleton
{
    public function getAdminList()
    {
        return Admin::all();
    }
}
