<article>
    <div class="bg-red-light">
        <a href="#"><h1 class="text-h1 text-right mr-6">x</h1></a>
        <div id="container" class="bg-white-dark text-center mx-4 text-mobile-main rounded-3xl">
            <h1 class="text-h1 m-4"> Donar</h1>
            <p class="my-4">
                Puedes hacer una donación por transferencia bancaria o con el número de Bizum:
                <br>
                <br>
                {{ 'Fiare. Banca Ética 
                ES05 – 1550 – 0001 – 2800 – 0193 – 5626' }}
                {{ 'codigo 33432' }}
            </p>
            <p  class="my-4">
                BENEFICIOS FISCALES
                <br>
                <br>
                Con tu aportación económica disfrutarás de beneficios fiscales que te permitirán desgravar los donativos en la Declaración de la Renta o Impuesto de Sociedades. Si quieres desgravar envianos al correo
                <x-anchor
                href="mailto:santjosepbdn@gmail.com" 
                txt="santjosepbdn@mail.com"/> con los siguientes datos: 
                <br>
                PARTICULAR: Nombre i Apellido / DNI / dirección postal
                EMPRESA 
                <br>
                ENTITAD: Razón social / CIF / dirección postal          

            </p>
            <div class="flex flex-col items-center border-2 border-red bg-donar bg-center bg-cover rounded-3xl my-10">
                <img class="relative left-20 bottom-16" src="{{ asset('storage/img/decoLogoIzq.png')}}" alt="">
                <p class="m-2">
                    con 10 € aportarás leche para una pareja durante un mes.
                </p>
                <img class="w-20 h-20 m-4" src="{{ asset('storage/img/milk.png')}}" alt="">
                <p class="m-2">
                    con 20 € tendrán también un plato de legumbres, pasta o arróz.
                </p>  
                <img class="w-20 h-20 m-4" src="{{ asset('storage/img/pasta.png')}}" alt="">
                <p class="m-2"> 
                    con 50 € podrán comprar pescado y carne para un mes 
                </p>
                <img class="w-32 h-32 m-4" src="{{ asset('storage/img/fish.png')}}" alt="">
                <p class="m-2">
                    amb més € hi afegiràs productes de neteja
                </p>
                <img class="w-20 h-20 m-6" src="{{ asset('storage/img/soap.svg')}}" alt="">
                <img class="relative right-24 top-10 w-24 z-2" src="{{ asset('storage/img/decoLogoDrch.png')}}" alt="">
            </div>
        </div>
      
    </div>
</article>