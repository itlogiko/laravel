<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use itLogiko\Laravel\Models\AdminModel;
use itLogiko\Laravel\Requests\Admin\AdminStoreRequest;
use itLogiko\Laravel\Requests\Admin\AdminUpdateRequest;

class AdminController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return $this->json('Fetch successful.', 0, [
      'admins' => AdminModel::paginate(10),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param AdminStoreRequest $request
   * @return \Illuminate\Http\Response
   */
  public function store(AdminStoreRequest $request)
  {
    return $this->json('Store successful.', 0, [
      'admin' => AdminModel::create($request->validated()),
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param AdminModel $admin
   * @return \Illuminate\Http\Response
   */
  public function show(AdminModel $admin)
  {
    return $this->json('Fetch successful.', 0, [
      'admin' => $admin,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param AdminUpdateRequest $request
   * @param AdminModel $admin
   * @return \Illuminate\Http\Response
   */
  public function update(AdminUpdateRequest $request, AdminModel $admin)
  {
    $admin->update($request->validated());
    return $this->json('Update successful.', 0, [
      'admin' => $admin,
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param AdminModel $admin
   * @return \Illuminate\Http\Response
   */
  public function destroy(AdminModel $admin)
  {
    $admin->delete();
    return $this->json('Destroy successful.', 0, [
      'admin' => $admin,
    ]);
  }
}
