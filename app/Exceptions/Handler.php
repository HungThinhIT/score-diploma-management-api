<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;

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
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
    // Transform the error messages,
    private function transformErrors(ValidationException $exception)
    {
        $errors = [];

        foreach ($exception->errors() as $field => $message) {
            $errors[] = [
                'field' => $field,
                'message' => $message[0],
            ];
        }

        return $errors;
    }
    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'code'    => $exception->status,
            'message' => $exception->getMessage(),
            'success' => false,
            'errors'  => $this->transformErrors($exception),

        ], $exception->status);
    }

    /**
     * Custom Redirect route with multiple authenticate guard.
     *
     * @param \Illuminate\Http\Request $request
     * @param AuthenticationException $exception
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Unauthenticated.',
                'success' => false,
                'code' => 99
            ], 401);
        }
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest('/login/admin');
        }

        return redirect()->guest(route('org_show_login'));
    }
}
