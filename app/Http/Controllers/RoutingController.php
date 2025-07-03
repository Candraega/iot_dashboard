<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RoutingController extends Controller
{
    public function __construct()
    {
        // middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function index(Request $request): RedirectResponse
    {
        // if (Auth::check()) {
            return redirect('login');
        // } else {
        //     return redirect('login');
        // }
    }

    /**
     * Display a view based on first route param
     *
     * @param Request $request
     * @param string $first
     * @return View|RedirectResponse
     */
    public function root(Request $request, string $first): View|RedirectResponse
    {
        if ($first === "assets") {
            return redirect('home');
        }

        return view($first);
    }

    /**
     * Second level route
     *
     * @param Request $request
     * @param string $first
     * @param string $second
     * @return View|RedirectResponse
     */
    public function secondLevel(Request $request, string $first, string $second): View|RedirectResponse
    {
        if ($first === "assets") {
            return redirect('home');
        }

        return view($first . '.' . $second);
    }

    /**
     * Third level route
     *
     * @param Request $request
     * @param string $first
     * @param string $second
     * @param string $third
     * @return View|RedirectResponse
     */
    public function thirdLevel(Request $request, string $first, string $second, string $third): View|RedirectResponse
    {
        if ($first === "assets") {
            return redirect('home');
        }

        return view($first . '.' . $second . '.' . $third);
    }
}
