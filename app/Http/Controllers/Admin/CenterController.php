<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Center\CenterAddRequest;
use App\Http\Requests\Center\CenterUpdateRequest;
use App\Repositories\Admin\CenterEloquentRepository;
use App\Repositories\Admin\UserEloquentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CenterController extends Controller
{
    public function __construct(CenterEloquentRepository $centerEloquentRepository, UserEloquentRepository $userEloquentRepository)
    {
        $this->centerEloquentRepository = $centerEloquentRepository;
        $this->userEloquentRepository = $userEloquentRepository;
    }

    public function index()
    {
        $centers = $this->centerEloquentRepository->getAll();

        $data = compact(
            'centers'
        );

        return view('admin.center.index', $data);
    }

    public function add(CenterAddRequest $request)
    {
        return view('admin.center.add');
    }

    public function edit($id_center)
    {
        $center = $this->centerEloquentRepository->find($id_center);

        $data = compact(
            'center'
        );

        return view('admin.center.edit', $data);
    }

    public function create(CenterAddRequest $request)
    {
        $data = $request->except('_token');

        $address = [
            'street' => $data['street'],
            'county' => $data['county'],
            'district' => $data['district'],
            'city' => $data['city'],
        ];

        $data['address'] = json_encode($address);
        $data['short_tag'] = sluggify($data['name'], 96);
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = upload($request->thumbnail, 1);
        }

        if ($request->hasFile('pictures')) {
            $data['pictures'] = upload($request->pictures, 2);
        }

        $result = $this->centerEloquentRepository->create($data);

        if ($result) {
            $request->session()->flash('success', 'Thêm mới thành công');
        } else {
            $request->session()->flash('error', 'Thêm mới không thành công');
        }

        return redirect(route('admin.center.index'));
    }

    public function update(CenterUpdateRequest $request, $id_center)
    {
        $data = $request->except('_token');

        $address = [
            'street' => $data['street'],
            'county' => $data['county'],
            'district' => $data['district'],
            'city' => $data['city'],
        ];

        $data['address'] = json_encode($address);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = upload($request->thumbnail, 1);
        }

        if ($request->hasFile('pictures')) {
            $data['pictures'] = upload($request->pictures, 2);
        }

        $result = $this->centerEloquentRepository->update($id_center, $data);

        if ($result) {
            $request->session()->flash('success', 'Cập nhật thành công');
        } else {
            $request->session()->flash('error', 'Cập nhật không thành công');
        }
        return redirect(route('admin.center.index'));
    }

    public function delete(Request $request, $id_center)
    {
        $result = $this->centerEloquentRepository->delete($id_center);

        if ($result) {
            $request->session()->flash('success', 'Xóa thành công');
        } else {
            $request->session()->flash('success', 'Xóa không thành công');
        }

        return redirect()->back();
    }
}
