<?php
declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

function getUserInfo($userId) {
    // Simulate fetching user info from a database
    $users = [
        1 => ['name' => 'Alice', 'email' => 'alice@example.com'],
        2 => ['name' => 'Bob', 'email' => 'bob@example.com'],
        3 => ['name' => 'Charlie', 'email' => 'charlie@example.com']
    ];

    return $users[$userId] ?? null;
}

print_r(getUserInfo(1));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
</head>
<body>

    <hr>

    <?php
    // Agar, foydalanuvchi uylanganmisiz savoliga javob bersa, unda javobiga qarab matn chiqaramiz:
        if(isset($_GET['givenName'], $_GET['familyName'])){
            print 'Your given name:' . $_GET['givenName'] . '<br>';
            print 'Your family name:' . $_GET['familyName'] . '<br>';

            if(isset($_GET['isMarried'])){
                if($_GET['isMarried'] === 'yes'){
                    print 'Married' . '<br>';
                } else {
                    print 'Not married' . '<br>';
                }
            } 
            
            if(isset($_GET['football'])){
                print 'I like football' . '<br>';
            }

            if(isset($_GET['volleyball'])){
                print 'I like volleyball' . '<br>';
            }

            if(isset($_GET['chess'])){
                print 'I like chess' . '<br>';
            }
            
        } else{
            print 'Please fill in the form';
        }

        var_dump($_POST);
    ?>

    <hr/>
    <h1>Form</h1>
    <form method="post">
        Your given name: <input type="text" name="givenName"><br>
        Your family name: <input type="text" name="familyName"><br>

        Are you married? <br>
        <input type="radio" name="isMarried" value="yes"> Yes <br>
        <input type="radio" name="isMarried" value="no"> No<br> <br>

        Which sports do you like? <br>
        <input type="checkbox" name="football"> Football <br>
        <input type="checkbox" name="volleyball"> Volleyball <br>
        <input type="checkbox" name="chess"> Chess <br>

        <input type="submit" value="Submit">
    </form>

    <!-- 
        1. Biz brauzer orqali HTTP get usuli orqali so’rov yubordik va server bizga javob qaytardi:
        http://localhost:8080/lesson5/index.php?givenName=John&familyName=Doe&isMarried=yes&football=on&volleyball=on&chess=on

        2. Agar, ma’lumotlar post http usuli (method) orqali jo’natilgan bo’lsa, PHP’da ushbu ma’lumotlarni $_POST super global ko’pligi orqali topamiz:



     -->

</body>
</html>