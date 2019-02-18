<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;
use App\Setting;
use App\Http\Requests\Admin\Setting as SettingRequest;

class SettingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $main = Setting::find(1);
        return view('admin.settings.index', compact('main'));
    }

    /**
     * @param SettingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SettingRequest $request)
    {
        Setting::find(1)->update($request->all());
        return redirect()->route('settings.index')->with('success', __('admin.updated-success'));
    }
}