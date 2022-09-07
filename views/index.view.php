<!doctype html>
<html lang="en">
<?php include 'components/head.view.php'; ?>
<body>
<div class="wrapper">
    <div class="main">
        <form method="post" action="/register" id="form_register">
            <label for="register_form_login"></label>
            <input type="text" id="register_form_login" placeholder="login"/>
            <label for="register_form_email"></label>
            <input type="email" id="register_form_email" placeholder="email"/>
            <label for="register_form_password"></label>
            <input type="password" id="register_form_password" placeholder="password"/>
            <label for="register_form_confirm_password"></label>
            <input type="password" id="register_form_confirm_password" placeholder="confirm password"/>
            <label for="register_form_name"></label>
            <input type="text" id="register_form_name" placeholder="name"/>
            <input type="submit" value="register"/>
        </form>

        <form method="post" action="/login" id="form_login">
            <label for="login_form_login"></label>
            <input type="text" id="login_form_login" placeholder="login"/>
            <label for="login_form_password"></label>
            <input type="password" id="login_form_password" placeholder="password"/>
            <input type="submit" value="login"/>
        </form>
    </div>
</div>
</body>
</html>