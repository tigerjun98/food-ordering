<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Modules\Admin\Profile\Requests\ProfileStoreRequest;
use App\Modules\Admin\Profile\Services\ProfileService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use ApiResponser;

    private Admin $model;
    private ProfileService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Admin();
        $this->service = new ProfileService();
    }

    public function show($adminId)
    {
        return html('admin.profile.index', [
            'data' => $this->model->findOrFail($adminId)
        ]);
    }

    public function store(ProfileStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }
}
