<?php

it('can test', function () {
     $this->get("/",["name"=>"orangbus"])->ddBody();
    $this->assertTrue(true,"ok");
});

it('获取用户列表', function () {
    $app = new \VendorName\Skeleton\Skeleton();
    $list = $app->getAdminList();
    dump($list);
});

it('添加用户', function () {
    $app = new \VendorName\Skeleton\Skeleton();
    $user = $app->addAdmin("orangbus","123456");
    $this->assertSame(true, $user);
});
it('加法计算', function () {
    $app = new \VendorName\Skeleton\Skeleton();
    $number = $app->add(1,2);
    $this->assertSame(3, $number);
});

it('请求测试', function () {
    $app = new \VendorName\Skeleton\Skeleton();
    $res = $app->get([
        "name" => "orangbus"
    ]);
    dump($res);
    $this->assertTrue(true,"ok");
});
