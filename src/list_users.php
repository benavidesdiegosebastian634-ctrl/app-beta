<?php
require("../config/database.php");
$sql_users = "
    Select 
        u.firstname ||' '||u.lastname as fullname,
        u.email,u.mobile_phone
        case
            when u.status=true the 'Active' else 'Inactive'
        End as status,  u.profile_photo
        from users u
        ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1" align = "center">
    <tr>
            <th>Fullname</th>
            <th>E-mail</th>
            <th>Mobile phone</th>
            <th>Status</th>
            <th>Photo</th>
            <th>options</th>
    </tr>
     <tr>
        <td>Peter Loza</td>
        <td>peter@mail.com</td>
        <td>300123</td>
        <td>Active</td>
    <td>
        <img src = "profile_photos/user_default.png" width = "50" alt = "user photo">
    </td>
    <td>
        <a href = "#"><img src = "icons/edit.png" width = "20" alt = "Edit user">
        </a>
        &nbsp;&nbsp;
        <a>
            <a bref = "#"><img src = "icons/delete.png" width = "20" alt = "Delete user"></a>
    </td>
    </tr>


</body>
</html>