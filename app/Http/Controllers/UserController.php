<?php

namespace App\Http\Controllers;

use App\Mail\EmailNotification;
use App\Models\User;
use App\Notifications\UserRegisteredNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    //
    public function index() {
        
        return view('users.index');
    }
    public function users() {
        $users=User::query()->orderBy('created_at','desc')->get();
        // dd($users);
        return view('users.users',compact('users'));
    }
    public function inscription() {
        
        return view('users.inscription');
    }
    public function store(Request $request){
        $validate=$request->validate([
            'nom'=>'required|string',
            'prenom'=>'required',
            'specialite'=>'required',
            'phone'=>'required',
            'email'=>['required'],
            'pays'=>['required'],
            'ville'=>['required'],
            'dateNaissance'=>['required','date'],
            'genre'=>['required'], 
            
        ]);
        $user=User::create($validate);
        Mail::to($user->email)->send(new EmailNotification());
        // dd($request->all());

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
