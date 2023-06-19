<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User as ModelUser;
use Carbon\Carbon;

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
                            ->paginate(50)
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
        $requestdata['email_verified_at'] = Carbon::now();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
