<?php

namespace App\Http\Controllers;

use App\Models\ThemeSetting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ThemeSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'data-layout' => ['nullable', 'in:vertical,horizontal,twocolumn,semibox'],
            'data-layout-style' => ['nullable', 'in:default,detached'],
            'data-layout-position' => ['nullable', 'in:fixed,scrollable'],
            'data-layout-width' => ['nullable', 'in:fluid,boxed'],
            'data-topbar' => ['nullable', 'in:light,dark'],
            'data-sidebar' => ['nullable', 'in:light,dark,gradient,gradient-2,gradient-3,gradient-4'],
            'data-sidebar-size' => ['nullable', 'in:lg,sm,md,sm-hover,sm-hover-active'],
            'data-sidebar-image' => ['nullable', 'in:none,img-1,img-2,img-3,img-4'],
            'data-sidebar-visibility' => ['nullable', 'in:show,hidden'],
            'data-bs-theme' => ['nullable', 'in:light,dark'],
            'data-preloader' => ['nullable', 'in:disable,enable'],
            'data-body-image' => ['nullable', 'in:none,img-1,img-2,img-3'],
            'locale' => ['nullable', 'in:en,sp,gr,it,ru,ch,fr,id,ae'],
        ]);

        $attributes = array_merge(ThemeSetting::defaults(), array_filter($validated, static fn ($value) => $value !== null));

        $setting = ThemeSetting::query()->firstOrCreate(['id' => 1], ThemeSetting::toDbColumns(ThemeSetting::defaults()));
        $setting->fill(ThemeSetting::toDbColumns($attributes));
        $setting->save();

        return response()->json([
            'message' => 'Theme settings updated.',
            'data' => ThemeSetting::fromModel($setting),
        ]);
    }
}
