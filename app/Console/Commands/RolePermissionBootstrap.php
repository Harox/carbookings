<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class RolePermissionBootstrap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel_api:bootstrap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create roles and permissions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
 public function handle()
    {

        $roles = ["SuperAdmin", "Administrator","Contabilidade","Comercial", "Piquete", "Tecnologias", "RH", "Oficinas"];

        $permissions = [
            "Manage All",
            "Create",
            "Edit",
            "Update",
            "View",
            "List",
            "View Report",
            "View User",
            "Create User",
            "Assign Role",
            "Unassign Role",
            "Create Provider",
            "Read Provider",
            "Update Provider",
            "Create Requests",
            "Update Requests",
            "Read Requests",
            "List Requests",
            "Create employees",
            "View employees",
            "Update employees",
            "Create Viatura",
            "Update Viatura",
            "View Viatura",
            "Create Bombas",
            "Update Bombas",
            "View Bombas",
            "create New_Order",
            "View Orders",
            "Update Orders",
            "Fill Fuel_To_Viatura",
            "Send Report_Request",
            "Trace Orders",
            "Manage Rotas",
            "Create Checklist",
            "Update Checklist",
        ];


        $this->line('------------- Setting Up Roles:');

        foreach ($roles as $role) {
            $role = Role::updateOrCreate(['name' => $role, 'guard_name' => 'api']);
            $this->info("Created " . $role->name . " Role");
        }

        $this->line('------------- Setting Up Permissions:');

        $superAdminRole = Role::where('name', "SuperAdmin")->first();

        // $user = User::create([
        //     'name' => 'Leonel A.Chihale',
        //     'email' => 'supportdesk@pfuxela.co.mz',
        //     'email_verified_at'=>now(),
        //     'is_active'=>'1',
        //     'password' => bcrypt('admin@support')
        // ]);

        $superUser = User::where('is_active',true)->first();
        $superUser->assignRole($superAdminRole);

        foreach ($permissions as $perm_name) {
            $permission = Permission::updateOrCreate(['name' => $perm_name,
                'guard_name' => 'api']);

            $superAdminRole->givePermissionTo($permission);
            $superUser->givePermissionTo($permission);
            $this->info("Created " . $permission->name . " Permission");
        }

        $this->info("All permissions are granted to Super Admin");
        $this->line('------------- Application Bootstrapping is Complete: \n');
    }
}
