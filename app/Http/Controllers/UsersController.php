<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    private $user;
    private $request;
    
    public function __construct(User $user, Request $request) {
        
        $this->user = $user;
        $this->request = $request;
    }
    
    public function index(){
        
        $title = "Pagiina de Usuários";
        
        $users = $this->user->all();
        
        return view("panel.user.index", compact('users', 'title'));
    }
    
            
    public function create()
    {
        
        
        

    }

    public function retrieve()
    {
        $users = User::all();
        return view('panel.collaborator.show', compact('users', $users));
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function profile()
    {
        return view('panel.collaborator.profile');
    }


}
