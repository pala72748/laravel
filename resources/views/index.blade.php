@section('title', 'Home')
@include('layout.header')

<section class="border shadow-md ">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="flex flex-row items-center h-[10vh] justify-between">
            <div>
                <h1 class="text-2xl">Logo</h1>
            </div>
            <div class="hidden lg:block">
                <ul class="flex flex-row gap-6">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            @if (Auth::check())
                <div class="flex flex-row gap-4">
                    <button class="py-2 px-4 text-background-500 rounded-lg border border-background-500"><a
                            href="{{Auth::user()->role == 'admin' ? route('admin.dashboard') : route('user.dashboard')}}">My
                            Account</a></button>
                </div>
            @else
                <div class="flex flex-row gap-4">
                    <button class="py-2 px-4 text-white rounded-lg bg-background-500"><a href="{{ route('login') }}">Sign
                            In</a></button>
                    <button class="py-2 px-4 text-background-500 rounded-lg border border-background-500"><a
                            href="{{ route('register') }}">Sign Up</a></button>
                </div>
            @endif
        </div>
    </div>
</section>