<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body class="antialiased">
        <div class="bg-white dark:bg-gray-800" style="width: 1350px; height: 950px;">
            <div class="w-20 h-10 absolute" style="left: 1198px; top: 59px;">
                <a href="#" onclick="selectTheme('dark')" class="flex items-center justify-start flex-1 h-full py-2 pl-2 pr-12 bg-blue-400 dark:bg-gray-600 rounded-full focus:outline-none">
                    <img src="{{asset('img/sun.png')}}" alt="">
                </a>
            </div>
            <p class="absolute text-6xl font-medium text-gray-700 dark:text-white" style="left: 150px; top: 154px;">Hello! Saya <br/>Tsar Alghifari,<br/>Seorang Web <br/>Programmer</p>
            <div class="inline-flex space-x-14 items-center justify-end w-60 h-8 absolute" style="left: 886px; top: 61px;">
                <a href="#" class="text-xl font-medium text-green-700 dark:text-yellow-200">Portfolio</a>
                <a href="#" class="text-xl font-medium text-green-700 dark:text-yellow-200">Certificate</a>
            </div>
            <div class="inline-flex flex-col space-y-5 items-center justify-end absolute" style="width: 661px; height: 232px; left: 150px; top: 556px;">
                <p class="text-lg font-light leading-loose text-gray-700 dark:text-white text-opacity-75 dark:text-opacity-80" style="width: 661px;">Seorang Fullstack Web Developer dan UI Designer, membuat website dan design yang  kompleks dan minimalis sesuai kebutuhan user adalah tugas saya. Menghabiskan waktu berjam-jam untuk eksplorasi design dan coding. Kalian dapat melihat karya saya di Github dan Dribble.</p>
                <p class="text-lg font-light leading-loose text-gray-700 dark:text-white text-opacity-75 dark:text-opacity-80" style="width: 661px;">Saya aktif di Twitter lebih fokus pembahasan web development, design dan meme, saya sering membaca thread tentang tips design dan coding.</p>
            </div>
            <div class="inline-flex space-x-12 items-center justify-end w-56 h-10 absolute" style="left: 150px; top: 827px;">
                <a href="#" class="flex items-center justify-center w-10 h-10 pt-0.5 pb-1">
                    <img src="{{asset('img/twit.png')}}" alt="">
                </a>
                <a href="#" class="flex items-center justify-center w-10 h-10 px-0.5 pt-0.5 pb-1">
                    <img src="{{asset('img/git.png')}}" alt="">
                </a>
                <a href="#" class="flex items-center justify-center w-10 h-10 p-0.5">
                    @if ("theme" == "dark")
                        <img src="{{asset('img/wa-dark.png')}}" alt="">
                    @else
                        <img src="{{asset('img/wa.png')}}" alt="">
                    @endif
                </a>
            </div>
            <div class="relative absolute" style="width: 450px; height: 450px; left: 855px; top: 154px;">
                <img src="{{asset('img/avatar.png')}}" alt="">
            </div>
        </div>
    </body>
</html>

<script>
    function selectTheme(value) {
        localStorage.setItem('theme', value)
        document.querySelector('html').classList.add(localStorage.getItem('theme'))
    }
</script>