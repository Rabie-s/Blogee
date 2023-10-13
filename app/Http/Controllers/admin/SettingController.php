<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings.settings', ['setting' => Setting::findOrFail(1)]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'site_title'=>'required',
            'site_icon'=>'image|mimes:jpg,png,jpeg|max:1024'
        ]);

        $settings = Setting::findOrFail(1);
        if ($request->hasFile('site_icon')) {
            fileDelete($settings->site_icon,'assets/siteIcon');
            $site_icon = fileUpload($request->site_icon, 'assets/siteIcon');
            $settings->site_icon = $site_icon;
        }

        $settings->site_title = $request->site_title;
        $settings->about_page_content = $request->about_page_content;
        $settings->save();
        return redirect()->back()->with('success','Settings update successful');
    }
}
