<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css"/>
    <title></title>
</head>
<body>
   <!-- 
    <header>
        <div>
            <a href=""></a>
        </div>
    </header>
    -->
    <section class="container">
        <form method="post" action="<?=$base;?>/login" class="form">
            <?php if(!empty($flash)): ?>
                <?php echo $flash; ?>
            <?php endif; ?>
            <h3>Faça o login</h3>
            <div class="input-container">
                <label for="email"><i class="fas fa-envelope"></i></label>
                <input type="email" name="email" id="email" placeholder="Seu e-mail..."/><br/>
            </div>
            <div class="input-container">
                <label for="password"><i class="fas fa-lock"></i></label>
                <input type="password" name="password" id="password" placeholder="Sua senha..."/><br/>
            </div>
                <input type="submit" value="Entrar"><br/><br/>
                <a href="<?=$base;?>/alterar">Alterar a senha</a>
        </form>
    </section>
</body>
</html>
