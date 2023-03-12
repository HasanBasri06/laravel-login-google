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
    <section class="h-screen flex content">
        <div class="w-2/4 h-full bg-greenTemlate">
            
        </div>
        <div class="w-2/4 h-full p-content">
            <div class="w-[500px] h-[550px] translate-mx bg-red-900">
                <form action="" method="post">
                    <div class="w-20 h-20 bg-purple-500 mx-auto rounded-full"></div>
                    <h1 class="text-center text-2xl font-bold mt-2 text-[#373737]">Hoşgeldin</h1>
                    <h3 class="text-center text-sm mt-2 text-gray-500">Sistemimiz deneme amaçlı yapılmıştır hiçbir bilginiz gerçek veri olarak tutulmamaktadır</h3>
                    <div class="w-80 mt-7 mx-auto">
                        <div class="flex flex-col space-y-2">
                            <label class="text-lg text-[#373737]">E-Posta</label>
                            <input type="email" name="email" class="placeholder:text-sm py-2 px-3 border-b bg-inherit outline-none" placeholder="E-posta adresinizi giriniz...">
                        </div>
                        <div class="flex flex-col space-y-2 mt-5">
                            <label class="text-lg text-[#373737]">Şifre</label>
                            <input type="password" name="pass" class="placeholder:text-sm py-2 px-3 border-b bg-inherit outline-none" placeholder="Şifrenizi giriniz...">
                        </div>
                        <button class="w-full text-white font-semibold  mt-5 rounded-full py-2 bg-greenTemlate ">Giriş Yap</button>
                        <div class="w-full justify-center gap-7 items-center h-12 mt-7 flex">
                            <div class="w-12 h-12 p-1 rounded-full bg-white cursor-pointer">
                                <img src="{{asset('assets/image/google.png')}}" alt="">
                            </div>
                            <div class="w-12 h-12 p-1 rounded-full bg-white cursor-pointer">
                                <img src="{{asset('assets/image/github.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
