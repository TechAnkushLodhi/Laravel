<H1>{{ $username }}, you can Create a  User Form</H1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <button type="submit">Create User</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif