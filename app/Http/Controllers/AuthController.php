<?php
    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Routing\Controller as BaseController;

    class AuthController extends BaseController{
        public function me()
    {
        return[
            "NIS"=>"3103118045",
            "Name"=>"Dhista Kusuma Pratama Putri",
            "Gender"=>"Female",
            "Phone"=>"082226842003",
            "Class"=>"XII RPL 2",
        ];
        }
    }
?>