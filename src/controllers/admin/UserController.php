<?php

namespace itLogiko\Laravel\Controllers\Admin;

use itLogiko\Laravel\Models\UserModel;
use itLogiko\Laravel\Requests\Admin\UserStoreRequest;
use itLogiko\Laravel\Requests\Admin\UserUpdateRequest;
use function redirect;
use function view;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = UserModel::paginate(10);
    return view('itlogiko::pages.admin.users.index')
      ->with('users', $users);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('itlogiko::pages.admin.users.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param UserStoreRequest $request
   * @return \Illuminate\Http\Response
   */
  public function store(UserStoreRequest $request)
  {
    $user = UserModel::create($request->validated());
    return redirect()
      ->route($this->adminRouteName . 'users.show', $user)
      ->with('success', 'Store successful.');
  }

  /**
   * Display the specified resource.
   *
   * @param UserModel $user
   * @return \Illuminate\Http\Response
   */
  public function show(UserModel $user)
  {
    return view('itlogiko::pages.admin.users.show')
      ->with('user', $user);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param UserModel $user
   * @return \Illuminate\Http\Response
   */
  public function edit(UserModel $user)
  {
    return view('itlogiko::pages.admin.users.edit')
      ->with('user', $user);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param UserUpdateRequest $request
   * @param UserModel $user
   * @return \Illuminate\Http\Response
   */
  public function update(UserUpdateRequest $request, UserModel $user)
  {
    $user->update($request->validated());
    return redirect()
      ->route($this->adminRouteName . 'users.show', $user)
      ->with('success', 'Update successful.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param UserModel $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(UserModel $user)
  {
    $user->delete();
    return redirect()
      ->route($this->adminRouteName . 'users.index')
      ->with('success', 'Destroy successful.');
  }
}
