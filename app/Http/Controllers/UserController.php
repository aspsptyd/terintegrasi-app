<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User as ModelUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.siswa_index', [
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
            'route' => 'user.store',
            'button' => 'Simpan Data',
            'hintpassword' => 'Ketikan password disini'
        ];
        return view('administrator.siswa_form', $data);
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
        flash('Data siswa berhasil disimpan');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'route' => ['user.update', $id],
            'button' => 'Update Data',
            'hintpassword' => 'Ketikan password jika ingin mengubah'
        ];
        return view('administrator.siswa_form', $data);
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
        flash('Data siswa berhasil di perbaharui');
        return redirect()->route('user.index');
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
        flash('Data berhasil di hapus dari database!');
        return redirect()->route('user.index');
    }
}
