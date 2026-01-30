<?php

namespace Database\Seeders;

use App\Models\Bulo;
use App\Models\User;
use Illuminate\Database\Seeder;

class BulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::count() < 3

                    ? collect([

                        User::create([
                            'name' => 'Alice Developer',
                            'email' => 'alice@example.com',
                            'password' => bcrypt('password'),
                        ]),

                        User::create([
                            'name' => 'Bob Builder',
                            'email' => 'bob@example.com',
                            'password' => bcrypt('password'),
                        ]),

                        User::create([
                            'name' => 'Charlie Coder',
                            'email' => 'charlie@example.com',
                            'password' => bcrypt('password'),
                        ]),

                    ])

                    : User::take(3)->get();

        $bulos = [
            [
                'texto' => 'El feminismo busca la superioridad de la mujer sobre el hombre.',
                'texto_desmentido' => 'Falso. El feminismo es un movimiento social y político que persigue la igualdad de derechos y oportunidades entre mujeres y hombres.'
            ],
            [
                'texto' => 'La brecha salarial es un mito, se debe a que las mujeres eligen trabajos peor pagados.',
                'texto_desmentido' => 'Incorrecto. Incluso comparando puestos iguales o de igual valor, las estadísticas muestran que las mujeres perciben salarios inferiores debido a factores estructurales y discriminación.'
            ],
            [
                'texto' => 'La mayoría de las denuncias por violencia de género son falsas.',
                'texto_desmentido' => 'Es un dato erróneo. Según datos oficiales del Consejo General del Poder Judicial (CGPJ), las denuncias falsas representan un porcentaje ínfimo, inferior al 0,01%.'
            ],
            [
                'texto' => 'Las feministas odian a los hombres.',
                'texto_desmentido' => 'No es cierto. El feminismo no odia a los hombres (misandria), sino que lucha contra el sistema patriarcal que oprime a las mujeres y también impone roles rígidos a los hombres.'
            ],
            [
                'texto' => 'Ya existe igualdad legal, por lo que el feminismo ya no es necesario.',
                'texto_desmentido' => 'La igualdad legal no garantiza la igualdad real. Aún persisten techos de cristal, violencia machista, desigualdades en los cuidados y estereotipos que hacen necesaria la lucha feminista.'
            ],
        ];

        // Create bulos for random users
        foreach ($bulos as $bulo) {
            $users->random()->bulos()->create([
                'texto' => $bulo['texto'],
                'texto_desmentido' => $bulo['texto_desmentido'],
                'created_at' => now()->subMinutes(rand(5, 1440)),
            ]);
        }

    }
}
