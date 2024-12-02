<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP avec Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">


 <?php
 require_once './Class/Account.php'; 
 require_once './Class/SavingAccount.php'; 

 $account1 = new Account(name: "sabri", balance:1000);

 echo $account1;

 $account2 = new Account(name:"Nadia", balance:1500 );
 echo $account2;

 $account3 = new SavingAccount(name: "thierry", balance:5000, interestRate:7);
 echo $account3;

 ?>
<!-- on va coder en php ici -->

</body>
</html>