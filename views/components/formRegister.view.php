<form method="post" action="/register" id="form_register">
    <label for="register_form_login">login</label>
    <input type="text" id="register_form_login" name="login" required placeholder="login"/>
    <p class="error" id="register_form_login_error"></p>
    <label for="register_form_email">email</label>
    <input type="email" id="register_form_email" name="email" required placeholder="email"/>
    <p class="error" id="register_form_email_error"></p>

    <label for="register_form_password">password</label>
    <input type="password" id="register_form_password" name="password" required placeholder="password"/>
    <p class="error" id="register_form_password_error"></p>

    <label for="register_form_confirm_password">confirm password</label>
    <input type="password" id="register_form_confirm_password" name="confirm_password" required
           placeholder="confirm password"/>
    <p class="error" id="register_form_confirm_password_error"></p>

    <label for="register_form_name">name</label>
    <input type="text" id="register_form_name" name="name" required placeholder="name"/>
    <p class="error" id="register_form_name_error"></p>

    <input type="submit" value="register" disabled/>
</form>