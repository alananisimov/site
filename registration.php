<?php 
	require 'db.php';
?>

<?php if ( isset ($_SESSION['logged_user']) ) : ?><header><link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet"></header><body><div class="autorisation-status">
	Вы были авторизованы!<br/>
	Привет, <?php echo $_SESSION['logged_user']->login; ?>!<br/>

	<a href="logout.php" style="text-decoration: none;">Выйти</a>
</div>
<?php else : ?>
<div class="registration"><div class="status" style="padding: 20px; padding-top: 70px;">Ты не зарегистрировался!<br/></div>
<div class="login" style="margin-left: 30px; padding-top: 20px; padding-bottom: 20px;"><a href="login.php" style=" text-decoration: none; /* Отменяем подчеркивание у ссылки */">Войти в Аккаунт</a></div>
    <div class="reg" style="margin-left: 80px;padding-top: 10px; margin-top: 20px; padding-bottom: 20px;"><a href="signup.php" style=" text-decoration: none; padding-top: 40px;">Создать Аккаунт</a></div></div></body>
<?php endif; ?>

 <style>body{
     font-family: 'Ubuntu';
   }
     .registration{
        height: 400px;
    width: 600px; border-radius: 20px; text-align: center;align-content: center; margin-top: 15%; margin-left: 35%;
     background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%); color:azure; font-size: 40px; font-family: 'Ubuntu'; transition: 1s;} 
.login{
         width: 540px; height: 60px;border-radius: 20px; background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border: 2px solid aquamarine;
}
         .reg{
            width: 440px; height: 60px;border-radius: 20px; background-image: linear-gradient(135deg, #c3cfe2 0%, #f5f7fa 100%);border: 2px solid aquamarine;
         }
.autorisation-status{
    height: 400px;
    width: 600px; border-radius: 20px; text-align: center;align-content: center; margin-top: 15%; margin-left: 35%;
     background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%); color:azure; font-size: 40px;} 
}
.login:hover{
   
}
.reg:hover{
      
    
}
    </style>