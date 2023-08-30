<form method="POST" action="{{ route('login') }}">
    @csrf
    <label for="nip">NIP:</label>
    <input type="text" name="nip" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>
