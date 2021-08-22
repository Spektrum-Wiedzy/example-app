<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\DayOffer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;
use function array_merge;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request) : array
    {
        return array_merge(parent::share($request), [
            'app' => [
                'name' => config('app.name'),
                'lang' => app()->getLocale(),
            ],
            'errors' => fn () => $request->session()->get('errors') ? $request->session()->get('errors')->getBag('default')->getMessages() : (object) [],
            'user' => fn () => [
                'favorites' => Product::where('favorite', true)->get()->pluck('id')
            ]
        ]);
    }
}
