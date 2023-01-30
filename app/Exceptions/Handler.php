<?php

namespace App\Exceptions;

use App\Helpers\AppHelper;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param \Throwable $exception
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
     * @param \Illuminate\Http\Request $request
     * @param \Throwable $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if (method_exists($exception, 'getStatusCode')) {
            $statusCode = $exception->getStatusCode();

            if (!env('APP_DEBUG', false)) {
                if (!$request->user() && AppHelper::isFrontendEnabled()) {
                    if ($statusCode === Response::HTTP_NOT_FOUND) {
                        return response()->view('errors.frontend_404', [], 404);
                    }
                    if ($statusCode === Response::HTTP_INTERNAL_SERVER_ERROR) {
                        return response()->view('errors.frontend_500', [], 500);
                    }
                }
            }

            // Getting an instance of authenticated user
            if ($request->user()) {
                if ($statusCode == 404) {
                    return response()->view('errors.backend_404', [], 404);
                }

                if ($statusCode == 401) {
                    return response()->view('errors.backend_401', [], 404);
                }
            }
        }
        return parent::render($request, $exception);
    }
}
