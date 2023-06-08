<form method="POST" action="/login">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Login</button>
</form>
