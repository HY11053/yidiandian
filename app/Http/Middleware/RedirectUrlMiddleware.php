<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Facades\Agent;
use Log;
class RedirectUrlMiddleware
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
        if (preg_match('#(.*)/$#',$_SERVER['REQUEST_URI'],$matches) || str_contains($request->url(),'.shtml' ))
        {

            if ((str_contains($request->url(),'www.')) && Agent::isMobile())
            {
                $redirecturl=str_replace('www.','m.',config('app.url').$_SERVER['REQUEST_URI']);
                return redirect($redirecturl,302);
            }
            return $next($request);
        }else{
            if ((str_contains($request->url(),'complate')) ||  (str_contains($request->url(),'crosscomplate')) || str_contains($request->url(),'captcha') || str_contains($request->url(),'.shtml'))
            {
                return $next($request);
            }else{
                preg_match('#(.*)[^/]$#',$_SERVER['REQUEST_URI'],$matches);
                if (str_contains($request->url(),'www.'))
                {
                    $redirecturl=config('app.url').$matches[0].'/';
                }elseif (str_contains($request->url(),'m.')){
                    $redirecturl=str_replace('www.','m.',config('app.url')).$matches[0].'/';
                }elseif (str_contains($request->url(),'mip.')){
                    $redirecturl=str_replace('www.','mip.',config('app.url')).$matches[0].'/';
                }
                return redirect($redirecturl,301);
            }
        }
        return $next($request);
    }
}
