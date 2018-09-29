<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CheckForMaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

       if(app()->isDownForMaintenance()){
         if(!$request->is('admin*','user*','cate*','dianpu/*','dianpu','link*','peizhi*','food1*','fankui*')){
            throw new HttpException(503);
            }
        }
     return $next($request);
     }
}
