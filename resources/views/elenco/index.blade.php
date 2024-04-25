<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/consulta.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital@1&display=swap" rel="stylesheet" />
</head>

<body>
<nav class="w-full h-[10vh] bg-green-300 z-20 fixed flex items-center justify-between px-12">
    <div class="flex items-center w-1/3">
        <a href="">
            <img class="w-11 h-11 mx-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEGklEQVR4nO2aS2xWRRTHf0hpSyzRPihEIVRXIChEEyJ7DLWJ2OoKH0tSVmChGzbWuBICK3wGwoIVcWmxoguliQEsatAYH4USwksCmCYmyKsPc5L/TSb92ntn5k5bNPyTSb5895w59//NnDPnnPngAf6/eBTYCOwGeoHfgOvALQ37/CvwmWReAh7hPkEN8DpwFBgBxgOH6XwBvKa5Zhy1wHbgsvNSt4FjQA/QAawEGiVbq8+rgFck0w/ccfQvAW9JdkbwInDWeYEfgE6gPmKueun+6Mx3BtjANMJ+qQ8dg2a8NdHcc/QDnXbm3zcd220R8L0M/ANsA+amNgJUAV0KDmZrAGhONXmLltsm/h14ukB+BbAT+AYYEvGbwDngELDOw+ZqYFA2B/UOpVciI3FSDjsVmoCDwGhBpBoD3pV8HpqA7xwyzWV8IttOJ4C6HFkz8ktg6L0HfAI8nDNvnUNmINZnPnK2U95KPAR8G3GGZMN0qwtWZlCy74eSaHMcu8gnXi1BIhvdBTbWOAHAOzTPl5Oa0lYP+d4ERM572Oly/MVri+1wzom5HvH/7wREbDzpEZp/kqyF/0IHvxywhAsTkbCxPmDLXypalTckaNHKB4sTEmn3sDfHSWc25Ql+JaHNnkSaExLxdeItku/LS+BGlMVabeGDBTrgUhBZ7mmzQVnzvanqmXZN+DVhuJCAxGhg+t4vPSvOKrBHD98OJNKXgMjPgTbfkZ5VmhU4oocvB076QQIilqOFoEN6VjZXIEsDLHv1haUnfyYgckVz+WKlkz5V4C89NGfyRUPCqBViNzu/rk32MKuf8xK4iZinfKwsiduBmW2No5eECOqglCVinZQQZETsnZNsLcNzqgBjSZjus4E2m6R7I8/ZfQ+myaJIzDDdUDyV5+x9keE3W+prESSuRmxl9/C2I6MCeyMPxAzdEUSsyReDnrwDMTZFcSPYqQASA6oxYnAsL0VpVCIWkjROxJIAIo9H2mhQtLqb955fBqbxk62KL5HY1eiU/ud5Qm9KyIqXGNQFEMlrL/kUVnYLkBt9slI3pq/7RAARkw1Fm3Qv+kS7LPqcDlz+FnUjfYlY029ZwPxVSvfHdf1QiBqnHeSjsBbYH3m6m84B4HkPO9ulMxhy9rSphLWm2DNTpAhbJ1wDlB32a3dN0ePNGnRjMVs+a5n+4TScrUt+eMJNU+pxF/hUL5+l7GecO5NgzHcayCdUCRZ12lOOUeBjx++Ol7mWW6x7jfFZHkO64iiFpc7SzsY4FxmqJ8VjgaE11TiuXZEUtdqzqRpyeWNMPjmtd++t0+w3Z4EXmCHUKOZfSUjAUqNtkYVWaVTr7xdHFf9DX/6OGg+blDnfF6hXcbZLZbP9gWbYeelhfWfP3lNJHfNviQfgv4B/ARxzhNGFGL+bAAAAAElFTkSuQmCC">
        </a>
        <a href="">
            <img class="w-11 h-11 mx-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAABOElEQVR4nO3WwSsFURTH8U8iUZREKQuWip0sLCys/AFWbPgjbEg27Kz5W2RppaxYKIqUwg6lFLkaXfV6De+9a57Ry69OM53pnPOdc6Y5l3/9YYUEO8VQmQChSIgQLQW4EIiQCHBScR0sA2AAx0V0IiQCKApiH3MJAHmWjaPpCjWsYbVjA5e4wiY6fgDWsNZz3mLrNwHOY+AMpuL9dU7iWu1OBniKgd1fJCodoF61LkAoewShbIB61boAoewRhCL/+98B9KMrMXkfFiTqMBbcwXbCWs2gD2LcagrAOJ7xhle8YLJqW85jD4+4xXJ81hv9IW7SYYlay9mEWeElXOTM/h7TFefCO4ylFv8sdhQTdn54mK0oeIYVjOIh5xQ0ogBNVLU+0y4W0Vbhy9p/E1d29s30FFH8X5qtd9DG59+YnAVQAAAAAElFTkSuQmCC">
        </a>
        <a href="{{ route('elenco.index') }}">
            <img class="w-11 p-1 h-11 mx-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC5klEQVR4nO3ZW6gVZRQH8F9lGd6g8EDpOSKlkfggiBgY5EOgpoQgQhTVQ2CahJcHCS8PQQg+6JuhPggiiHhBkDITpSAsAiuiIEGE8kqiHlETs9CJiXUOwzR7t89pe2YOzR/Wyzdr5vuv9V9rfd9mMzjwDFbhC1zDQYw0CPAgZmADTiIpsDUqimGYj+24lCN9FcdzaydUCKPxJvbiZo7oL9iGl/Fw+D+Hz+L5PXSWSX4S3sNXuNugbE5gYpNvfBx+bw8gbw/hBWzEqQbEi+yPUKQo6yvC59D9Jj8cC7ADl3MEr2N/kPm2hYBuYxOmYy2+yTxLv912PBlSH4rNs2TSEtqMF/FI5p0H8EoflUrwWyRjdrvIT8ZqfN2k3nvsZ7wRozWPtJkX40KT9y9Gqc3Fo+2o95kh9emCzbpbyOYPmJf55pgIIm3gvJI/Yn2UVaref8IILMROXCmo9wNRUuMwBG/hTAsBfRnT6V5m7c8YryvxlDZgLJbgE/zegEh64j7b4P2hWF5wsBXZDezD63i8HeSnYF1Blv5tRH6IJwq+NyrUyR90qZ3HFsyJoNuCkXEZy4+8j7Ao7ju3WpgiH8RhtxRHcCfn8334TGtHvRfh3cyRvyvmf3oOyDXk1lCg1RGZ1vsxLMN4A4B3MpvfiYZOa3ZCge/EmN+NyKfNvwev4TEDjOcbkEoDejp8UlKvYnfBiD0bfTIrd9gNOHYFoU+jhDpjWvXM/M+jTLLkv8P7mHq/6r0/+DXIdWXWugqm09Hop/S8qCS6g2xnk0CqbsfFj5okyqkr7HAFyCV9tL+vAvmrdpLpkY6cgh2xXhX/pCcQMeerQKqjj/7/CCS7kNpPBdeOZpuU4S8mZ8NABmMQSVEgg9V6UTaROpBaEeWXUVL3iPIzntSKKD/LSa2I8jOb1IoEys5orUgkoRdlZ7RWpFZENa0XZROpA6kVUX4ZJf+LHjlXATJJPy39j6YXL8VC2aT6E8ScvwAnYZZsqyKAtQAAAABJRU5ErkJggg==">
        </a>
    </div>
    <a href="{{ route('index') }}">
        <p class="text-center my-auto w-1/3 font-bold text-3xl">Doblapedia</p>
    </a>
    <div class="w-1/3 ">
        <div class="w-full h-6 bg-slate-50 rounded-full "></div>
    </div>
</nav>


<div class="flex bg-slate-500 z-10 w-full min-h-[90vh]" id="container">
    <div class="w-3/4 mx-auto bg-gray-100 p-5  mt-[10vh]">
        <h1 class="text-5xl mb-2 font-semibold">Título</h1>
        <p class="font-medium">Descripción descripción descripción descripción descripción descripción descripción descripción descripción
            descripción descripción descripción descripción descripción descripción descripción</p>
        <div class="w-100 h-9 bg-green-300 my-4">
            <a href="{{ route('elenco.create') }}">Crear elenco</a>
        </div>

        @foreach($elencos as $elenco)
            <div class="w-100 flex px-3 mb-4">
                <a href="{{ route('elenco.show', $elenco->id) }}" class="text-decoration-none w-[80%] rounded-xl p-8 flex bg-orange-300 relative hover:scale-[101%]">
                    <div class="absolute flex items-center top-2 right-1">
                        <p class="text-xs">user_nombre</p>
                        <img class="w-6 h-6 ml-2"
                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAXklEQVR4nO3TMQqAMBBE0V/N1Y33dOMxFCGVprDZtXAepEkzEPLB7EnACnQggDbu0jXguJ3rLl2fDO8VwzEZ3r566qViWGM8qj/X/8gd446TyB1XkTvGHSeROzZeOAGWFFJap6wQ3wAAAABJRU5ErkJggg==">
                    </div>
                    <div class="bg-white rounded-full w-[6rem] h-[6rem]" style="background-size: 100%; background-position: center; background-image: url({{ $elenco->imagen ? $elenco->imagen : asset('https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg') }});"></div>
                    <div class="text-white flex-1 ml-4">
                        <p class="text-3xl font-semibold">{{$elenco->titulo}}</p>
                        <p class="line-clamp-3">{{$elenco->descripcion}}</p>
                    </div>

                </a>
                <div class="h-full flex-1 flex flex-col ml-9 my-auto">
                    <div class="flex items-center">
                        <img class="w-9 p-1 bg-slate-300 rounded-full hover:scale-110" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABnUlEQVR4nO3ZMUvDQBiA4RecRAWHgiBuKg4OLt3durgWHN2dRbA6+g8KDo5dCqW4dFMnxbEgdBAHf4CVllpF0MGTQgpFLuldosl9R164qSTkoWm+NIG8PHHdASpYn8A1sInAlGb1gS08gCjgCZjDA4gCTvAE0gNm8QCigF08gdTwBPKIgGYMIO8IaMcAMkBAFwaQexxvCfgygJzjeIcGiNHaw/EeDBDfwDIOt234bbRxvJoh5PQ/D+LW8CAm12ibcYvAR4x92K5hcFXcCIO8xdzxuP0UEOrXjeeKDtJJCGmnDFFAQwdpJYSoDNarDlIVCOnpIAcCIQ0dpCwM0gfWdJCiMEiJkArCIHUiGgqCdKMgHUGQXhSkJQjSiIJUhUD6YVesJLMkC0iJKZWFQOrTIEUhkO40SMEXSJz/JU6eWnFmybi0EM/AKgaFzZKj4AVNJUPIlSkiapbMB58vZAipY1HYLKkEmOMMIS82ENtZkiZkYAMpOgxp2kBsZ0nShxc2d7vrWHZpuPObiW1Gv5+z4Dz+6yclzTiIvLw8D/sBLsSN+7T0tOMAAAAASUVORK5CYII=">
                        <p class="ml-1.5 font-medium">136</p>
                    </div>
                    <div class="flex items-center mt-4">
                        <img class="w-9 p-1 bg-slate-300 rounded-full hover:scale-110"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABH0lEQVR4nO2ZPU7DQBCFP/EjGq5CS5cTxJTcgjtQEFFQ5hooJ0BJChpugEjFFRKnRRNF2gIRr+2VkGZWep/0Gjd+b96OCy8IIUq5A9bAHrBg2gMroBkK8RzArI3UrK8Jq0xNV5B1AGNWqGVXkDaAMSvUriuIVaoTvA0piBrB/ziZdgT/yZsawX/apkbwn7CpkYT3ZNXIX7wnq0bUCLF0grchBVEj+B8n045QUSNtAFNWqG1XkFUAY/Yfv0ybAMasUFMyzAKYs5F6yoX43cwy6M60yVu2ibFsRrzsgQr4HAjxDVwRnIt0H9EX5J4KmAyEmFMB58BHT4gFcElwroHXTIAf4AU4owLeMyGOz2+piLd0Uf+VvuGPwI23KSEERRwAhWs7uF5yrcgAAAAASUVORK5CYII=">
                        <p class="ml-1.5 font-medium">12</p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
    </div>
</div>
</body>

</html>
