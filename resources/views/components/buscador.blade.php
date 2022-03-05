<div>
    <div class="text-center">
        <p id="TextoInformativo" class="text-white" style="font-weight: 600;">Entérate del tiempo en la zona exacta que te interesa<br />buscando por código postal.</p>
        <div class="input-group d-flex flex-column">
            <form action="/guardar" method="POST">
                @csrf
                <input id="textoBuscador" name="cp" type="search" class="form-control rounded w-100" placeholder="Introduce el código postal" aria-label="Texto a Buscar" aria-describedby="search-addon" style="background-color: transparent; border-color: #FFF; color: #FFF;" required />
                <button id="buscador" type="submit" class="btn btn-primary mt-3 position-relative text-white w-100" style="background-color: #00BDE0; border-color: #00BDE0; font-weight: 700; font-size: 14px;">Buscar 
                    <i class="fa-solid fa-magnifying-glass-location position-left" style="position: relative; right: -125px;"></i>
                </button>
                <!--Se que no es el mismo icono, pero es el unico que hay parecido que sea gratis, los otros son con la version Pro-->
            </form>
        </div>
        <div style="position: relative; top: 150px;">
            <p class="text-white">¡Que la lluvia no te pare!</p>
        </div>
    </div>
</div>