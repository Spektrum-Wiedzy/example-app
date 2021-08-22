<?php

namespace App\Http\Controllers;

use App\Models\DayOffer;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;
use Inertia\Response;

class FavoritesController extends Controller
{
    public function addToFavorites(Product $product): RedirectResponse
    {
        $product->update(['favorite' => true]);

        return redirect()->back();
    }

    public function removeFromFavorites(Product $product): RedirectResponse
    {
        $product->update(['favorite' => false]);

        return redirect()->back();
    }
}
