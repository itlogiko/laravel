<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use itLogiko\Laravel\Models\UserModel;
use itLogiko\Laravel\Requests\Admin\UserStoreRequest;
use itLogiko\Laravel\Requests\Admin\UserUpdateRequest;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return $this->json('Fetch successful.', 0, [
      'users' => UserModel::paginate(10),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param UserStoreRequest $request
   * @return \Illuminate\Http\Response
   */
  public function store(UserStoreRequest $request)
  {
    return $this->json('Store successful.', 0, [
      'user' => UserModel::create($request->validated()),
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param UserModel $user
   * @return \Illuminate\Http\Response
   */
  public function show(UserModel $user)
  {
    return $this->json('Fetch successful.', 0, [
      'user' => $user,
    ]);
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
    return $this->json('Update successful.', 0, [
      'user' => $user,
    ]);
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
    return $this->json('Destroy successful.', 0, [
      'user' => $user,
    ]);
  }
}
