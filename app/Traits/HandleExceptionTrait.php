<?php


namespace App\Traits;


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait HandleExceptionTrait
{
    protected function isHttp($e)
    {
        return $e instanceof NotFoundHttpException;
    }
}
