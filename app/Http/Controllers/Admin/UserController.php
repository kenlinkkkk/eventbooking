<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\User\UserAddRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Repositories\Admin\UserEloquentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(UserEloquentRepository $userEloquentRepository)
    {
        $this->userEloquentRepository = $userEloquentRepository;
    }

    public function index() {
        $users = $this->userEloquentRepository->getAll();

        $data = compact(
            'users'
        );

        return view('admin.user.index', $data);
    }

    public function add() {
        return view('admin.user.add');
    }

    public function edit($id_user) {
        $user = $this->userEloquentRepository->find($id_user);

        $data = compact(
            'user'
        );

        return view('admin.user.edit', $data);
    }

    public function create(UserAddRequest $request)
    {
        $data =  $request->except('_token');
        $data['avatar'] = 'https://thuthuatnhanh.com/wp-content/uploads/2018/07/avatar-vo-mat-cham-com.jpg';

        $result = $this->userEloquentRepository->create($data);

        if ($result) {
            $request->session()->flash('success', 'Thêm mới thành công');
        } else {
            $request->session()->flash('error', 'Thêm mới không thành công');
        }

        return redirect(route('admin.user.index'));
    }

    public function update(UserUpdateRequest $request, $id_user)
    {
        $data = $request->except('_token');

        $result = $this->userEloquentRepository->update($id_user, $data);

        if ($result) {
            $request->session()->flash('success', 'Thay đổi thông tin tài khoản thành công');
        } else {
            $request->session()->flash('error', 'Thay đổi thông tin tài khoản không thành công');
        }

        return redirect(route('admin.user.index'));
    }

    public function delete(Request $request, $id_user)
    {
        $result = $this->userEloquentRepository->delete($id_user);

        if ($result) {
            $request->session()->flash('success', 'Xóa tài khoản thành công');
        } else {
            $request->session()->flash('error', 'Xóa tài khoản không thành công');
        }

        return redirect()->back();
    }
}
