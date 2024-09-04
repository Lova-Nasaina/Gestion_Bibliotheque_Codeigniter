<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Model;

class Dashbord extends BaseController
{
    public function dashbord()
    {
        // verification si l'utilisateur est connecté
        // if (!session()->get('user_data')['id'] || session()->get('user_id') != $userId)
        // {
        //     return redirect()->to('/')->with('error', 'Accès refusé. Veuillez vous connecter');
        // }

        if (!session()->get('logged_in'))
        {
            return redirect()->to('/')->with('error', 'Accès refusé. Veuillez vous connecter');
        }
        
        $data["user"] = session()->get("user_data");
        return view('HomePage', $data);
    }


}
