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

<h1></h1>
    <?php
    // Agar, foydalanuvchi uylanganmisiz savoliga javob bersa, unda javobiga qarab matn chiqaramiz:
        if(isset($_GET['givenName'], $_GET['familyName'])){
            print 'Your given name:' . $_GET['givenName'] . '<br>';
            print 'Your family name:' . $_GET['familyName'] . '<br>';

            if(isset($_GET['isMarried'])){
                if($_GET['isMarried'] === 'yes'){
                    print 'Married';
                } else {
                    print 'You are not married';
                }
            } else {
                print 'You are not married';
            }
        } else{
            print 'Please fill in the form';
        }
    ?>

    <hr/>
    <h1>Form</h1>
    <form>
        Your given name: <input type="text" name="givenName"><br>
        Your family name: <input type="text" name="familyName"><br>

        Are you married? <br>
        <input type="radio" name="isMarried" value="yes"> Yes <br>
        <input type="radio" name="isMarried" value="no"> No<br>
        <input type="submit" value="Submit">
    </form>

    
</body>
</html>