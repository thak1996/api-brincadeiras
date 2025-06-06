<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Services\ResponseService;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            return ResponseService::error(
                'Erro de validação',
                422,
                $exception->errors()
            );
        }

        if ($exception instanceof ModelNotFoundException) {
            return ResponseService::error(
                'Recurso não encontrado',
                404
            );
        }

        if ($exception instanceof AuthorizationException) {
            return ResponseService::error(
                'Acesso não autorizado',
                403
            );
        }


        if ($exception instanceof HttpException) {
            return ResponseService::error(
                $exception->getMessage(),
                $exception->getStatusCode()
            );
        }

        $statusCode = is_int($exception->getCode()) && $exception->getCode() > 0
            ? $exception->getCode()
            : 500;

        return ResponseService::error(
            $exception->getMessage(),
            $statusCode
        );
    }
}
