<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class CustomException extends Exception
{

    public function render($request, Exception $e)
    {
        if (config('app.debug')) {
            return parent::render($request, $e);
        }
        return $this->handle($request, $e);
    }
// شخصی سازی نمایش خطاها در بخش لاگ

    public function report(Throwable $exception)
    {
        if ($exception instanceof CustomException) {
            return 'show';
        }
        parent::report($exception);
    }
    protected function context()
    {
        return array_merge(parent::context(), [
            'foo' => 'bar',
        ]);
    }
}