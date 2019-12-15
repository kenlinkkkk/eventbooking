<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Service\ServiceAddRequest;
use App\Http\Requests\Service\ServiceUpdateRequest;
use App\Repositories\Admin\ServiceEloquentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function __construct(ServiceEloquentRepository $serviceEloquentRepository)
    {
        $this->serviceEloquentRepository = $serviceEloquentRepository;
    }

    public function index()
    {
        $services = $this->serviceEloquentRepository->getAll();

        $data = compact(
            'services'
        );

        return view('admin.service.index', $data);
    }

    public function add()
    {
        return view('admin.service.add');
    }

    public function edit($id_service)
    {
        $service = $this->serviceEloquentRepository->find($id_service);

        $data = compact(
            'service'
        );

        return view('admin.center.edit', $data);
    }

    public function create(ServiceAddRequest $request)
    {
        $data = $request->except('_token');

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = upload($request->thumbnail, 1);
        }

        if ($request->hasFile('pictures')) {
            $data['pictures'] = upload($request->pictures, 2);
        }

        $result = $this->serviceEloquentRepository->create($data);

        if ($result) {
            $request->session()->flash('success', 'Thành công');
        } else {
            $request->session()->flash('error', 'Thất bại');
        }

        return redirect(route('admin.service.index'));
    }

    public function update(ServiceUpdateRequest $request, $id_service)
    {
        $data = $request->except('_token');

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = upload($request->thumbnail, 1);
        }

        if ($request->hasFile('pictures')) {
            $data['pictures'] = upload($request->pictures, 2);
        }

        $result = $this->serviceEloquentRepository->update($id_service, $data);

        if ($result) {
            $request->session()->flash('success', 'Thành công');
        } else {
            $request->session()->flash('error', 'Thất bại');
        }

        return redirect(route('admin.service.index'));
    }

    public function delete(Request $request, $id_service)
    {
        $result = $this->serviceEloquentRepository->delete($id_service);

        if ($result) {
            $request->session()->flash('success', 'Thành công');
        } else {
            $request->session()->flash('error', 'Thất bại');
        }

        return redirect()->back();
    }
}
