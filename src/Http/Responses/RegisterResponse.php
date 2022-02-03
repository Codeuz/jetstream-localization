<?php

namespace Cdz\JetstreamLocalization\Http\Responses;

use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;
use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Fortify;
use App\Providers\RouteServiceProvider;

class RegisterResponse implements RegisterResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return $request->wantsJson()
            ? new JsonResponse('', 201)
            : redirect()->route(app()->getLocale().'.'.trim(config('fortify.routes.private'), '/'));
    }
}