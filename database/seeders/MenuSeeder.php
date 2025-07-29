<?php

namespace Database\Seeders;

use App\Models\Menu; // Correct import
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->datas() as $key => $value) {
            $this->createMenu($value);
        }
    }

    private function createMenu($data, $parent_id = null)
    {
        $menu = new Menu([
            'name' => $data['name'],
            'icon' => $data['icon'],
            'route' => $data['route'],
            'description' => $data['description'],
            'sorting' => $data['sorting'],
            'parent_id' => $parent_id,
            'permission_name' => $data['permission_name'],
            'status' => $data['status'],
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);

        $menu->save();

        if (isset($data['children']) && is_array($data['children'])) {
            foreach ($data['children'] as $child) {
                $this->createMenu($child, $menu->id);
            }
        }
    }

    private function datas()
    {
        return [
            [
                'name' => 'Dashboard',
                'icon' => 'home',
                'route' => 'backend.dashboard',
                'description' => null,
                'sorting' => 1,
                'permission_name' => 'dashboard',
                'status' => 'Active',
            ],
            [
                'name' => 'Module Make',
                'icon' => 'slack',
                'route' => 'backend.moduleMaker',
                'description' => null,
                'sorting' => 1,
                'permission_name' => 'module maker',
                'status' => 'Active',
            ],
            [
                'name' => 'User Manage',
                'icon' => 'list',
                'route' => null,
                'description' => null,
                'sorting' => 1,
                'permission_name' => 'user-management',
                'status' => 'Active',
                'children' => [
                    [
                        'name' => 'User Add',
                        'icon' => 'plus-circle',
                        'route' => 'backend.admin.create',
                        'description' => null,
                        'sorting' => 1,
                        'permission_name' => 'Admin-add',
                        'status' => 'Active',
                    ],
                    [
                        'name' => 'User List',
                        'icon' => 'list',
                        'route' => 'backend.admin.index',
                        'description' => null,
                        'sorting' => 1,
                        'permission_name' => 'Admin-list',
                        'status' => 'Active',
                    ],
                ],
            ],
            [
                'name' => 'Permission Manage',
                'icon' => 'unlock',
                'route' => null,
                'description' => null,
                'sorting' => 1,
                'permission_name' => 'permission-management',
                'status' => 'Active',
                'children' => [
                    [
                        'name' => 'Permission Add',
                        'icon' => 'plus-circle',
                        'route' => 'backend.permission.create',
                        'description' => null,
                        'sorting' => 1,
                        'permission_name' => 'permission-add',
                        'status' => 'Active',
                    ],
                    [
                        'name' => 'Permission List',
                        'icon' => 'list',
                        'route' => 'backend.permission.index',
                        'description' => null,
                        'sorting' => 1,
                        'permission_name' => 'permission-list',
                        'status' => 'Active',
                    ],
                ],
            ],
            [
                'name' => 'Role Manage',
                'icon' => 'layers',
                'route' => null,
                'description' => null,
                'sorting' => 1,
                'permission_name' => 'role-management',
                'status' => 'Active',
                'children' => [
                    [
                        'name' => 'Role Add',
                        'icon' => 'plus-circle',
                        'route' => 'backend.role.create',
                        'description' => null,
                        'sorting' => 1,
                        'permission_name' => 'role-add',
                        'status' => 'Active',
                    ],
                    [
                        'name' => 'Role List',
                        'icon' => 'list',
                        'route' => 'backend.role.index',
                        'description' => null,
                        'sorting' => 1,
                        'permission_name' => 'role-list',
                        'status' => 'Active',
                    ],
                ],
            ],



    [
        "name" => "Contact Manage",
        "icon" => "aperture",
        "route" => null,
        "description" => null,
        "sorting" => 1,
        "permission_name" => "Contact-management",
        "status" => "Active",
        "children" => [
            [
                "name" => "Contact Add",
                "icon" => "plus-circle",
                "route" => "backend.contact.create",
                "description" => null,
                "sorting" => 1,
                "permission_name" => "role-add",
                "status" => "Active",
            ],
            [
                "name" => "Contact List",
                "icon" => "list",
                "route" => "backend.contact.index",
                "description" => null,
                "sorting" => 1,
                "permission_name" => "role-list",
                "status" => "Active",
            ],
        ],
    ],

    [
        "name" => "Popular Food Manage",
        "icon" => "aperture",
        "route" => null,
        "description" => null,
        "sorting" => 1,
        "permission_name" => "popular-food-management",
        "status" => "Active",
        "children" => [
            [
                "name" => "Popular Food Add",
                "icon" => "plus-circle",
                "route" => "backend.popularfood.create",
                "description" => null,
                "sorting" => 1,
                "permission_name" => "role-add",
                "status" => "Active",
            ],
            [
                "name" => "Popular Food List",
                "icon" => "list",
                "route" => "backend.popularfood.index",
                "description" => null,
                "sorting" => 1,
                "permission_name" => "role-list",
                "status" => "Active",
            ],
        ],
    ],

    [
        "name" => "Best Selling Manage",
        "icon" => "aperture",
        "route" => null,
        "description" => null,
        "sorting" => 1,
        "permission_name" => "best-selling-management",
        "status" => "Active",
        "children" => [
            [
                "name" => "Best Selling Add",
                "icon" => "plus-circle",
                "route" => "backend.bestselling.create",
                "description" => null,
                "sorting" => 1,
                "permission_name" => "role-add",
                "status" => "Active",
            ],
            [
                "name" => "Best Selling List",
                "icon" => "list",
                "route" => "backend.bestselling.index",
                "description" => null,
                "sorting" => 1,
                "permission_name" => "role-list",
                "status" => "Active",
            ],
        ],
    ],


    [
        "name" => "Chef Manage",
        "icon" => "aperture",
        "route" => null,
        "description" => null,
        "sorting" => 1,
        "permission_name" => "Chef-management",
        "status" => "Active",
        "children" => [
            [
                "name" => "Chef Add",
                "icon" => "plus-circle",
                "route" => "backend.chef.create",
                "description" => null,
                "sorting" => 1,
                "permission_name" => "role-add",
                "status" => "Active",
            ],
            [
                "name" => "Chef List",
                "icon" => "list",
                "route" => "backend.chef.index",
                "description" => null,
                "sorting" => 1,
                "permission_name" => "role-list",
                "status" => "Active",
            ],
        ],
    ],



    [
        'name' => 'Location Manager',
        'icon' => 'map',
        'route' => null,
        'description' => null,
        'sorting' => 1,
        'parent_id' => null,
        'permission_name' => 'location-manager',
        'status' => 'Active',
        // 'created_at' => '2023-10-03 13:21:46',
        // 'updated_at' => '2023-10-03 13:21:46',
        'deleted_at' => null,
        'children' => [
            [
                'name' => 'Division List',
                'icon' => 'list',
                'route' => 'backend.division.index',
                'description' => null,
                'sorting' => 1,

                'permission_name' => 'division-list',
                'status' => 'Active',
                'created_at' => '2023-10-03 13:21:18',
                'updated_at' => '2023-10-03 13:21:18',
                'deleted_at' => null,
            ],
            [
                'name' => 'Division Add',
                'icon' => 'plus-circle',
                'route' => 'backend.division.create',
                'description' => null,
                'sorting' => 1,

                'permission_name' => 'division-add',
                'status' => 'Active',
                'created_at' => '2023-10-03 13:21:46',
                'updated_at' => '2023-10-03 13:21:46',
                'deleted_at' => null,
            ],
            [
                'name' => 'District List',
                'icon' => 'list',
                'route' => 'backend.district.index',
                'description' => null,
                'sorting' => 1,

                'permission_name' => 'district-list',
                'status' => 'Active',
                'created_at' => '2023-10-03 13:21:18',
                'updated_at' => '2023-10-03 13:21:18',
                'deleted_at' => null,
            ],
            [
                'name' => 'District Add',
                'icon' => 'plus-circle',
                'route' => 'backend.district.create',
                'description' => null,
                'sorting' => 1,

                'permission_name' => 'district-add',
                'status' => 'Active',
                'created_at' => '2023-10-03 13:21:46',
                'updated_at' => '2023-10-03 13:21:46',
                'deleted_at' => null,
            ],
            [
                'name' => 'Upazila List',
                'icon' => 'list',
                'route' => 'backend.upazila.index',
                'description' => null,
                'sorting' => 1,

                'permission_name' => 'upazila-list',
                'status' => 'Active',
                'created_at' => '2023-10-03 13:21:18',
                'updated_at' => '2023-10-03 13:21:18',
                'deleted_at' => null,
            ],
            [
                'name' => 'Upazila Add',
                'icon' => 'plus-circle',
                'route' => 'backend.upazila.create',
                'description' => null,
                'sorting' => 1,

                'permission_name' => 'upazila-add',
                'status' => 'Active',
                'created_at' => '2023-10-03 13:21:46',
                'updated_at' => '2023-10-03 13:21:46',
                'deleted_at' => null,
            ],
            [
                'name' => 'Union List',
                'icon' => 'list',
                'route' => 'backend.union.index',
                'description' => null,
                'sorting' => 1,

                'permission_name' => 'union-list',
                'status' => 'Active',
                'created_at' => '2023-10-03 13:21:18',
                'updated_at' => '2023-10-03 13:21:18',
                'deleted_at' => null,
            ],
            [
                'name' => 'Union Add',
                'icon' => 'plus-circle',
                'route' => 'backend.union.create',
                'description' => null,
                'sorting' => 1,

                'permission_name' => 'union-add',
                'status' => 'Active',
                'created_at' => '2023-10-03 13:21:46',
                'updated_at' => '2023-10-03 13:21:46',
                'deleted_at' => null,
            ],
        ],
    ],


    //don't remove this comment from menu seeder
        ];
    }
}
