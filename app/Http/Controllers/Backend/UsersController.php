<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest as StoreUserRequest;
use App\Http\Requests\UpdateUserRequest as UpdateUserRequest;
use App\Http\Requests\DeleteUserRequest as DeleteUserRequest;


use App\Http\Requests;

class UsersController extends Controller
{
    protected $users;

    function __construct(User $users)
    {
        $this->users = $users;
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->users->paginate(10);
        return View('backend.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('backend.users.form' , compact('user', '$user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $this->users->create($request->only('name', 'email', 'password'));
        return redirect(route('backend.users.index'))->with('status', 'User has beend created');
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
        $user = $this->users->findOrFail($id);
        return view('backend.users.form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->users->findOrFail($id);
        $user->fill($request->only('name', 'email' , 'password'))->save();
        return redirect(route('backend.users.edit', $user->id))->with('status', 'User has been updated');
    }

    public function confirm (DeleteUserRequest $id) {
      $user = $this->users->findOrFail($id);
      return view('backend.users.confirm', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteUserRequest $request ,$id)
    {
        $user = $this->users->findOrFail($id);
        $user->delete();
        return redirect(route('backend.users.index'))->with('status', 'User has been deleted');
    }
}
