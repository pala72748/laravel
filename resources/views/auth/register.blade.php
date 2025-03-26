<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Register')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Dancing+Script&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jura:wght@300..700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>
    @vite('resources/css/app.css')
    @toastifyCss
</head>

<body class="font-body bg-background-500">
    <section class="h-screen flex items-center justify-center">
        <div class="container md:mx-auto h-full flex items-center justify-center">
        <div
        class="max-w-[90%] md:max-w-[75%] 2xl:max-w-[40%] lg:max-w-[45%] w-full flex flex-row items-center bg-white rounded-lg h-auto min-h-[400px] md:min-h-[500px] lg:min-h-[42vw] shadow-lg">
                <div class="w-full mx-4 lg:mx-8 flex flex-col justify-around h-full gap-3 py-6">
                    <h1 class="text-3xl text-center">Sign Up</h1>
                    <form class="flex flex-col gap-4" action="{{ route('post.register') }}" method="post">
                        @csrf
                        <div class="flex flex-col gap-3 relative">
                            <label for="username">Username</label>
                            <input class="border border-background-500 ps-8 py-2 outline-none rounded-full"
                                placeholder="Enter your username" type="text" name="username" id="">
                            <iconify-icon class="absolute top-1/2 left-2 translate-y-1/2 text-background-500"
                                icon="ph:user" width="20" height="20"></iconify-icon>
                        </div>
                        <div class="flex flex-col gap-3 relative">
                            <label for="email">Email</label>
                            <input class="border border-background-500 ps-8 py-2 outline-none rounded-full"
                                placeholder="Enter your email" type="email" name="email" id="">
                            <iconify-icon class="absolute top-1/2 left-2 translate-y-1/2 text-background-500"
                                icon="ph:user" width="20" height="20"></iconify-icon>
                        </div>
                        <div class="flex flex-col gap-3 relative">
                            <label for="password">Password</label>
                            <input class="border border-background-500 ps-8 py-2 outline-none rounded-full"
                                placeholder="Enter your password" type="password" name="password" id="">
                            <iconify-icon class="absolute top-1/2 left-2 translate-y-1/2 rotate-45 text-background-500"
                                icon="pepicons-pencil:key" width="18" height="18"></iconify-icon>
                            <iconify-icon id="show"
                                class="absolute top-1/2 right-2 translate-y-1/2 text-background-500 cursor-pointer"
                                icon="mage:eye-off" width="20" height="20"></iconify-icon>
                        </div>
                        <div class="flex w-full">
                            <button type="submit"
                                class="py-3 w-full rounded-full bg-background-500 text-white">Submit</button>
                        </div>
                    </form>
                    <p class="text-center">Already have an account? <a href="{{ route('login') }}"
                            class="text-background-500">Sign In</a>
                    </p>
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                        <div
                            class="flex items-center justify-center gap-2 cursor-pointer border border-background-500 w-full md:w-1/2 py-2 px-4 rounded-full">
                            <iconify-icon icon="devicon:google" width="28" height="28"></iconify-icon>
                            <span>Google</span>
                        </div>
                        <div
                            class="flex items-center justify-center gap-2 cursor-pointer border border-background-500 w-full md:w-1/2 py-2 px-4 rounded-full">
                            <iconify-icon icon="logos:facebook" width="28" height="28"></iconify-icon>
                            <span>Facebook</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('show').addEventListener('click', () => {
            const passwordInput = document.getElementById('password');
            const showIcon = document.getElementById('show');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showIcon.setAttribute('icon', 'hugeicons:eye');
            } else {
                passwordInput.type = 'password';
                showIcon.setAttribute('icon', 'mage:eye-off');
            }
        });
    </script>
    @toastifyJs
</body>

</html>