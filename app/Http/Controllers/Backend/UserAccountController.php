<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserPhotoUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Currency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.account')->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.settings')->with('user', Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);

        $user->update($request->validated());
        return redirect()->route('account.show', [$id])->with([
            'user', Auth::user(),
            'message', 'User Updated Successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Update Photo.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function photo(UserPhotoUpdateRequest $request)
    {
        $user = Auth::user()->id;
        $update_user = User::where('id', $user)->where('username', $request->username)->first();
        $imageName = $request->username . time() . '.' . $request->user_photo->extension();
        $request->user_photo->move(public_path('images/profile'), $imageName);

        /* Store $imageName name in DATABASE from HERE */


        if($update_user){
            $update_user->update([
                'photo' => $imageName,
            ]);
            return view('backend.settings')->with([
                'user', Auth::user(),
                'message', 'Image Uploaded Successfully'
            ]);
        }

        return view('backend.settings')->with([
            'user', Auth::user(),
            'error', 'Could not Upload Image'
        ]);
    }

    public function preferences()
    {
        $currencies = Currency::all();
        return view('backend.settings-preferences')->with([
            'user' => Auth::user(),
            'currencies' => $currencies,
        ]);
    }
}
