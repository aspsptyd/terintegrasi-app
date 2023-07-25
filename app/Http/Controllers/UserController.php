<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User as ModelUser;

class UserController extends Controller
{
    private $viewIndex = 'siswa_index';
    private $viewCreate = 'siswa_form';
    private $viewEdit = 'siswa_form';
    private $viewShow = 'siswa_detail';
    private $routePrefix = 'user';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.' . $this->viewIndex, [
            'modeluser' => ModelUser::where('roles', '=', 'siswa')
                            ->latest()
                            ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'modeluser' => new \App\Models\User(),
            'method' => 'POST',
            'route' => $this->routePrefix . '.store',
            'button' => 'Simpan Data',
            'page_info' => 'Tambah',

            // Hint Text Input
            'hintfullname' => 'Nama lengkap siswa',
            'hintemail' => 'Email : example@email.com',
            'hintpassword' => 'Ketikan password disini',
            'hintnowa' => 'No. WA: 081xxxxxxxxx'
        ];
        return view('administrator.' . $this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestdata = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone_number' => 'required|unique:users',
            'roles' => 'required|in:siswa',
            'password' => 'required',
        ]);
        $requestdata['password'] = bcrypt($requestdata['password']);
        $requestdata['phone_number_verified_at'] = now();
        ModelUser::create($requestdata);
        flash('Data siswa berhasil disimpan', 'warning');
        return redirect()->route($this->routePrefix . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'modeluser' => \App\Models\User::findOrFail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix . '.show', $id],
            'button' => 'Update Data',
            'page_info' => 'Detail',

            // Hint Text Input
            'hintfullname' => 'Nama lengkap siswa',
            'hintemail' => 'Email : example@email.com',
            'hintnowa' => 'No. WA: 081xxxxxxxxx',
            'hintpassword' => 'Ketikan password jika ingin mengubah'
        ];
        return view('administrator.' . $this->viewShow, $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'modeluser' => \App\Models\User::findOrFail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix . '.update', $id],
            'button' => 'Update Data',
            'page_info' => 'Ubah',

            // Hint Text Input
            'hintfullname' => 'Nama lengkap siswa',
            'hintemail' => 'Email : example@email.com',
            'hintnowa' => 'No. WA: 081xxxxxxxxx',
            'hintpassword' => 'Ketikan password jika ingin mengubah'
        ];
        return view('administrator.' . $this->viewEdit, $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestdata = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'phone_number' => 'required|unique:users,phone_number,' . $id,
            'roles' => 'required|in:siswa',
            'password' => 'nullable',
        ]);
        $update = ModelUser::findOrFail($id);
        if ($requestdata['password'] == "") {
            unset($requestdata['password']);
        } else {
            $requestdata['password'] = bcrypt($requestdata['password']);
        }
        $update->fill($requestdata);
        $update->save();
        flash('Data siswa berhasil di perbaharui', 'warning');
        return redirect()->route($this->routePrefix . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = ModelUser::findOrFail($id);
        $deleteData->delete();
        flash('Data berhasil di hapus dari database!', 'danger');
        return redirect()->route($this->routePrefix . '.index');
    }
}
