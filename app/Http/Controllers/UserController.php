<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserRegisteredNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    //
    public function index() {
        
        return view('users.index');
    }
    public function inscription() {
        
        return view('users.inscription');
    }
    public function store(Request $request){
           dd($request->all());
           $validate=$request->validate([
            'nom'=>'required|string',
            'prenom'=>'required',
            'spe'=>'required',
            'telephone'=>'required',
            'email'=>['required'],
            'qr_code'=> 'required|exists:code_qrs,id',
    
           ]);
           $user=User::create($validate);
           Notification::send($user, new UserRegisteredNotification($user));

           return redirect(route('users.index'))->with('success',"l'utilisateur a été créé ");
        }
        public function edit($id){
            $user=User::findorfail($id);
            
            return view('admin.clients.edit',compact('user','event','breads'));
        }
        public function update(Request $request,$id){
            $validate=$request->validate([
                'nom'=>'required|string',
                'prenom'=>'required',
                'profession'=>'required',
                'telephone'=>'required',
                'email'=>['required'],
        
            ]);
            $user=User::findorfail($id);
            $user->update($validate);
            return redirect(route('dashboard.clients'));
        }
        public function delete($id){
            $user= User::findorfail($id);
            $user->delete();
            
            return redirect(route('dashboard.clients'))->with('success',"l'utilisateur a ");
        }
}
