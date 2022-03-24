<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SettingsController extends Controller
{
    // Account Settings account
    public function account_settings_account()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Account"]];
        return view('/content/apps/settings/page-account-settings-account', ['breadcrumbs' => $breadcrumbs]);
    }

     //Settings roles
     public function settings_roles()
     {
        $roles = Role::orderBy('id','DESC')->paginate(5);

        $rolesID = Role::all();

        // return $rolesID;
        $permissions = Permission::get();

        foreach ($roles as $key => $role) {
            $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$role->id)
            ->get();
        }

            
        // return $permissionList;
         $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Connections"]];
         return view('/content/apps/settings/settings-roles', ['breadcrumbs' => $breadcrumbs], compact('roles', 'rolePermissions','permissions'));
     }

     public function storeRole(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
        
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
    
        
        return redirect()->back()
                        ->with('success','Cargo criado com sucesso');
    }

    // Account Settings security
    public function account_settings_security()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Security"]];
        return view('/content/pages/page-account-settings-security', ['breadcrumbs' => $breadcrumbs]);
    }

    // Account Settings billing
    public function account_settings_billing()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Billing & Plans"]];
        return view('/content/pages/page-account-settings-billing', ['breadcrumbs' => $breadcrumbs]);
    }

    // Account Settings notifications
    public function account_settings_notifications()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Account Settings"], ['name' => "Notifications"]];
        return view('/content/pages/page-account-settings-notifications', ['breadcrumbs' => $breadcrumbs]);
    }

    // Profile
    public function profile()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Profile"]];

        return view('/content/pages/page-profile', ['breadcrumbs' => $breadcrumbs]);
    }

    // FAQ
    public function faq()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "FAQ"]];
        return view('/content/pages/page-faq', ['breadcrumbs' => $breadcrumbs]);
    }

    // Knowledge Base
    public function knowledge_base()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Knowledge Base"]];
        return view('/content/pages/page-knowledge-base', ['breadcrumbs' => $breadcrumbs]);
    }

    // Knowledge Base Category
    public function kb_category()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "/page/knowledge-base", 'name' => "Knowledge Base"], ['name' => "Category"]];
        return view('/content/pages/page-kb-category', ['breadcrumbs' => $breadcrumbs]);
    }

    // Knowledge Base Question
    public function kb_question()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "/page/knowledge-base", 'name' => "Knowledge Base"], ['link' => "/page/knowledge-base/category", 'name' => "Category"], ['name' => "Question"]];
        return view('/content/pages/page-kb-question', ['breadcrumbs' => $breadcrumbs]);
    }

    // pricing
    public function pricing()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/pages/page-pricing', ['pageConfigs' => $pageConfigs]);
    }

    // api key
    public function api_key()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/pages/page-api-key', ['pageConfigs' => $pageConfigs]);
    }

    // blog list
    public function blog_list()
    {
        $pageConfigs = ['contentLayout' => 'content-detached-right-sidebar', 'bodyClass' => 'content-detached-right-sidebar'];

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "List"]];

        return view('/content/pages/page-blog-list', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    }

    // blog detail
    public function blog_detail()
    {
        $pageConfigs = ['contentLayout' => 'content-detached-right-sidebar', 'bodyClass' => 'content-detached-right-sidebar'];

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "Detail"]];

        return view('/content/pages/page-blog-detail', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    }

    // blog edit
    public function blog_edit()
    {

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "Edit"]];

        return view('/content/pages/page-blog-edit', ['breadcrumbs' => $breadcrumbs]);
    }

    // modal examples
    public function modal_examples()
    {

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['name' => "Modal Examples"]];

        return view('/content/pages/modal-examples', ['breadcrumbs' => $breadcrumbs]);
    }

    // license
    public function license()
    {

        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "License"]];

        return view('/content/pages/page-license', ['breadcrumbs' => $breadcrumbs]);
    }
}
