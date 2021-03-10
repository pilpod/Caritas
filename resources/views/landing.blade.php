<x-layout class="flex flex-col place-items-center mt-10">
    <x-nav />
    <x-hero/>
    <section class="flex flex-row items-center my-10">
        <img class="hidden md:flex flex-start rounded-r-full h-72" src="{{ asset('storage/img/SectionOneLeft.jpg') }}" alt="Caritas Logo"/>
        <div id="sectionOneText">
            <h2 class="text-h2 text-center p-3 my-6">Las necesidades básicas</h2>
            <p class="text-ui-body mx-6"><strong> Las necesidades humanas son universales.</strong> Son comunes a todos los individuos y lo que varía son las formas con las que se da respuesta. Ayudar a la subsistencia de las personas es importante, pero para el desarrollo del individuo lo son tanto o más la protección, el afecto, el entendimiento, la participación, el ocio, la creatividad, la identidad, la libertad...
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
    </section>
<x-separator />
    <section class="flex flex-col">
        <x-mini-hero presentation="reverse" filename="family.svg" alt="" class="justify-center">
            <h1 class="text-h2">Las familias no pueden cubrir sus necesidades</h1>
        </x-mini-hero>
        <x-downtick-list title="Trabajo precario y paro">
            <li>Paro de larga duración</li>
            <li>Prestaciones públicas insuficientes</li>
            <li>Salarios bajos</li>
        </x-downtick-list>
        <x-downtick-list title="Baja protección social">
            <li>Prestaciones públicas en descenso.</li>
            <li>Recortes en educación, sanidad, servicios sociales.</li>
        </x-downtick-list>
        <x-downtick-list title="Fragilidad humana">
            <li>Roturas familiares</li>
            <li>Sin red relacional (familia, amistades, etc)</li>
            <li>Enfermedades</li>
        </x-downtick-list>
    </section>
    <x-mini-hero filename="giving.svg" alt="">
        <h1 class="text-h2">El actual modelo se basa en las ayudas en especie</h1>
    </x-mini-hero>
<x-separator />
    <x-mini-hero filename="innovation.svg" alt="">
        <ul>
            <li>Potenciar proyectos igualitarios, favorecer la discreción y evitar circuitos para pobres.</li>
            <li>Mantener los hábitos y las relaciones familiares (cocinar, comer, celebrar, etc).</li>
            <li>Impulsar proyectos donde las personas participen.</li>
            <li>Promover el intercambio y la reciprocidad.</li>
            <li>Dignificar al máximo la atención.</li>
        </ul>
    </x-mini-hero>
    <x-mini-hero filename="bestof.svg" alt="">
        <ul>
            <li>Promover la autonomía y el empoderamiento de la persona (modelo no asistencialista)</li>
            <li>Elegir lo que se come, según gustos personales, culturales o de salud.</li>
            <li>Evitar el desperdicio y fomentar la sostenibilidad.</li>
            <li>Mantener el comercio local y de proximidad.</li>
            <li>Promover la formación y la inserción laboral.</li>
        </ul>
    </x-mini-hero>
</x-layout>