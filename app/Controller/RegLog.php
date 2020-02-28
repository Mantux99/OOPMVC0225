<?php
    use Frame\Controller;
    class RegLog extends Controller
    {
        public function registerPage(){
            $menu=$this->model('Menu');
            $data['menu']=$menu->getRegLogLinks();

            if(isset($_POST['submit'])){
                $regLog =$this->model ('RegLogas');
                $regLog->registerNewUser($_POST);
                $this->viewLogInRegister('login', $data);
            }else {
                $this->viewLoginRegister('register', $data);
            }

 

        }
    public function loginPage()
    {
        $menu=$this->model('Menu');
        $data['menu']=$menu->getRegLogLinks();

            

   
        if(isset($_POST['login']))
        {
            $regLog =$this->model ('RegLogas');
            $usersArray=$regLog->loginNewUser();
            foreach ($usersArray as $user) 
            {
                if ($user['email'] === $_POST ['loginEmail'] && $user['password'] === $_POST['loginPassword'])
                {
                    print 'Duomenys sutampa';
                    setcookie('email', $user['email']);
                break;
                }
            }
        }
            $this->viewLoginRegister('login', $data);

        
        
    }
    
       
 }
?>
