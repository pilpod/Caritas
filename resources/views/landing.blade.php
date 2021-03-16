<x-layout>
<x-nav />
<x-back-to-top />
<main class="flex flex-col items-center gap-48">
    <section class="w-full" >
        <x-hero />
        <x-iframe src="https://www.youtube.com/embed/Rqt5B2Ko0Es" class="w-full h-72 lg:h-450px"/>
    </section>
<x-separator />
    <section class="flex flex-row items-center my-10 mx-6 justify-between w-full">
        <img class="hidden rounded-r-imglateral md:flex md:h-350px md:w-48 lg:h-365px lg:w-80" src="{{ asset('storage/img/SectionOneLeft.jpg') }}" alt="Caritas Logo" />
        <div class="flex flex-col gap-12 mx-6 w-660px">
            <h2 class="text-h2 p-3 text-center font-black md:text-d-h3 md:p-0">Necesidades básicas</h2>
            <p class="inline-flex flex-col gap-8 max-w-5xl">
                <span>
                    <b>Las necesidades humanas son universales.</b> Son comunes a todos los individuos y lo que varía son las formas con las que se da respuesta. Ayudar a la subsistencia de las personas es importante, pero para el desarrollo del individuo lo son tanto o más la protección, el afecto, el entendimiento, la participación, el ocio, la creatividad, la identidad, la libertad...
                </span>
                <span>
                    Hay que repensar respuestas implicando las personas. Hay alternativas que permiten acceder a las mismas necesidades básicas pero desde unos principios de organización colectiva y de <b>apoderamiento a través de la participación de las personas que vienen a pedir ayuda a Cáritas, del apoyo mutuo y de la horizontalidad.</b>
                </span>
                <span>
                    «La necesidad lleva al ingenio», dice el refrán popular. Y, efectivamente, la necesidad sentida como tal, nos <b>motiva</b>, nos <b>moviliza</b>, nos <b>compromete</b>, desarrolla las potencialidades y los recursos propios de la persona. Este enfoque promueve el <b>protagonismo</b> y la <b>participación</b>. Desde este enfoque las personas dejan de ser sólo receptoras de ayuda para pasar a ser protagonistas de su vida.
                </span>
                <span>
                    <b>Nuestras acciones deben desarrollar las capacidades y potencialidades de la persona</b>, así como también ofrecer escucha y acompañamiento personal y familiar. Es aquí donde se encuentra la potencia y el sentido de Cáritas. Debemos buscar siempre que nuestras acciones sean sinérgicas.
                </span>
            </p>
        </div>
        <img class="hidden rounded-l-imglateral md:flex md:h-350px md:w-48 lg:h-365px lg:w-80" src="{{ asset('storage/img/SectionOneRight.jpg') }}" alt="Caritas Logo" />
    </section>
<x-separator />
    <section class="flex flex-col items-center gap-20 mx-6 lg:gap-60">
        <x-mini-hero filename="family.svg" alt="" class="gap-4">
            <h2 class="text-h2 text-center font-bold max-w-7xl md:text-d-h3">Las familias no pueden cubrir sus necesidades</h2>
        </x-mini-hero>
        <div class="flex flex-col gap-24 lg:flex-row lg:flex-wrap lg:justify-around">
            <x-downtick-list title="Trabajo precario y paro">
                <li>Paro de larga duración</li>
                <li>Prestaciones públicas insuficientes</li>
                <li>Salarios bajos</li>
            </x-downtick-list>
            <x-downtick-list title="Baja protección social">
                <li>Prestaciones públicas en descenso.</li>
                <li>Recortes en educación, sanidad, servicios sociales.</li>
            </x-downtick-list>
            <x-downtick-list title="Fragilidad humana" class="w-full">
                <li>Roturas familiares</li>
                <li>Sin red relacional (familia, amistades, etc)</li>
                <li>Enfermedades</li>
            </x-downtick-list>
        </div>
            <x-mini-hero filename="giving.svg" alt="" class="gap-4" class="lg:flex-row-reverse">
                <h2 class="text-h2 p-3 text-center items-center font-bold max-w-7xl md:text-d-h3">El actual modelo se basa en las ayudas en especie</h2>
            </x-mini-hero>
        <ul class="font-bold text-body gap-12 md:grid md:grid-cols-2 md:grid-rows-2 md:text-d-body md:w-full md:place-items-center">
                <li class="md:w-350px">Las familias no pueden planificar la compra</li>
                <li class="md:w-350px">Se favorece la pérdida de la autonomía personal</li>
                <li class="md:w-350px">No pueden decidir según sus gustos personales, costumbres culturales, necesidades de salud</li> 
                <li class="md:w-350px">Se corre el riesgo de perder hábitos de administración del presupuesto familiar y las rutinas de compra</li>
        </ul>
    </section>
<x-separator />
    <section class="flex flex-col mx-6 gap-40">
    <h2 class="text-h2 text-center p-3 font-bold max-w-7xl md:text-d-h3">¿Qué queremos para promover esta innovación?</h2>
        <x-mini-hero filename="innovation.svg" alt="" class="gap-20" class="lg:flex-row-reverse">
            <ul class="font-bold gap-12">
                <li>Potenciar proyectos igualitarios, favorecer la discreción y evitar circuitos para pobres.</li>
                <li>Mantener los hábitos y las relaciones familiares (cocinar, comer, celebrar, etc).</li>
                <li>Impulsar proyectos donde las personas participen.</li>
                <li>Promover el intercambio y la reciprocidad.</li>
                <li>Dignificar al máximo la atención.</li>
            </ul>
        </x-mini-hero>
        <x-mini-hero filename="bestof.svg" alt="" class="gap-20">
            <ul class="font-bold gap-12">
                <li>Promover la autonomía y el empoderamiento de la persona (modelo no asistencialista)</li>
                <li>Elegir lo que se come, según gustos personales, culturales o de salud.</li>
                <li>Evitar el desperdicio y fomentar la sostenibilidad.</li>
                <li>Mantener el comercio local y de proximidad.</li>
                <li>Promover la formación y la inserción laboral.</li>
            </ul>
        </x-mini-hero>
    </section>
<x-separator />
    <section class="flex flex-row justify-around w-full mx-3 px-3 max-w-screen-xl">
        <x-iframe src="https://www.youtube.com/embed/sVGOeoHe8hQ" class="lg:h-80 xl:w-375px xl:h-350px"/>
        <x-iframe src="https://www.youtube.com/embed/XHnDWb9FzAM" class="lg:h-80 xl:w-375px xl:h-350px"/>
        <x-iframe src="https://www.youtube.com/embed/sHxuuPIcwbo" class="lg:h-80 xl:w-375px xl:h-350px"/>
    </section>
    <section class="text-center flex flex-col items-center mx-6 gap-20">
        <div class="flex flex-col gap-8">
            <p class="text-h5 font-black md:text-d-h5">Ayúdanos a estar donde más nos necesitan.</p>
            <h2 class="text-h2 font-black md:text-d-h3">¿Quieres apoyar este y otros proyectos de lucha contra la pobreza?</h2>
        </div>
        <button class="btn">Hacer una donación</button>
    </section>
</main>
    <x-footer class="mt-20"/>
</x-layout>