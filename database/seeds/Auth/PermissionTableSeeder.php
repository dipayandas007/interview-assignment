<?php

use App\Models\Auth\Permission;
use Carbon\Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

/**
 * Class PermissionTableSeeder.
 */
class PermissionTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncateMultiple(['permissions', 'permission_role']);

        /**
         * Don't need to assign any permissions to administrator because the all flag is set to true
         * in RoleTableSeeder.php.
         */

        /**
         * Misc Access Permissions.
         */
        // $viewBackend = new Permission();
        // $viewBackend->name = 'view-backend';
        // $viewBackend->display_name = 'View Backend';
        // $viewBackend->sort = 1;
        // $viewBackend->created_by = 1;
        // $viewBackend->updated_by = null;
        // $viewBackend->created_at = Carbon::now();
        // $viewBackend->updated_at = Carbon::now();
        // $viewBackend->deleted_at = null;
        // $viewBackend->save();

        // $viewFrontend = new Permission();
        // $viewFrontend->name = 'view-frontend';
        // $viewFrontend->display_name = 'View Frontend';
        // $viewFrontend->sort = 2;
        // $viewFrontend->created_by = 1;
        // $viewFrontend->updated_by = null;
        // $viewFrontend->created_at = Carbon::now();
        // $viewFrontend->updated_at = Carbon::now();
        // $viewFrontend->deleted_at = null;
        // $viewFrontend->save();

        /**
         * Access Management.
         */
        $viewBackend = new Permission();
        $viewBackend->name = 'view-access-management';
        $viewBackend->display_name = 'View Access Management';
        $viewBackend->sort = 3;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        /**
         * User Management.
         */
        $viewBackend = new Permission();
        $viewBackend->name = 'view-user-management';
        $viewBackend->display_name = 'View User Management';
        $viewBackend->sort = 4;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'view-active-user';
        $viewBackend->display_name = 'View Active User';
        $viewBackend->sort = 5;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'view-deactive-user';
        $viewBackend->display_name = 'View Deactive User';
        $viewBackend->sort = 6;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'view-deleted-user';
        $viewBackend->display_name = 'View Deleted User';
        $viewBackend->sort = 7;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'show-user';
        $viewBackend->display_name = 'Show User Details';
        $viewBackend->sort = 8;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'create-user';
        $viewBackend->display_name = 'Create User';
        $viewBackend->sort = 9;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'edit-user';
        $viewBackend->display_name = 'Edit User';
        $viewBackend->sort = 9;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'delete-user';
        $viewBackend->display_name = 'Delete User';
        $viewBackend->sort = 10;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'activate-user';
        $viewBackend->display_name = 'Activate User';
        $viewBackend->sort = 11;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'deactivate-user';
        $viewBackend->display_name = 'Deactivate User';
        $viewBackend->sort = 12;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'login-as-user';
        $viewBackend->display_name = 'Login As User';
        $viewBackend->sort = 13;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'clear-user-session';
        $viewBackend->display_name = 'Clear User Session';
        $viewBackend->sort = 14;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        /**
         * Role Management.
         */
        $viewBackend = new Permission();
        $viewBackend->name = 'view-role-management';
        $viewBackend->display_name = 'View Role Management';
        $viewBackend->sort = 15;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'create-role';
        $viewBackend->display_name = 'Create Role';
        $viewBackend->sort = 16;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'edit-role';
        $viewBackend->display_name = 'Edit Role';
        $viewBackend->sort = 17;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'delete-role';
        $viewBackend->display_name = 'Delete Role';
        $viewBackend->sort = 18;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        /**
         * Permission Management.
         */
        $viewBackend = new Permission();
        $viewBackend->name = 'view-permission-management';
        $viewBackend->display_name = 'View Permission Management';
        $viewBackend->sort = 19;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'create-permission';
        $viewBackend->display_name = 'Create Permission';
        $viewBackend->sort = 20;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'edit-permission';
        $viewBackend->display_name = 'Edit Permission';
        $viewBackend->sort = 21;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'delete-permission';
        $viewBackend->display_name = 'Delete Permission';
        $viewBackend->sort = 22;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        /**
         * Galleries.
         */
        $viewBackend = new Permission();
        $viewBackend->name = 'view-gallery';
        $viewBackend->display_name = 'View Gallery';
        $viewBackend->sort = 23;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'create-gallery';
        $viewBackend->display_name = 'Create Gallery';
        $viewBackend->sort = 24;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'edit-gallery';
        $viewBackend->display_name = 'Edit Gallery';
        $viewBackend->sort = 25;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $viewBackend = new Permission();
        $viewBackend->name = 'delete-gallery';
        $viewBackend->display_name = 'Delete Gallery';
        $viewBackend->sort = 26;
        $viewBackend->created_by = 1;
        $viewBackend->updated_by = null;
        $viewBackend->created_at = Carbon::now();
        $viewBackend->updated_at = Carbon::now();
        $viewBackend->deleted_at = null;
        $viewBackend->save();

        $this->enableForeignKeys();
    }
}
