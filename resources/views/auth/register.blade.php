<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="h-screen flex content 2xl:w-full">
        <div class="w-2/4 h-full bg-greenTemlate">
            {{-- TODO: uygun reism bulunacak --}}
        </div>
        <div class="absolute w-28 h-28 mx-auto rounded-full ring-2 ring-greenTheme translate-mx ring-offset-4">
            <img src="{{ asset('assets/image/profile-photo.jpg') }}" class="rounded-full" alt="">
        </div>
        <div class="w-2/4 h-full p-content">
            <form action="" method="post" class="px-24 translate-mx">
                <h1 class="text-center text-2xl font-bold text-[#373737]">Üye Ol</h1>
                <div class="w-full mt-7 mx-auto">
                    <div class="columns-2 gap-5">
                        <div>
                            <label class="text-lg text-[#373737]">İsim</label>
                            <input type="email" name="email"
                                class="placeholder:text-sm py-2 px-3 border-b bg-inherit w-full outline-none"
                                placeholder="İsim giriniz...">
                        </div>
                        <div>
                            <label class="text-lg text-[#373737]">Soyisim</label>
                            <input type="email" name="email"
                                class="placeholder:text-sm py-2 px-3 border-b w-full bg-inherit outline-none"
                                placeholder="Soyisim giriniz...">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-2 mt-5"">
                        <label class="text-lg text-[#373737]">E-Posta</label>
                        <input type="email" name="email"
                            class="placeholder:text-sm py-2 px-3 border-b bg-inherit outline-none"
                            placeholder="E-posta adresinizi giriniz...">
                    </div>
                    <div class="flex flex-col space-y-2 mt-5">
                        <label class="text-lg text-[#373737]">Şifre</label>
                        <input type="password" name="pass"
                            class="placeholder:text-sm py-2 px-3 border-b bg-inherit outline-none"
                            placeholder="Şifrenizi giriniz...">
                    </div>
                    <div class="flex flex-col space-y-2 mt-5">
                        <label class="text-lg text-[#373737]">Şifre Onayla</label>
                        <input type="password" name="pass"
                            class="placeholder:text-sm py-2 px-3 border-b bg-inherit outline-none"
                            placeholder="Şifrenizi giriniz...">
                    </div>
                    <button class="w-full text-white font-semibold  mt-5 rounded-full py-2 bg-greenTemlate ">Kayıt Ol</button>
                    <div class="w-full flex justify-center pt-3">
                        <a href="{{ route('login') }}" class="text-sm font-semibold mx-auto text-greenTemlate">Giriş Yap</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
