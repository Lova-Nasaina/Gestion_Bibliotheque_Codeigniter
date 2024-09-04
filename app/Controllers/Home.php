<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function login(): string
    {
        return view('loginPage/login');
    }

    public function authentificationLogin()
    {
        $userInfo = [
            "email" => $this->request->getPost("email"),
            "password" => $this->request->getPost("password"),
        ];


        $model = new UserModel();
        $user = $model->getUserByEmail($userInfo["email"]);

        if ($user){
            if ($userInfo["password"] === $user["password"]){
                session()->set("LoggedTrue", true);
                session()->set("userData", $user);
                return redirect()->to("books");
            }
        }else{
            session()->setFlashdata("error", "email ou password incorrect");
            return redirect()->to("/");
        }
    }

    public function adminPage(): string
    {
        return view('loginPage/administrator');
    }
    
    public function authentificationAdmin()
    {
        
        $AdminInfo = [
            "email" => $this->request->getPost("email"),
            "code" => $this->request->getPost("security"),
            "password" => $this->request->getPost("password"),
        ];


        $model = new AdminModel();
        $Admin = $model->getAdminByEmail($AdminInfo["email"]);

        if ($Admin){
            if ($AdminInfo["password"] === $Admin["password"]){
                session()->set("LoggedTrue", true);
                session()->set("userData", $Admin);
                return redirect()->to("Dashbord");
            }
        }else{
            session()->setFlashdata("error", "email ou password incorrect");
            return redirect()->to("adminPage");
        }
    }
    

    public function register(): string
    {
        return view('loginPage/register');
    }

    public function authentificationRegister()
    {
        $model = new UserModel();

        $password = $this->request->getPost("password");
        $repeatpwd = $this->request->getPost("repeatpwd");


        if ($password === $repeatpwd){
            $userInfo = [
                "name" => $this->request->getPost("name"),
                "email" => $this->request->getPost("email"),
                "password" => $this->request->getPost("password")
            ];


            $matchingUser = $model->getUserByEmail($userInfo['email']);
            if ($matchingUser) {
                session()->setFlashdata("error", "User déja existant");
                return redirect()->back()->withInput();
            }

            $model->insert($userInfo);
            session()->setFlashdata("success", "User créer avec succèe");
            return redirect("/");
        }else{
            session()->setFlashdata("error", "password non identique");
            return redirect()->to("register");
        }
    }

    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    // public function HomePage() : string
    // {
    //     return view('HomePage');
    // }

    // public function insertion()
    // {
    //     $validation = \Config\Services::validation();

    //     $validation->setRules([
    //         'name' => 'required|min_length[3]|is_unique[users.name]',
    //         'email'=> 'required|valid_email|is_unique[users.email]',
    //         'password' => 'required|min_length[6]',
    //         'password_confirm' => 'required|matches[password]',
    //     ]);

    //     // if (!$validation->withRequest($this->request)->run() {
    //     //     return redirect()->back()->withInput()->with('error', $validation->listErrors());
    //     // });

    //     $model = new UserModel();
    //     if ($this->request->getPost('password') == $this->request->getPost('repetepassword'))
    //     {
    //         $data = [
    //             'name' => $this->request->getPost('name'),
    //             'email' => $this->request->getPost('email'),
    //             'password' => $this->request->getPost('password')
    //         ];


    //         $model->insert($data);
            
            
    //         // var_dump($model);
    //         // die();
    //         // session()->setFlashdata('succes', 'Vous pouvez maintenant vous connecté');
    //         return redirect()->to("/")->with('success', 'Inscription Reussie vous pouvez vous connecter');
    //     }else
    //     {   
    //         session()->setFlashdata('error_to', 'Champ non remplie ou mot de passe non identique');
    //         return redirect()->to("/"); 
    //     }
    // }  

    // public function authetification()
    // {
    //     $session = session();
    //     $model = new UserModel();
    //     $username = $this->request->getPost('name');
    //     $password = $this->request->getPost('password');

    //     $user = $model->getUserByUsername($username);
    //     var_dump($user);
    //     // die();

    //     // if( $user && password_verify($password, $user->password))
    //     if ( $user &&  $password === $user['password'] )
    //     {
    //         $session->set('user_id', $user->id);
    //         $session->set('logged_in', true);
    //         $session->set('user_data', $user);
    //         return redirect()->to('HomePage/');
    //     }else{
    //         session()->setFlashdata('error', 'Nom d\'utitlisateur ou mot de passe incorrect');
    //         return redirect()->to('/');
    //     }

    // }



}
