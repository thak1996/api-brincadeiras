<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class BrincadeirasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonPath = database_path('data/brincadeiras.json');

        if (!File::exists($jsonPath)) {
            $this->command->error("Arquivo brincadeiras.json não encontrado em: $jsonPath");
            return;
        }

        $jsonData = File::get($jsonPath);
        $brincadeiras = json_decode($jsonData, true)['brincadeiras'];

        foreach ($brincadeiras as $brincadeira) {
            DB::table('brincadeiras')->insert([
                'titulo' => $brincadeira['titulo'],
                'descricao' => $brincadeira['descricao'],
                'faixa_etaria' => $brincadeira['faixaEtaria'],
                'materiais' => json_encode($brincadeira['materiais']),
                'duracao' => $brincadeira['duracao'],
                'custo' => $brincadeira['custo'],
                'dificuldade' => $brincadeira['dificuldade'],
                'categoria' => $brincadeira['categoria'],
                'favorito' => $brincadeira['favorito'],
                'imagem' => $brincadeira['imagem'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $this->command->info('Brincadeiras inseridas com sucesso!');
    }
}