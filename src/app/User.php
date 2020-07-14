<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class User extends Model
{
    protected $table = 'user';
    protected $guarded = [];

    public function GetUsersByEvent($id)
    {
        return $this->join('event_user', 'user.id', '=', 'event_user.user_id')->where('event_user.event_id', $id)->select('user.*')->get();
    }

    public function store(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();
            $user = new User();
            $user->email = $data['email'];
            $user->first_name = $data['first_name'];
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->timestamps = false;
            $user->save();
            
            Mail::raw('send mail', function ($message) use ($user){
                $message->to($user->email, 'send message to user');
            });
            //send mail !!!
            return $user;
        } else {
            $data = $request->all();
            $user = User::where('id', $data['id'])->first();
            $user->email = $data['email'];
            $user->first_name = $data['first_name'];
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->timestamps = false;
            $user->save();
            return $user;
        }
    }
}
