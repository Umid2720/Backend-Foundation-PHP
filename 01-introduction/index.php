<?php
declare(strict_types=1);
/*
 php -v     php o'rnatilganligini tekshirish 
 php -a     interaktiv rejimda ishlash uchun
 ctrl c || ctrl d || exit    interaktiv rejimdan chiqish uchun
 php -S localhost:8505    vaqtinchalik web serverni yaratish
 ctrl c    web serverni to'xtatish uchun
*/

print "Hello, World!";

$foo = "Assalomu alaykum, O'zbekistan!";
$number = 42;

print $foo;
print "\n";

$number++;
$number++;
$number--;

print $number;
print "\n";

// O’zgaruvchan turi avtomatik tushuniladi:
$foo = "Salom, O'zbekiston!";      // string
$number = 42;                      // integer
$pi = 3.14;                       // float
$isTrue = true;                   // boolean
$nullValue = null;                // null
$arr = [1, 2, 3, 4, 5];            // array
$person = [                       // associative array
    "name" => "Ali",
    "age" => 30,
    "city" => "Tashkent"
];  

// PHP’da funksiya yaratilayotganda, uning nomi oldidan function kalit so’zi qo’yiladi:
function greet($name) {
    return "Salom, $name!";
}

// Funksiyani chaqirish:
echo greet("Umidbek"); // Natija: Salom, Umidbek!

function foo (int $number1, int $number2): void
{
	print $number1 + $number2;
}

foo(10, 15); // 25

// PHP dinamik turlovchi dasturlash tili bo’lganligi uchun, funksiyaning parametri turiga int ko’rsatib, funksiyani chaqirayotganda, unga argument sifatida yuborgan qiymatni string turida bersak ham xato bo’lmaydi. PHP’ning o’zi argumentning ma’lumot turini avtomatik int’ga o’tkazadi:

echo "<hr/>";
foo("10", "15"); // 25

// PHP’ni statik turlovchi dasturlash tiliga o’tkazib ishlatish maslahat beriladi. Buning uchun quyidagi kod har bir php faylining yuqori qismida bo’lishi shart: declare(strict_types=1);


// Endi, PHP string’ni avtomatik tarzda int’ga o’tkazmaydi. Buning o’rniga xato chiqaradi. Xato php sozlamalarida o’chirilgan bo’lishi mumkin. Shuning uchun uni quyidagi qatorlar orqali yoqish mumkin:

ini_set('display_errors', '1');
error_reporting(E_ALL);
foo("10", "15"); // 25


// Yuqoridagi misoldagi xatoda, qaysi qatorda qanday xato borligi haqida ma’lumot berilgan.

// Dasturimizni serverga joylaganimizdan keyin, PHP birorta ham xato ko’rsatmasligi kerak. Chunki, har bir xato xakerlar uchun qimmatbaho ma’lumot bo’lishi mumkin. Buning uchun, ini_set va error_report() usullarimizning parametrlariga 0 ko'rsatamiz:
ini_set('display_errors', '0');
error_reporting(0);
foo("10", "15"); // 25
