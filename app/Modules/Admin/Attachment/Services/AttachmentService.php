<?php

namespace App\Modules\Admin\Attachment\Services;

use App\Models\Admin;
use App\Models\Attachment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\throwException;

class AttachmentService
{
    private Attachment $model;

    public function __construct()
    {
        $this->model = new Attachment();
    }

    public function store(array $request): Attachment
    {
        $request['extension'] = $request['file']->extension();
        $request['file'] = time().'.'.$request['extension'];
        $request['table'] = $request['table'] ?? $request['type'];
        $request['size'] = request()->file->getSize();
        $request['path'] = Storage::disk('s3')->putFileAs($request['path'] ?? $request['type'], request()->file, $request['file']);
        if(!$request['path']){
            throwErr('Failed upload to s3 bucket');
        }

        return $this->model->create($request);
    }

    public function delete(Attachment $model)
    {
        $status = Storage::disk('s3')->delete($model->path);
        if(!$status){
            throwErr('Failed to remove at s3 bucket');
        }
        $model->delete();
    }
}
