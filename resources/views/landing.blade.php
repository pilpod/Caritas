<x-layout>
    <x-nav />
    <x-hero/>
    <section class="flex flex-row items-center my-10">
        <img class="hidden md:flex flex-start rounded-r-full h-72" src="{{ asset('storage/img/SectionOneLeft.jpg') }}" alt="Caritas Logo"/>
        <div id="sectionOneText">
            <h2 class="text-h3 text-center p-3 my-6">Las necesidades básicas</h2>
            <p class="text-mobile-main md:text-ui-tiny mx-6"><strong> Las necesidades humanas son universales.</strong> Son comunes a todos los individuos y lo que varía son las formas con las que se da respuesta. Ayudar a la subsistencia de las personas es importante, pero para el desarrollo del individuo lo son tanto o más la protección, el afecto, el entendimiento, la participación, el ocio, la creatividad, la identidad, la libertad...
            <br> 
            <br>    
            Hay que repensar respuestas implicando las personas. Hay alternativas que permiten acceder a las mismas necesidades básicas pero desde unos principios de organización colectiva y de <strong>apoderamiento a través de la participación de las personas que vienen a pedir ayuda a Cáritas, del apoyo mutuo y de la horizontalidad.
            </strong>
            <br>    
            <br>    
            «La necesidad lleva al ingenio», dice el refrán popular. Y, efectivamente, la necesidad sentida como tal, nos <strong>motiva</strong>, nos <strong>moviliza</strong>, nos <strong>compromete</strong>, desarrolla las potencialidades y los recursos propios de la persona. Este enfoque promueve el <strong>protagonismo</strong> y la <strong>participación</strong>. Desde este enfoque las personas dejan de ser sólo receptoras de ayuda para pasar a ser protagonistas de su vida.
            <br>    
            <br>    
            <strong>Nuestras acciones deben desarrollar las capacidades y potencialidades de la persona</strong>, así como también ofrecer escucha y acompañamiento personal y familiar. Es aquí donde se encuentra la potencia y el sentido de Cáritas. Debemos buscar siempre que nuestras acciones sean sinérgicas.</p>
        </div>
        <img class="hidden md:flex flex-end rounded-l-full h-72" src="{{ asset('storage/img/SectionOneRight.jpg') }}" alt="Caritas Logo"/>
    </section id="sectionFive">

    <section id="sectionFive" class=" text-center bg-white flex flex-col p-4 place-items-center mt-24">
        <div id="sectionFiveText">
            <p class="text-mobile-main md:text-ui-main-r px-4 py-2">
                Ayúdanos a estar donde más nos necesitan.
            </p>
            <h2 class="text-h4 md:text-h2 px-4 py-2">
                ¿Quieres apoyar este y otros proyectos de lucha contra la pobreza? 
            </h2>
        </div>
        <button type="button" class="focus:outline-none text-white text-mobile-tiny md:text-mobile-main my-6 py-2.5 px-5 border-b-4 border-red-light rounded-md bg-red hover:bg-red-light hover:border-red-lighter hover:text-red w-5/12 md:w-2/12 object-center ">HACER UNA DONACIÓN</button>
    </section>
    <x-back-to-top/>
</x-layout>