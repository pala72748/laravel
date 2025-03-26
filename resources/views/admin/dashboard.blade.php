@section('title', 'Admin Dashboard')
@include('layout.header')
    <h1>Welcome {{ Auth::user()->username }}</h1>
    <a href="{{ route('logout') }}">Logout</a>
    @toastifyJs
</body>
</html>