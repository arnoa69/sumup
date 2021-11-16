<?php
include 'Functions.php';
$functions = new Functions;
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to PHPSandbox</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,400;1,500;1,531;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="h-screen bg-white flex items-center justify-center font-sans text-gray-700" style="font-family: 'Roboto', sans-serif;">
    <div class="font-medium items-center text-center flex flex-col justify-center h-full">
        <div class="flex flex-col justify-center items-center">
            <div class="text-left">
                <?php $functions->sumUp('data/A.txt'); ?>
            </div>          
        </div>
    </div>
</div>
</body>
</html>