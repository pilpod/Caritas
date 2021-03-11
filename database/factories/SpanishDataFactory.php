<?php

namespace Database\Factories;

use App\Models\SpanishData;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpanishDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SpanishData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_content' =>'main_text',
            'text_content' => 'En mayo de 2020, en plena crisis por la pandémia del Covid19, un grupo de amigos y conocidos vinculados a la parróquia de Sant Josep de Badalona, pusimos en marcha un punto de distribución de alimentos para familias en situación de vulnerabilidad que Càritas y servicios sociales de Badalona nos fue derivando.

            La acción consistió en dar respuesta durante los meses del estado de alarma (de mayo a julio) a familias sin recursos. Se promovió la colaboración de particulares y comercios de la zona, que contribuyeron con alimentos, donaciones económicas y se ofrecieron como recursos humanos. La respuesta fue muy positiva y exitosa, ya que pudimos contar con un grupo de 70 voluntarios para recojer, organizar, empaquetar y distribuir varios días por semana lotes para unas 80 familias en situación de vulnerabilidad.
            
            El banco de alimentos tenía fecha de finalización pero debíamos aprovechar la movilización y predisposición de voluntarios, comercios y vecinos del barrio...Fruto de esta experiencia vino la reflexión de diferenciar la demanda urgente y apostar por un proyecto emancipador, de largo recorrido que promocione la autonomía del usuario. Limitarse a la distribución de alimentos a las familias no permite poder atender aspectos importantes como la acogida y la promoción integral de la persona. Por todo ello nació el proyecto de acompañamiento y soporte a familias vulnerables mediante la tarjeta monedero.',
            'lang_id' => $this->faker->numberBetween(1, 2),
            'section_id'=> $this->faker->numberBetween(1, 5),

        ];
    }
}
