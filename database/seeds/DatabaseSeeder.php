<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\preguntas::truncate();
        /**voy a llamar al metodo truncate(se carga la base de datos) */
        DB::unprepared(file_get_contents('database/Preguntas_soloInserts.sql'));/**lee el archivo y lo ejecuta */
    }
}
