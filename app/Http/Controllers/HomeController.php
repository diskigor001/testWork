<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Jobs\SendMessage;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role != 'user')
            $check = true;
        else{
            $app = Application::where('user_id', $user->id)->latest()->first();
            if(!$app)
                $check = true;
            else{
                $time = strtotime($app->created_at) + 86400;
                if($time > time())
                    $check = false;
                else
                    $check = true;
            }
        }
        return view('home', compact('check'));
    }

    public function sendForm (Request $request)
    {
        $user = Auth::user();
        $app = Application::where('user_id', $user->id)->latest()->first();
        if(!$app) {
            SendMessage::dispatch(Auth::user()->email);
            Application::add($request);
            return back();
        }

        $time = strtotime($app->created_at) + 86400;
        if($time < time()){
            SendMessage::dispatch(Auth::user()->email);
            Application::add($request);
        }

        return back();
    }

    // Статус для менеджера
    public function setStatus (Application $app)
    {
        if(Auth::user()->role != 'manager')
            return response()->json(array('status' => 'error'), 404, ['utf-8'], JSON_UNESCAPED_UNICODE);

        $app->status = 'success';
        $app->save();
        return response()->json(array('status' => 'success', 'id' => $app->id), 200, ['utf-8'], JSON_UNESCAPED_UNICODE);
    }

    // email менеджера
    public function setEmail (User $user, Request $request)
    {
        $user->email = $request->email;
        $user->save();
        return back();
    }
}
