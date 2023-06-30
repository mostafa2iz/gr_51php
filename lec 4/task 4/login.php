<?php
require_once "data.php";
if(isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'   ];
    $flag = 0 ;
    $all_errors = [];


 if(! empty($username)) {
if(strlen($username) > 5) {
if(preg_match('/trx$/', $username)) {
 $flag++ ;
  } else {
                $all_errors['usernameRegx'] = 'plz end us with trx';
            }
        } else {
            $all_errors['usernamelen'] = 'plz len > 5';
        }
    } else {
        $all_errors['usernamef'] = 'plz enter';
    }




    if(! empty($password)) {
        if(strlen($password) > 4) {
            if(preg_match('@[A-Z]@', $password)) {
                $flag++ ;
            } else {
                $all_errors['passRegx'] = 'plz end us with senior';
            }
        } else {
            $all_errors['passlen'] = 'plz len > 4';
        }
    } else {
        $all_errors['passf'] = 'plz enter';
    }



    if(! empty($email)) {
        if(strlen($email) > 8) {
            if(preg_match('/.com$/', $email)) {
                $flag++;
            } else {
                $all_errors['emailRegx'] = 'plz end us with senior';
            }
        } else {
            $all_errors['emaillen'] = 'plz len > 8';
        }
    } else {
        $all_errors['emailf'] = 'plz enter';
    }

    if ($flag == 3) {
        foreach ($users as $user) {
          if ($user['name'] == $username && $user['email'] == $email && $user['password'] == $password) {
            header('location:index.php');
            exit;
          }
        }
        $wrongData = 1;
      }

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text"  name="username"  id="" placeholder="Username" class=""><i>Username</i></br>
    <input type="text"  name="password"   id=""  placeholder="password" class=""><i>password</i> </br>
    <input type="text"  name="email"     id=""   placeholder="email"    class=""><i>email</i> </br>
    <button> login</button>
    <input type="radio" name="male" value="male" id="">
    <input type="radio" name="female" value="female"  id="">
    <input type="checkbox" name="english" value="eng" id="">
    <input type="checkbox" name="french " value="frn" id="">
    <input type="checkbox" name="spain"  value="sp" id="">
    <input type="color" name="clr"   id="">
    <input type="date" name="clr"   id="">

    <select name="" id="">
  <option value="">x</option>
  <option value="">y</option>
  <option value="">z</option>
</select>

    
    
    </form>
</body>
</html>