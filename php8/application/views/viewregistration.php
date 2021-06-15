


<form method="POST" action="/registration/create/">
    <div class="mb-3">
        <label class="form-label">Логин</label>
        <input type="login" name="login" class="form-control">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Почта</label>
        <input type="email" name="email" class="form-control">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Пароль</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Повторите пароль</label>
        <input type="password" name="password2" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>