<?php

namespace App\Http\Controllers\Backend;

use App\Models\Role;
use App\Models\User;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.users.index');
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.users.create');
        $roles = Role::getForSelect();
        return view('backend.users.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->filled('status'),
        ]);
        // upload images
        // upload images
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $ext = $image->extension();
            $file = time() . '.' . $ext;
            $image->storeAs('public/users', $file); //above 4 line process the image code
            $user->avatar =  $file; //ai code ta image ke insert kore
            $user->save();
        }
        notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('app.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        Gate::authorize('app.users.edit');
        $roles = Role::all();
        return view('backend.users.form', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => isset($request->password) ? Hash::make($request->password) : $user->password,
            'status' => $request->filled('status'),
        ]);
        // upload images
        if (request()->hasFile('avatar') && request('avatar') != '') {
            $imagePath = public_path('storage/post/' . $user->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }

            $image = $request->file('avatar');
            $ext = $image->extension();
            $file = time() . '.' . $ext;
            $image->storeAs('public/users', $file); //above 4 line process the image code
            $user->avatar =  $file; //ai code ta image ke insert kore
        }
        $user->save();
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('app.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Gate::authorize('app.users.destroy');

        $image_path = public_path("\storage\users\\") . $user->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        } else {
            $user->delete();
            //abort(404);
        }
        $user->delete();
        notify()->success("User Successfully Deleted", "Deleted");
        return back();
    }
    public function importUser(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }
    public function exportuser()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
