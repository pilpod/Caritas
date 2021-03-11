<x-layout>
<x-nav />
<main class="flex flex-col items-center gap-20">
    <section>
        <x-hero />
        <x-youtubeiframe />
    </section>
    <section class="flex flex-row items-center my-10 mx-6">
        <img class="hidden md:flex flex-start rounded-r-full h-72" src="{{ asset('storage/img/SectionOneLeft.jpg') }}" alt="Caritas Logo"/>
        <div class="flex flex-col gap-12">
            <h2 class="text-h2 p-3 text-center font-black">Necesidades básicas</h2>
            <p class="inline-flex flex-col gap-8">
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
        <img class="hidden md:flex flex-end rounded-l-full h-72" src="{{ asset('storage/img/SectionOneRight.jpg') }}" alt="Caritas Logo"/>
    </section>
<x-separator />
    <section class="flex flex-col items-center gap-20 mx-6">
        <x-mini-hero presentation="reverse" filename="family.svg" alt="">
            <h2 class="text-h2 text-center font-black">Las familias no pueden cubrir sus necesidades</h2>
        </x-mini-hero>
        <div class="flex flex-col gap-24">
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
        </div>
            <x-mini-hero presentation="reverse" filename="giving.svg" alt="">
                <h2 class="text-h2 p-3 text-center font-black">El actual modelo se basa en las ayudas en especie</h2>
            </x-mini-hero>
        <ul class="font-bold text-body gap-12">
            <li>Las familias no pueden planificar la compra</li>
            <li>No pueden decidir según sus gustos personales, costumbres culturales, necesidades de salud</li>
            <li>Se favorece la pérdida de la autonomía personal</li>
            <li>Se corre el riesgo de perder hábitos de administración del presupuesto familiar y las rutinas de compra</li>
        </ul>
    </section>
<x-separator />
    <section class="flex flex-col mx-6 gap-40">
    <h2 class="text-h2 text-center p-3 mb-20 font-black">¿Qué queremos para promover esta innovación?</h2>
        <x-mini-hero presentation="reverse" filename="innovation.svg" alt="">
            <ul class="font-bold gap-12">
                <li>Potenciar proyectos igualitarios, favorecer la discreción y evitar circuitos para pobres.</li>
                <li>Mantener los hábitos y las relaciones familiares (cocinar, comer, celebrar, etc).</li>
                <li>Impulsar proyectos donde las personas participen.</li>
                <li>Promover el intercambio y la reciprocidad.</li>
                <li>Dignificar al máximo la atención.</li>
            </ul>
        </x-mini-hero>
        <x-mini-hero presentation="reverse" filename="bestof.svg" alt="">
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
</main>
    <x-footer />
    <x-back-to-top />
</x-layout>