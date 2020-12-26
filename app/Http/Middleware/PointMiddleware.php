<?php

namespace App\Http\Middleware;

use App\Action;
use App\UserMeta;
use Closure;

class PointMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $data = Action::where([['users_id','=',auth()->id()],['status','!=',2]])->get();
        $class = UserMeta::where('users_id',auth()->id())->first()->class;
        $p = 0;
        $per = 0;
        if (count($data) > 0) {
            foreach ($data as $d) {
                $p+=$d->points;
            }
            $per = $p*100/5000;
        }
        $khoshe = [
            "5"=>[
                200,250
            ],"4"=>[
                400,450
            ],"3"=>[
                800,800
            ],"2"=>[
                1000,1150
            ],"1"=>[
                1300,1500
            ],
        ];
        $userKhoshe = "بدون خوشه بندی";
        foreach ($khoshe as $l => $k){
            if ($class=="کارشناسی") {
                if ($p>$k[1]) {
                    $userKhoshe = "خوشه $l";
                }
            }else{
                if ($p>$k[0]) {
                    $userKhoshe = "خوشه $l";
                }
            }
        }

        session(['point'=>$p,'khoshe'=>$userKhoshe,'percent'=>ceil($per)."%"]);
        return $next($request);
    }
}