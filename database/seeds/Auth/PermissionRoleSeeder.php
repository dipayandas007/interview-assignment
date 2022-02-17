<?php

use App\Models\Auth\Role;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

/**
 * Class PermissionRoleSeeder.
 */
class PermissionRoleSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('permission_role');

        // Assign permission to user role
        $userPermission = [1, // Backend
            22, 23, 24, 25, // Galleries
        ];
        Role::find(2)->permissions()->sync($userPermission);

        $this->enableForeignKeys();
    }
}
