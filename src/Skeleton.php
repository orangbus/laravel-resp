<?php

namespace VendorName\Skeleton;

use App\Models\Admin;

class Skeleton {

    function getAdminList()
    {
        return Admin::all();
    }
}
