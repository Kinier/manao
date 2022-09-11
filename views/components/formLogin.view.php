<form method="post" action="/login" id="form_login">
    <label for="login_form_login">login</label>
    <input type="text" id="login_form_login" name="login" required placeholder="login"/>
    <p class="error" id="login_form_login_error"></p>
    <label for="login_form_password">password</label>
    <input type="password" id="login_form_password" name="password" required placeholder="password"/>
    <p class="error" id="login_form_password_error"></p>

    <input type="submit" value="login" disabled/>
</form>