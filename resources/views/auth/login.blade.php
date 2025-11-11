<form method="POST" action="/login">
    @csrf
    <label>Username</label>
    <input name="username">

    <label>Password</label>
    <input type="password" name="password">

    <button type="submit">Login</button>
</form>