<?php

namespace App\Http\Controllers;

use App\Http\Requests\Notify;
use Illuminate\Http\JsonResponse;

class NotificationController extends Controller
{

    /**
     * Upload the files and returns the notification message to send through WPP
     *
     * @param Notify $request
     * @return JsonResponse
     */
    public function nofify(Notify $request): JsonResponse
    {
        $service = $request->get('service');

        return response()->json(["message" => "Done processing {$service}"]);
    }
}
