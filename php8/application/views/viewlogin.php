


<form method="POST" action="/login/auth/">
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="form-control">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" name="confirm" class="form-check-input">
        <label class="form-check-label">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>