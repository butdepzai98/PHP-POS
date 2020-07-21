<?php

class UserController
{
    static public function login()
    {
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["username"]) && 
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"]))
            {
                $table = 'users';

                $item = 'user';
                $value = $_POST["username"];

                //Truy vấn tìm tên User
                $request = User::ShowUsers($table, $item, $value);
                if($request['user'] == $value && $request['password']==$_POST["password"])
                {
                    //Nếu đúng Mk & User
                    $_SESSION["login"] = 'ok';

                    echo '<script>  
                        window.location = "home";
                    </script>';
                }
                else
                {
                    echo '<div class="alert alert-danger">Lỗi đăng nhập</div>';
                }
            }
        }
    }

    /**
     * Create User
     */
    public function create()
    {
        if(isset($_POST["newuser"]))
        {
            //Validate
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["newname"]) &&
			preg_match('/^[a-zA-Z0-9]+$/', $_POST["newuser"]) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["newpass"]))
            {
                //Thực hiện INSERT dữ liệu với PDO
                $table = 'users';
                $encryptpass = crypt($_POST["newpass"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $data = [
                    'name' => $_POST["newname"],
                    'user'  => $_POST["newuser"],
                    'password'  => $encryptpass,
                    'profile'  => $_POST["newprofile"],
                ];

                $request = User::create($table, $data);

                if($request == 'ok')
                {
                    echo '<script>
                    swal({
                        icon: "success",
                        title: "Thêm User thành công",
                        showConfirmButton: true,
                        confirmButtonText: "Close"
                        }).then(function(result){

                            if(result.value){

                                window.location = "users";
                            }

                        });
                    </script>';
                }
                else
                {
                    echo '<script>
                    swal({
                        icon: "error",
                        title: "lỗi PDO",
                        showConfirmButton: true,
                        confirmButtonText: "Close"
                        }).then(function(result){

                            if(result.value){

                                window.location = "users";
                            }

                        });
                    </script>';
                }
            }
            else
            {
                echo '<script>
                swal({
                    icon: "error",
                    title: "Có lỗi xảy ra",
                    showConfirmButton: true,
                    confirmButtonText: "Close"
                    }).then(function(result){

                        if(result.value){

                            window.location = "users";
                        }

                    });
                </script>';
            }
        }
    }
}