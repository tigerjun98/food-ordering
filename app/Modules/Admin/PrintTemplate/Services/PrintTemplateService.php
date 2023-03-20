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

    public function store(array $request): PrintTemplate
    {
        $request['value'] = $this->itemsToString( $request['value'] );
        $request['name'] = $request['name'] == 'new'
            ? slugify($request['name_en'])
            : $this->model->findOrFail($request['name'])->name;

        $template = $this->model->updateOrCreate([ 'name' => $request['name'] ], $request);

        return $template;
    }

    public function delete(PrintTemplate $model)
    {
        $model->delete();
    }

}
