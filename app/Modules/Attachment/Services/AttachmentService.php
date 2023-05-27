<?php

namespace App\Modules\Attachment\Services;

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

    public function show(Attachment $model)
    {
        $file = Storage::get($model->path);
        $type = Storage::mimeType($model->path);

        if(!$file) abort(405, trans('messages.attachment_expired'));

        $response = \Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function store(array $request): Attachment
    {
        $request['extension'] = $request['file']->extension();
        $request['file'] = time().'.'.$request['extension'];
        $request['size'] = request()->file->getSize();
        $request['path'] = Storage::putFileAs($request['path'], request()->file, $request['file']);
        if(!$request['path']){
            throwErr('Failed upload to s3 bucket');
        }

        return $this->model->create($request);
    }

    public function delete(Attachment $model)
    {
        $status = Storage::delete($model->path);
        if(!$status){
            throwErr('Failed to remove at s3 bucket');
        }
        $model->delete();
    }
}
