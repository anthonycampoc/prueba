<?php

namespace Database\Seeders;

use App\Models\Canton;
use Illuminate\Database\Seeder;

class CantonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cantones = [
            [
                'nombre' => 'Cuenca',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'Gualaceo',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'Chordeleg',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'Nabón',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'Girón',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'San Fernando',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'Santa Isabel',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'Pucará',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'Déleg',
                'provincia_id' => 1, // Azuay
            ],
            [
                'nombre' => 'Caluma',
                'provincia_id' => 2, // Bolívar
            ],
            [
                'nombre' => 'Chimbo',
                'provincia_id' => 2, // Bolívar
            ],
        
            [
                'nombre' => 'Las Naves',
                'provincia_id' => 2, // Bolívar
            ],
            [
                'nombre' => 'Mocha',
                'provincia_id' => 2, // Bolívar
            ],
            [
                'nombre' => 'Montecalvo',
                'provincia_id' => 2, // Bolívar
            ],
            [
                'nombre' => 'San Carlos de Echeandía',
                'provincia_id' => 2, // Bolívar
            ],
            [
                'nombre' => 'San Miguel de Bolívar',
                'provincia_id' => 2, // Bolívar
            ],
            [
                'nombre' => 'Warmi',
                'provincia_id' => 2, // Bolívar
            ],
            [
                'nombre' => 'Azogues',
                'provincia_id' => 3, // Cañar
            ],
            [
                'nombre' => 'Biblián',
                'provincia_id' => 3, // Cañar
            ],
            [
                'nombre' => 'Déleg',
                'provincia_id' => 3, // Cañar
            ],
            [
                'nombre' => 'Cañar',
                'provincia_id' => 3, // Cañar
            ],
            [
                'nombre' => 'El Tambo',
                'provincia_id' => 3, // Cañar
            ],
            [
                'nombre' => 'Suscal',
                'provincia_id' => 3, // Cañar
            ],
            [
                'nombre' => 'Tulcán',
                'provincia_id' => 4, // Carchi
            ],
            [
                'nombre' => 'Montufar',
                'provincia_id' => 4, // Carchi
            ],
            [
                'nombre' => 'Bolívar',
                'provincia_id' => 4, // Carchi
            ],
            [
                'nombre' => 'Huaca',
                'provincia_id' => 4, // Carchi
            ],
            [
                'nombre' => 'Mira',
                'provincia_id' => 4, // Carchi
            ],
            [
                'nombre' => 'Espejo',
                'provincia_id' => 4, // Carchi
            ],
            [
                'nombre' => 'San Pedro de Huaca',
                'provincia_id' => 4, // Carchi
            ],

            [
                'nombre' => 'Riobamba',
                'provincia_id' => 5, // Chimborazo (ID 5)
            ],
            [
                'nombre' => 'Alausí',
                'provincia_id' => 5, // Chimborazo (ID 5)
            ],
            [
                'nombre' => 'Chambo',
                'provincia_id' => 5, // Chimborazo (ID 5)
            ],
            [
                'nombre' => 'Chunchi',
                'provincia_id' => 5, // Chimborazo (ID 5)
            ],
            [
                'nombre' => 'Guamote',
                'provincia_id' => 5, // Chimborazo (ID 5)
            ],
            [
                'nombre' => 'Penipe',
                'provincia_id' => 5, // Chimborazo (ID 5)
            ],
            [
                'nombre' => 'Colta',
                'provincia_id' => 5, // Chimborazo (ID 5)
            ],
            [
                'nombre' => 'Latacunga',
                'provincia_id' => 6,
            ],
            [
                'nombre' => 'Saquisilí',
                'provincia_id' => 6,
            ],
            [
                'nombre' => 'Salcedo',
                'provincia_id' => 6,
            ],
            [
                'nombre' => 'Sigchos',
                'provincia_id' => 6,
            ],
            [
                'nombre' => 'Pangua',
                'provincia_id' => 6,
            ],
            [
                'nombre' => 'La Maná',
                'provincia_id' => 6,
            ],
            [
                'nombre' => 'Quito (Distrito Metropolitano)',
                'provincia_id' => 6, // Quito pertenece a Pichincha (ID: 19), pero lo incluyo aquí por si lo necesitas.
            ],

            [
                'nombre' => 'Machala',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Chilla',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Pasaje',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Santa Rosa',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Balsas',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Arenillas',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Huaquillas',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Morales',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Portovelo',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Atahualpa',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Huaquillas',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Las Lajas',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Marcabelí',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Piñas',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Zaruma',
                'provincia_id' => 7,
            ],
            [
                'nombre' => 'Atacames',
                'provincia_id' => 8, // Esmeraldas
            ],
            [
                'nombre' => 'Esmeraldas',
                'provincia_id' => 8, // Esmeraldas
            ],
            [
                'nombre' => 'Eloy Alfaro',
                'provincia_id' => 8, // Esmeraldas
            ],
            [
                'nombre' => 'Muros',
                'provincia_id' => 8, // Esmeraldas
            ],
            [
                'nombre' => 'Quinindé',
                'provincia_id' => 8, // Esmeraldas
            ],
            [
                'nombre' => 'Rioverde',
                'provincia_id' => 8, // Esmeraldas
            ],
            [
                'nombre' => 'San Lorenzo',
                'provincia_id' => 8, // Esmeraldas
            ],
            [
                'nombre' => 'Isabela',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'San Cristóbal',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Santa Cruz',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Baltra',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'San Francisco',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Floreana',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Santa Fe',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Jervis',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Marchena',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Rábida',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Seymour Norte',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Wolf',
                'provincia_id' => 9, // Galápagos
            ],
            [
                'nombre' => 'Alfredo Baquerizo Moreno (Simón Bolívar)',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Baba',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Balzar',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Colonia Yaguachi',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Daule',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Durán',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'El Empalme',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'El Triunfo',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'General Villamil Playas',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Guayaquil',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Isidro Carbo',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'La Concordia',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Milagro',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Naranjito',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Oncativo',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Pedro Carbo',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Quimsacocha',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Salinas',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Samborondón',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Santa Elena',
                'provincia_id' => 10, // Guayas
            ],
            [
                'nombre' => 'Yaguachi',
                'provincia_id' => 10, // Guayas
            ],

            [
                'nombre' => 'Antonio Ante',
                'provincia_id' => 11, // Imbabura
            ],
            [
                'nombre' => 'Cotacachi',
                'provincia_id' => 11, // Imbabura
            ],
            [
                'nombre' => 'Ibarra',
                'provincia_id' => 11, // Imbabura
            ],
            [
                'nombre' => 'Otavalo',
                'provincia_id' => 11, // Imbabura
            ],
            [
                'nombre' => 'Pijal',
                'provincia_id' => 11, // Imbabura
            ],
            [
                'nombre' => 'Quito',
                'provincia_id' => 11, // Imbabura
            ],
            [
                'nombre' => 'San Miguel de Urcuquí',
                'provincia_id' => 11, // Imbabura
            ],
            [
                'nombre' => 'Loja',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Saraguro',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Calvas',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Espíndola',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Chaguarpamba',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Paltas',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Celica',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Quilanga',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Sozoranga',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Gonzanamá',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Macará',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Catamayo',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Zapotillo',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Loja (Rural)',
                'provincia_id' => 12, // Loja
            ],
            [
                'nombre' => 'Babahoyo',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Quevedo',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Vinces',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Ventanas',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Urdaneta',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Baba',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Montalvo',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Palestina',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Valencia',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Quinsaloma',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Mocache',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Buena Fe',
                'provincia_id' => 13, // Los Ríos
            ],
            [
                'nombre' => 'Valencia (Rural)',
                'provincia_id' => 13, // Los Ríos
            ],

            [
                'nombre' => '24 de Mayo',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Bolívar',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Chone',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'El Carmen',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Flavio Alfaro',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Jipijapa',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Junín',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Kantón Manta',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Montecristi',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Pajal',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Pedernales',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Portoviejo',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Puerto López',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Quito',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Rocafuerte',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Santa Ana',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Sucre',
                'provincia_id' => 14, // Manabí
            ],
            [
                'nombre' => 'Tosagua',
                'provincia_id' => 14, // Manabí
            ],

            [
                'nombre' => 'Morona',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Gualaquiza',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Sucúa',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Limón Indanza',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Tiicya',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Palora',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Taisha',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Yantzatza',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Patuca',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Rivera',
                'provincia_id' => 15, // Morona Santiago
            ],
            [
                'nombre' => 'Archidona',
                'provincia_id' => 16, // Napo
            ],
            [
                'nombre' => 'Atahualpa',
                'provincia_id' => 16, // Napo
            ],
            [
                'nombre' => 'Baeza',
                'provincia_id' => 16, // Napo
            ],
            [
                'nombre' => 'Carlos Julio Arosemena Tola',
                'provincia_id' => 16, // Napo
            ],
            [
                'nombre' => 'El Chaco',
                'provincia_id' => 16, // Napo
            ],
            [
                'nombre'=> 'Quijos',
                'provincia_id' => 16, // Napo
            ],
            [
                'nombre' => 'Tena',
                'provincia_id' => 16, // Napo
            ],

            [
                'nombre' => 'Aguarico',
                'provincia_id' => 17, // Orellana
            ],
            [
                'nombre' => 'La Joya de los Sachas',
                'provincia_id' => 17, // Orellana
            ],
            [
                'nombre' => 'Loreto',
                'provincia_id' => 17, // Orellana
            ],
            [
                'nombre' => 'Orellana',
                'provincia_id' => 17, // Orellana
            ],

            [
                'nombre' => 'Pastaza',
                'provincia_id' => 18, // Pastaza
            ],
            [
                'nombre' => 'Mera',
                'provincia_id' => 18, // Pastaza
            ],
            [
                'nombre' => 'Santa Clara',
                'provincia_id' => 18, // Pastaza
            ],
            [
                'nombre' => 'Arajuno',
                'provincia_id' => 18, // Pastaza
            ],
            [
                'nombre' => 'Santiago de Mera',
                'provincia_id' => 18, // Pastaza
            ],

            [
                'nombre' => 'Quito',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Mejía',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Rumiñahui',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Pedro Vicente Maldonado',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Diego Alonso Sánchez',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Los Chillos',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Eloy Alfaro',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Manuela Sáenz',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Quito Norte',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Sangolquí',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Pifo',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Mariscal Sucre',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Pedro Moncayo',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Mejía',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Rumiñahui',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Pedro Vicente Maldonado',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Diego Alonso Sánchez',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Los Chillos',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Eloy Alfaro',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Manuela Sáenz',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Quito Norte',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Sangolquí',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Pifo',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Mariscal Sucre',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Pedro Moncayo',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Mejía',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Rumiñahui',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Pedro Vicente Maldonado',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Diego Alonso Sánchez',
                'provincia_id' => 19, // Pichincha
            ],
            [
                'nombre' => 'Los Chillos',
                'provincia_id' => 19, // Pichincha
            ],

            [
                'nombre' => 'Santa Elena',
                'provincia_id' => 20, // Santa Elena
            ],
            [
                'nombre' => 'Salinas',
                'provincia_id' => 20, // Santa Elena
            ],
            [
                'nombre' => 'La Libertad',
                'provincia_id' => 20, // Santa Elena
            ],
            [
                'nombre' => 'Atahualpa',
                'provincia_id' => 20, // Santa Elena
            ],
            [
                'nombre' => 'Shushufindi',
                'provincia_id' => 21, // Sucumbíos
            ],
            [
                'nombre' => 'Sucumbíos',
                'provincia_id' => 21, // Sucumbíos
            ],
            [
                'nombre' => 'Cascales',
                'provincia_id' => 21, // Sucumbíos
            ],
            [
                'nombre' => 'Gonzalo Pizarro',
                'provincia_id' => 21, // Sucumbíos
            ],
            [
                'nombre' => 'Putumayo',
                'provincia_id' => 21, // Sucumbíos
            ],
            [
                'nombre' => 'Lardón',
                'provincia_id' => 21, // Sucumbíos
            ],
            [
                'nombre' => 'Cachabi',
                'provincia_id' => 21, // Sucumbíos
            ],
            [
                'nombre' => 'Huaca',
                'provincia_id' => 21, // Sucumbíos
            ],
            [
                'nombre' => 'Viña del Río',
                'provincia_id' => 21, // Sucumbíos
            ],

            [
                'nombre' => 'Ambato',
                'provincia_id' => 22, // Tungurahua
            ],
            [
                'nombre' => 'Baños de Agua Santa',
                'provincia_id' => 22, // Tungurahua
            ],
            [
                'nombre' => 'Cevallos',
                'provincia_id' => 22, // Tungurahua
            ],
            [
                'nombre' => 'Mocha',
                'provincia_id' => 22, // Tungurahua
            ],
            [
                'nombre' => 'Patate',
                'provincia_id' => 22, // Tungurahua
            ],
            [
                'nombre' => 'Quero',
                'provincia_id' => 22, // Tungurahua
            ],
            [
                'nombre' => 'Tisaleo',
                'provincia_id' => 22, // Tungurahua
            ],

            [
                'nombre' => 'Zamora',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Chinchipe',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Yantzaza',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Nangaritza',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Palanda',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'El Pangui',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Yacuambi',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Paquisha',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Timbara',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Nano',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Chinchipe',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Yantzaza',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Nangaritza',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Palanda',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'El Pangui',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Yacuambi',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Paquisha',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Timbara',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Nano',
                'provincia_id' => 23, // Zamora Chinchipe
            ],
            [
                'nombre' => 'Santo Domingo',
                'provincia_id' => 24, // Santo Domingo de los Tsáchilas
            ],
            [
                'nombre' => 'La Concordia',
                'provincia_id' => 24, // Santo Domingo de los Tsáchilas
            ]
        
        ];

        foreach ($cantones as $item) {
            Canton::create($item);
        }
    }
}
