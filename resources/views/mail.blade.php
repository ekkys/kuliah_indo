<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#ffae00;margin:0px">
    <center>
        <div style="min-height:auto; width:600px; margin-top: 40px">
            <img src={{ asset('mainWeb/images/logo/logo2.svg') }} style="width:50%" />
            <div style="background:#fff;padding: 30px;margin-top: 20px; text-align:left; border-radius: 5px">
                <?php if($type == 1) { ?> 
                    <h1>Hi, {{ !empty($name) ? $name : "-" }}</h1>
                    <p>We would like to thank you for having created a kuliah-indo.id account.</p>
                    <p>From now on, you can connect to kuliah-indo.id  and access all facilities in application kuliah-indo.id </p>
                    <p>Please confirm and activate your account by click this link : <a href="{{env('APP_URL')}}/confirmation/{{!empty($id) ? $id : '1' }}">Link</a></p>
                    <p style="margin-top: 30px">If you want to change your password, <b>dashboard > change password </b></p>
                <?php } else if($type == 2) { ?> 
                    <h1>Hi, {{ !empty($name) ? $name : "-" }}</h1>
                    <p>We would like to give you information about your new Jobfair.co.id account.</p>
                    <p>You can login with following data below</p>
                    <p>Username : {{ !empty($email) ? $email : "-" }}</p>
                    <p>Password : {{ !empty($password) ? $password : "-" }}</p>
                    <p style="margin-top: 30px">If you want to change your password, <b>dashboard > change password </b></p>
                <?php } ?>
            </div>
        </div>
            <div style="padding-left: 30px;padding-right: 30px;color: #fff;margin-top: 10px; width:550px">
            <table align="center">
                <tr>
                    <td width="30%">
                        <img src={{ asset('mainWeb/images/logo/logo2.svg') }} style="width:80%" />
                    </td>
                    <td>
                        <p style="font-size:12px">Kuliah-indo.id 2020, All rights reserved. Terms of Use <br />Privacy Policy - Terms and Conditions of Sale - Legal Notice</p>
                    </td>
                </tr>
            </table>
            </div>
            
        </center>
</body>
</html>





