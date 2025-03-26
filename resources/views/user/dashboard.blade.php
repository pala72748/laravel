@section('title', 'User Dashboard')
@include('layout.header')

<div class="container mx-auto">
    <h1>Welcome {{ Auth::user()->username }}</h1>
    <a href="{{ route('logout') }}">Logout</a>
</div>
@toastifyJs
</body>

</html>