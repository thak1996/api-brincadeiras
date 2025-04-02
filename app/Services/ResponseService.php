<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;

class ResponseService
{
    /**
     * Retorna uma resposta de sucesso.
     *
     * @param mixed $data
     * @param int $status
     * @return JsonResponse
     */
    public static function success($data, int $status = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $data,
        ], $status);
    }

    /**
     * Retorna uma resposta de erro.
     *
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public static function error(string $message, int $status = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $status);
    }
}