<?php

/*
 * Goonswarm Federation Recon Tools
 *
 * Developed by scopehone <scopeh@gmail.com>
 * In conjuction with Natalya Spaghet & Mindstar Technology 
 *
 */

namespace Vanguard\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}