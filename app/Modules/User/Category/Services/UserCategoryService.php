<?php

namespace App\Modules\User\Category\Services;

use App\Models\Admin;
use App\Models\Attachment;
use App\Models\Category;
use App\Models\CategoryPreference;
use App\Models\OrderItem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\throwException;

class UserCategoryService
{
    private CategoryPreference $model;

    public function __construct()
    {
        $this->model = new CategoryPreference();
    }

    public function createIfNotExists()
    {
        $priority = 1;
        $categories = Category::orderBy('created_at', 'asc')->get();
        foreach ($categories as $category){

            $model = $this->model->where('user_id', auth()->id())->where('category_id', $category->id)->first();
            if(! $model){
                $this->model->create([
                    'priority'      => $priority++,
                    'category_id'   => $category->id,
                    'user_id'       => auth()->id()
                ]);
            }
        }
    }
    public function update(CategoryPreference $model, array $request)
    {

        $model->priority = $this->getBetweenQueuePriority($request);
        $model->save();

        return $model;
    }

    public function getBetweenQueuePriority($request): float
    {
        $higherQueue = $this->model->find($request['higher_queue_id'] ?? null);
        $lowerQueue = $this->model->find($request['lower_queue_id'] ?? null);

        if(!$higherQueue && !$lowerQueue){
            return 999;
        }

        if(!$higherQueue)
            $higherQueue = $this->model->where('priority', '>', $lowerQueue->priority)
                ->orderBy('priority', 'asc')
                ->first();

        if(!$lowerQueue)
            $lowerQueue = $this->model->where('priority', '<', $higherQueue->priority)
                ->orderBy('priority', 'desc')
                ->first();

        $lowerQueuePriority = $lowerQueue->priority ?? 0;
        $higherQueuePriority = $higherQueue->priority ?? 999;
        $priorityInBetween = self::abs_diff($lowerQueuePriority, $higherQueuePriority)/2;
        return $higherQueuePriority - $priorityInBetween;
    }

    public function abs_diff($v1, $v2) {
        $diff = $v1 - $v2;
        return $diff < 0 ? (-1) * $diff : $diff;
    }
}
