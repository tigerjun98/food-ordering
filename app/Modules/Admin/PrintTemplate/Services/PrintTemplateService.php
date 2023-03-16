<?php

namespace App\Modules\Admin\PrintTemplate\Services;

use App\Models\Admin;
use App\Models\PrintTemplate;
use App\Models\User;
use App\Modules\Admin\Role\Services\RoleService;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use function PHPUnit\Framework\throwException;

class PrintTemplateService
{
    private PrintTemplate $model;

    public function __construct()
    {
        $this->model = new PrintTemplate();
    }

    public function itemsToString($items): string
    {
        $str = '';
        foreach ( $items as $layout => $item ){
            foreach( $item as $key2 => $value){
                $str .= $layout.'-'.$key2.',';
            }
        }
        return $str;
    }

    public function store(array $request)
    {
        $data = array_except( $request, ['roles', 'password'] );
        $request['value'] = $this->itemsToString( $request['value'] );
        $request['name'] = $request['name'] == 'new'
            ? slugify($request['name'])
            : $request['name'];

        dd($request);



        $data['clinic_id'] = auth()->user()->clinic_id;
        $admin = $this->model->updateOrCreate([ 'name' => $request['name'] ], $data);
        $this->updatePassword($admin, $request);
        $this->assignRoles($admin, $request['roles']);

        return $admin;
    }

}
