<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class ThemeSetting extends Model
{
    protected $fillable = [
        'data_layout',
        'data_layout_style',
        'data_layout_position',
        'data_layout_width',
        'data_topbar',
        'data_sidebar',
        'data_sidebar_size',
        'data_sidebar_image',
        'data_sidebar_visibility',
        'data_bs_theme',
        'data_preloader',
        'data_body_image',
        'locale',
    ];

    public static function defaults(): array
    {
        return [
            'data-layout' => 'vertical',
            'data-layout-style' => 'default',
            'data-layout-position' => 'fixed',
            'data-layout-width' => 'fluid',
            'data-topbar' => 'light',
            'data-sidebar' => 'dark',
            'data-sidebar-size' => 'lg',
            'data-sidebar-image' => 'none',
            'data-sidebar-visibility' => 'show',
            'data-bs-theme' => 'light',
            'data-preloader' => 'disable',
            'data-body-image' => 'none',
            'locale' => 'en',
        ];
    }

    public static function resolved(): array
    {
        $defaults = static::defaults();

        try {
            if (! Schema::hasTable('theme_settings')) {
                return $defaults;
            }

            $setting = static::query()->first();

            if (! $setting) {
                $setting = static::query()->create(static::toDbColumns($defaults));
            }

            return array_merge($defaults, static::fromModel($setting));
        } catch (\Throwable $th) {
            return $defaults;
        }
    }

    public static function toDbColumns(array $attributes): array
    {
        return [
            'data_layout' => $attributes['data-layout'] ?? static::defaults()['data-layout'],
            'data_layout_style' => $attributes['data-layout-style'] ?? static::defaults()['data-layout-style'],
            'data_layout_position' => $attributes['data-layout-position'] ?? static::defaults()['data-layout-position'],
            'data_layout_width' => $attributes['data-layout-width'] ?? static::defaults()['data-layout-width'],
            'data_topbar' => $attributes['data-topbar'] ?? static::defaults()['data-topbar'],
            'data_sidebar' => $attributes['data-sidebar'] ?? static::defaults()['data-sidebar'],
            'data_sidebar_size' => $attributes['data-sidebar-size'] ?? static::defaults()['data-sidebar-size'],
            'data_sidebar_image' => $attributes['data-sidebar-image'] ?? static::defaults()['data-sidebar-image'],
            'data_sidebar_visibility' => $attributes['data-sidebar-visibility'] ?? static::defaults()['data-sidebar-visibility'],
            'data_bs_theme' => $attributes['data-bs-theme'] ?? static::defaults()['data-bs-theme'],
            'data_preloader' => $attributes['data-preloader'] ?? static::defaults()['data-preloader'],
            'data_body_image' => $attributes['data-body-image'] ?? static::defaults()['data-body-image'],
            'locale' => $attributes['locale'] ?? static::defaults()['locale'],
        ];
    }

    public static function fromModel(self $setting): array
    {
        return [
            'data-layout' => $setting->data_layout,
            'data-layout-style' => $setting->data_layout_style,
            'data-layout-position' => $setting->data_layout_position,
            'data-layout-width' => $setting->data_layout_width,
            'data-topbar' => $setting->data_topbar,
            'data-sidebar' => $setting->data_sidebar,
            'data-sidebar-size' => $setting->data_sidebar_size,
            'data-sidebar-image' => $setting->data_sidebar_image,
            'data-sidebar-visibility' => $setting->data_sidebar_visibility,
            'data-bs-theme' => $setting->data_bs_theme,
            'data-preloader' => $setting->data_preloader,
            'data-body-image' => $setting->data_body_image,
            'locale' => $setting->locale,
        ];
    }
}
