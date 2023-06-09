<!-- resources/views/users/index.blade.php -->

<h1>User List</h1>

<ul>
  @foreach ($users as $user)
  <li>{{ $user->name }}</li>
  @endforeach
</ul>

<!-- Pagination links -->
@if ($currentPage > 1)
<a href="{{ url('/users?page=' . ($currentPage - 1)) }}">Previous</a>
@endif

@if ($currentPage < $lastPage) <a href="{{ url('/users?page=' . ($currentPage + 1)) }}">Next</a>
  @endif