<?php

/*
|--------------------------------------------------------------------------
| 权限码配置
|--------------------------------------------------------------------------
|
| 各身份的权限码集中在此配置
| 本示例配置以user和admin进行说明
|
| 对于一个身份来说，一个完整的权限码为：模块.权限
| 作为普通用户 user 时，检查其是否具有发布文章权限时，完整的权限码为：article.add
|
*/


/*
|--------------------------------------------------------------------------
| 普通用户权限码
|--------------------------------------------------------------------------
*/
$user = [
    //模块 article
    'article' => [
        'name' => '文章', // 模块名称
        // 模块下的权限设置
        'permissions' => [
            'add' => ['name' => '发布文章', 'description' => '发布文章'],// add 权限及其说明
            'edit' => ['name' => '编辑文章', 'description' => '只能编辑自己发布的文章'],// edit 权限及其说明

            // 其他权限 ...
        ],
    ],

    // 其他模块 ...
];

/*
|--------------------------------------------------------------------------
| 后台管理员权限码
|--------------------------------------------------------------------------
*/
$admin = [
    'article' => [
        'name' => '文章管理',
        'permissions' => [
            'article' => ['name' => '文章管理', 'description' => '管理所有文章'],
            'comment' => ['name' => '评论管理', 'description' => '管理所有文章评论'],
            'tag' => ['name' => '标签管理', 'description' => '管理所有文章标签'],

            // ...
        ],
    ],
    'user' => [
        'name' => '用户管理',
        'permissions' => [
            'create' => ['name' => '添加用户', 'description' => '添加用户'],
            'edit' => ['name' => '编辑用户', 'description' => '编辑用户'],
            'enable' => ['name' => '启用用户', 'description' => '启用用户'],
            'disable' => ['name' => '禁用用户', 'description' => '禁用用户'],
            'delete' => ['name' => '删除用户', 'description' => '删除用户'],

            // ...
        ],
    ],

    // ...
];


// 注意要把所有身份权限定义组装成数组返回
return compact('user', 'admin');