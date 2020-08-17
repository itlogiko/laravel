<?php

namespace itLogiko\Laravel\Controllers\Admin;

use itLogiko\Laravel\Models\AdminModel;
use itLogiko\Laravel\Requests\Admin\AdminStoreRequest;
use itLogiko\Laravel\Requests\Admin\AdminUpdateRequest;
use function redirect;
use function view;

class AdminController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $admins = AdminModel::paginate(10);
    return view('itlogiko::pages.admin.admins.index')
      ->with('admins', $admins);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('itlogiko::pages.admin.admins.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param AdminStoreRequest $request
   * @return \Illuminate\Http\Response
   */
  public function store(AdminStoreRequest $request)
  {
    $admin = AdminModel::create($request->validated());
    return redirect()
      ->route($this->adminRouteName . 'admins.show', $admin)
      ->with('success', 'Store successful.');
  }

  /**
   * Display the specified resource.
   *
   * @param AdminModel $admin
   * @return \Illuminate\Http\Response
   */
  public function show(AdminModel $admin)
  {
    return view('itlogiko::pages.admin.admins.show')
      ->with('admin', $admin);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param AdminModel $admin
   * @return \Illuminate\Http\Response
   */
  public function edit(AdminModel $admin)
  {
    return view('itlogiko::pages.admin.admins.edit')
      ->with('admin', $admin);
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
    return redirect()
      ->route($this->adminRouteName . 'admins.show', $admin)
      ->with('success', 'Update successful.');
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
    return redirect()
      ->route($this->adminRouteName . 'admins.index')
      ->with('success', 'Destroy successful.');
  }
}
