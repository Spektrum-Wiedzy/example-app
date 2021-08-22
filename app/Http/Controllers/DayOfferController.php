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

class DayOfferController extends Controller
{
    public function dayOffer(): Response
    {
        return Inertia::render('DayOffer', [
            'day_offer' => DayOffer::with('product.images')->first(),
        ]);
    }
}
