<?php

namespace VendorName\Skeleton;

use Illuminate\Support\Facades\Http;
use VendorName\Skeleton\Exceptions\BusinessException;
use VendorName\Skeleton\Models\Admin;

class Skeleton
{
    public function addAdmin($name, $password): bool
    {
        $admin = new Admin;
        $admin->name = $name;
        $admin->password = $password;

        //        $admin->save();
        return true;
    }

    public function getAdminList()
    {
        return Admin::all();
    }

    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function get(array $param = []): array|BusinessException
    {
        $response = Http::get(config('skeleton.api_url').'/get', $param);

        //        AssertUtils::isTrue($response->status() != 200,"请求失败");
        return json_decode($response->body(), true);
    }
}
