<div class="text-white resultado">
    <div class="p-auto infoDias" style="background-color: #306c77;">
        <div class="d-flex flex-row justify-content-evenly informacion">
            <!--Ubicación-->
            <div>
                <p>Código Postal: <span style="font-weight: 600;">{{ ucfirst($datosActuales['zip']) }}</span></p>
                <p>Ciudad: <span style="font-weight: 600;">{{ ucfirst($datosActuales['name']) }}</span></p>
            </div>
            <!--Buscar-->
            <div>
                <form action="/guardar" method="POST">
                @csrf
                    <div class="input-group">
                        <button type="submit" id="buscador" class="btn" style="background-color: transparent; font-weight: 700; font-size: 24px; color: #FFF;">
                            <i class="fa-solid fa-magnifying-glass-location"></i>
                        </button>
                        <div class="form-outline">
                            <input id="textoBuscador" name="cp" type="search" class="form-control rounded w-100" placeholder="Buscar otra zona" aria-label="Texto a Buscar" aria-describedby="search-addon" style="background-color: transparent; color: #FFF;" required />
                        </div>
                    </div>
                    <!--Se que no es el mismo icono, pero es el unico que hay parecido que sea gratis, los otros son con la version Pro-->
                </form>
            </div>
        </div>
        <div class="d-flex conjunto">
            <!--Ahora-->
            <div class="d-flex flex-column">
                <p class="text-center">Ahora</p>
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <img src="http://openweathermap.org/img/wn/{{ $datosFuturos['current']['weather'][0]['icon'] }}@4x.png" alt="icono">
                    <div class="d-flex flex-column">
                        <p style="font-weight: 600;">{{ ucfirst($datosFuturos['current']['weather'][0]['description']) }}</p>
                        <p class="display-3 text-center">{{ round($datosFuturos['current']['temp']) }}&#176</p>
                    </div>
                </div>
            </div>
            <div class="d-flex separacion">
                <div class="vr linea"></div>
            </div>
            <!--Próximas Horas-->
            <div>
                <p class="text-center">Próximas Horas</p>
                <div class="d-flex flex-row justify-content-center horas">
                    <div class="d-flex flex-column text-center hora">
                        <p style="font-size: 18px;" class="mb-0">Ahora</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['current']['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['current']['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['current']['temp']) }}&#176</p>
                    </div>
                    <div class="d-flex separacion">
                        <div class="vr"></div>
                    </div>
                    <div class="d-flex flex-column text-center hora">
                        <p style="font-size: 18px;" class="mb-0">{{ round(\Carbon\Carbon::createFromTimestamp($datosFuturos['hourly'][1]['dt'])->hour) }}:00</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['hourly'][1]['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['hourly'][1]['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['hourly'][1]['temp']) }}&#176</p>
                    </div>
                    <div class="d-flex separacion">
                        <div class="vr"></div>
                    </div>
                    <div class="d-flex flex-column text-center hora">
                        <p style="font-size: 18px;" class="mb-0">{{ round(\Carbon\Carbon::createFromTimestamp($datosFuturos['hourly'][2]['dt'])->hour) }}:00</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['hourly'][2]['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['hourly'][2]['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['hourly'][2]['temp']) }}&#176</p>
                    </div>
                    <div class="d-flex separacion">
                        <div class="vr"></div>
                    </div>
                    <div class="d-flex flex-column text-center hora">
                        <p style="font-size: 18px;" class="mb-0">{{ round(\Carbon\Carbon::createFromTimestamp($datosFuturos['hourly'][3]['dt'])->hour) }}:00</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['hourly'][3]['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['hourly'][3]['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['hourly'][3]['temp']) }}&#176</p>
                    </div>
                </div>
            </div>
            <div class="d-flex separacion">
                <div class="vr linea"></div>
            </div>
            <!--Próximos 5 días-->
            <div>
                <p class="text-center">Próximos 5 días</p>
                <div class="d-flex flex-row justify-content-center dias">
                    <div class="d-flex flex-column text-center dia">
                        <p style="font-size: 18px;" class="mb-0">{{ ucfirst(\Carbon\Carbon::createFromTimestamp($datosFuturos['daily'][1]['dt'])->format('D')) }}</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['daily'][1]['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['daily'][1]['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['daily'][1]['temp']['max']) }}&#176</p>
                    </div>
                    <div class="d-flex separacion">
                        <div class="vr"></div>
                    </div>
                    <div class="d-flex flex-column text-center dia">
                        <p style="font-size: 18px;" class="mb-0">{{ ucfirst(\Carbon\Carbon::createFromTimestamp($datosFuturos['daily'][2]['dt'])->format('D')) }}</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['daily'][2]['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['daily'][2]['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['daily'][2]['temp']['max']) }}&#176</p>
                    </div>
                    <div class="d-flex separacion">
                        <div class="vr"></div>
                    </div>
                    <div class="d-flex flex-column text-center dia">
                        <p style="font-size: 18px;" class="mb-0">{{ ucfirst(\Carbon\Carbon::createFromTimestamp($datosFuturos['daily'][3]['dt'])->format('D')) }}</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['daily'][3]['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['daily'][3]['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['daily'][3]['temp']['max']) }}&#176</p>
                    </div>
                    <div class="d-flex separacion">
                        <div class="vr"></div>
                    </div>
                    <div class="d-flex flex-column text-center dia">
                        <p style="font-size: 18px;" class="mb-0">{{ ucfirst(\Carbon\Carbon::createFromTimestamp($datosFuturos['daily'][4]['dt'])->format('D')) }}</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['daily'][4]['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['daily'][4]['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['daily'][4]['temp']['max']) }}&#176</p>
                    </div>
                    <div class="d-flex separacion">
                        <div class="vr"></div>
                    </div>
                    <div class="d-flex flex-column text-center dia">
                        <p style="font-size: 18px;" class="mb-0">{{ ucfirst(\Carbon\Carbon::createFromTimestamp($datosFuturos['daily'][5]['dt'])->format('D')) }}</p>
                        <img class="imagen" src="http://openweathermap.org/img/wn/{{ $datosFuturos['daily'][5]['weather'][0]['icon'] }}.png" alt="icono">
                        <p>{{ ucfirst($datosFuturos['daily'][5]['weather'][0]['description']) }}</p>
                        <p style="font-weight: 600; font-size: 18px;">{{ round($datosFuturos['daily'][5]['temp']['max']) }}&#176</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (count($ciudades) == 5)
    <div class="infoTemp" style="background-color: #306c77;">
        <p class="text-center" style="font-size: 24px;">Top 5 de las zonas más frías<br />según tus búsquedas</p>
        <div class="d-flex flex-row justify-content-start align-items-center">
            <p style="font-size: 16px;">1. </p>
            <p style="font-size: 26px; margin-left: 2rem;">{{ $ciudades[0]['temperatura'] }}&#176</p>
            <div class="d-flex flex-column datos" style=" margin-left: 1rem;">
                <p>CP: <span style="font-weight: 600;">{{ str_pad($ciudades[0]['cp'],5,'0',STR_PAD_LEFT) }}</span></p>
                <p>Ciudad: <span style="font-weight: 600;">{{ $ciudades[0]['nCiudad'] }}</span></p>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-row justify-content-start align-items-center">
            <p style="font-size: 16px;">2. </p>
            <p style="font-size: 26px; margin-left: 2rem;">{{ $ciudades[1]['temperatura'] }}&#176</p>
            <div class="d-flex flex-column datos" style=" margin-left: 1rem;">
                <p>CP: <span style="font-weight: 600;">{{ str_pad($ciudades[1]['cp'],5,'0',STR_PAD_LEFT) }}</span></p>
                <p>Ciudad: <span style="font-weight: 600;">{{ $ciudades[1]['nCiudad'] }}</span></p>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-row justify-content-start align-items-center">
            <p style="font-size: 16px;">3. </p>
            <p style="font-size: 26px; margin-left: 2rem;">{{ $ciudades[2]['temperatura'] }}&#176</p>
            <div class="d-flex flex-column datos" style=" margin-left: 1rem;">
                <p>CP: <span style="font-weight: 600;">{{ str_pad($ciudades[2]['cp'],5,'0',STR_PAD_LEFT) }}</span></p>
                <p>Ciudad: <span style="font-weight: 600;">{{ $ciudades[2]['nCiudad'] }}</span></p>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-row justify-content-start align-items-center">
            <p style="font-size: 16px;">4. </p>
            <p style="font-size: 26px; margin-left: 2rem;">{{ $ciudades[3]['temperatura'] }}&#176</p>
            <div class="d-flex flex-column datos" style=" margin-left: 1rem;">
                <p>CP: <span style="font-weight: 600;">{{ str_pad($ciudades[3]['cp'],5,'0',STR_PAD_LEFT) }}</span></p>
                <p>Ciudad: <span style="font-weight: 600;">{{ $ciudades[3]['nCiudad'] }}</span></p>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-row justify-content-start align-items-center">
            <p style="font-size: 16px;">5. </p>
            <p style="font-size: 26px; margin-left: 2rem;">{{ $ciudades[4]['temperatura'] }}&#176</p>
            <div class="d-flex flex-column datos" style=" margin-left: 1rem;">
                <p>CP: <span style="font-weight: 600;">{{ str_pad($ciudades[4]['cp'],5,'0',STR_PAD_LEFT) }}</span></p>
                <p>Ciudad: <span style="font-weight: 600;">{{ $ciudades[4]['nCiudad'] }}</span></p>
            </div>
        </div>
    </div>
    @endif
    <br>
</div>