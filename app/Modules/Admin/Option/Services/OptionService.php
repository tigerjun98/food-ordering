<?php

namespace App\Modules\Admin\Option\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\User;
use App\Modules\Admin\User\Services\UserService;
use Carbon\Carbon;
use PhpParser\Node\Expr\AssignOp\Plus;
use function PHPUnit\Framework\throwException;

class OptionService
{
    private Option $model;

    public function __construct()
    {
        $this->model = new Option();
    }

    public function createIfNotExists(array $items, $type)
    {
        $arr = [];

        foreach ($items as $item){
            if(!$this->model->find($item)){
                $item = $this->store([
                    'type' => substr($type, 0, -1), // remove last 's' as type no 's' allow
                    'name_'.app()->getLocale() => $item
                ]);
                $item = $item->id;
            }
            $arr[] = $item;
        }
        return $arr;
    }

    public function store(array $request): Option
    {
        return $this->model->updateOrCreate(['id' => $request['id'] ?? new_id() ], $request);
    }

    public function occupied(Option $option): bool
    {
        return Consultation::where('specialists', 'like', '%'.$option->id.'%')
            ->orWhere('syndromes', 'like', '%'.$option->id.'%')
            ->orWhere('diagnoses', 'like', '%'.$option->id.'%')
            ->count() > 0;
    }

    public function delete(Option $option)
    {
        !self::occupied($option) ? $option->delete() : throwErr(trans('common.permission_denied'));
    }


}
