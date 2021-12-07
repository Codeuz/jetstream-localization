<?php

namespace Cdz\JetstreamLocalization\Http\Responses;

use Laravel\Fortify\Http\Responses\PasswordResetResponse as FortifyPasswordResetResponse;
use Illuminate\Http\JsonResponse;

class PasswordResetResponse extends FortifyPasswordResetResponse
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
            ? new JsonResponse(['message' => trans($this->status)], 200)
            : redirect(localization()->route('login'))->with('status', trans($this->status));
    }
}
