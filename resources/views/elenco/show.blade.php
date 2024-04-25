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


<div class="flex bg-slate-500 z-10 w-full min-h-[100vh]" id="container">
    <div class="w-3/4 mx-auto bg-gray-100 px-5 pt-[10vh]">
        <div class="w-3/4 bg-orange-300 flex px-7 py-5 mx-auto mt-0 rounded-b-lg">
            <div class="flex-column justify-center">
                <div class="bg-white rounded-full w-[6rem] h-[6rem]" style="background-size: 100%; background-position: center; background-image: url({{ $elenco->imagen ? $elenco->imagen : asset('https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg') }});"></div>
                <p class="text-xs w-full text-center my-3">{{ $elenco->nombre }}</p>
            </div>
            <div class="flex-1 px-5">
                <h1 class="mt-3 font-semibold text-4xl">{{ $elenco->titulo }}</h1>
                <p class="mt-2 text-sm">{{ $elenco->descripcion }}</p>
            </div>
        </div>
        <h2 class="mt-7 font-bold text-3xl text-center">Reparto</h2>
        <div class="w-3/5 mx-auto">
            @foreach($elenco->papeles as $personaje)
                <div class="flex w-full justify-between mt-8 {{ $personaje->descripcion ? 'mb-3' : 'mb-8' }} relative">
                    <div class="bg-slate-400 w-20 aspect-square rounded-sm" style="background-size: 100%; background-position: center; background-image: url({{ $personaje->foto ? $personaje->foto : asset('https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg') }});"></div>
                    <div class="flex-1 flex flex-col justify-between h-20 mx-2">
                        <p class="self-start font-medium">{{ $personaje->nombre }}</p>
                        @if($personaje->actor_id)
                            @php
                                $actor = App\Models\Actor::find($personaje->actor_id);
                            @endphp
                            @if($actor)
                                <p class="self-end font-semibold">{{ $actor->nombre }} {{ $actor->apellido }}</p>
                            @endif
                        @else
                            <p class="self-end font-semibold">{{ $personaje->nombre_actor }}</p>
                        @endif
                    </div>
                    @if($personaje->actor_id)
                        <a href="{{ route('actor.show', $actor->id) }}">
                        <div class="bg-slate-400 w-20 aspect-square rounded-full" style="background-size: 100%; background-position: center; background-image: url({{ $actor->imagen ? $actor->imagen : asset('https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg') }});"></div>
                        </a>
                    @else
                        <div class="bg-slate-400 w-20 aspect-square rounded-full" style="background-size: 100%; background-position: center; background-image: url('https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg');"></div>
                    @endif
                </div>
                @if($personaje->descripcion)
                <p class="mb-3.5 w-[90%] mx-auto">{{$personaje->descripcion}}</p>
                @endif
            @endforeach
        </div>
    </div>
</div>
</body>

</html>
