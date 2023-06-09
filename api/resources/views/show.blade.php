<!-- resources/views/users/show.blade.php -->

<h1>User Details</h1>

<p>Name: {{ $user->name }}</p>
<p>Course: {{ $user->course }}</p>
<p>Active: {{ $user->is_active ? 'Yes' : 'No' }}</p>