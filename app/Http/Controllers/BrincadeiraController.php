<?php

namespace App\Http\Controllers;

use App\Models\Brincadeira;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BrincadeiraController extends Controller
{
    /**
     * Lista todas as brincadeiras.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Busca todas as brincadeiras no banco de dados
        $brincadeiras = Brincadeira::all();

        return response()->json($brincadeiras);
    }

    /**
     * Cria uma nova brincadeira.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // Validação dos dados recebidos
        $data = $request->validate([
            'categoria' => 'required|string|max:255',
            'custo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'dificuldade' => 'required|string|max:255',
            'duracao' => 'required|string|max:255',
            'faixa_etaria' => 'required|string|max:255',
            'favorito' => 'required|boolean',
            'imagem' => 'required|string|max:255',
            'materiais' => 'required|array',
            'titulo' => 'required|string|max:255',
        ]);

        // Cria a brincadeira no banco de dados
        $brincadeira = Brincadeira::create($data);

        return response()->json(['message' => 'Brincadeira criada com sucesso!', 'brincadeira' => $brincadeira], 201);
    }

    /**
     * Exibe uma brincadeira específica.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $brincadeira = Brincadeira::find($id);

        if (!$brincadeira) {
            return response()->json(['message' => 'Brincadeira não encontrada'], 404);
        }

        return response()->json($brincadeira);
    }

    /**
     * Atualiza uma brincadeira existente.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $brincadeira = Brincadeira::find($id);

        if (!$brincadeira) {
            return response()->json(['message' => 'Brincadeira não encontrada'], 404);
        }

        // Validação dos dados recebidos
        $data = $request->validate([
            'categoria' => 'sometimes|string|max:255',
            'custo' => 'sometimes|string|max:255',
            'descricao' => 'sometimes|string',
            'dificuldade' => 'sometimes|string|max:255',
            'duracao' => 'sometimes|string|max:255',
            'faixa_etaria' => 'sometimes|string|max:255',
            'favorito' => 'sometimes|boolean',
            'imagem' => 'sometimes|string|max:255',
            'materiais' => 'sometimes|array',
            'titulo' => 'sometimes|string|max:255',
        ]);

        // Atualiza a brincadeira
        $brincadeira->update($data);

        return response()->json(['message' => 'Brincadeira atualizada com sucesso!', 'brincadeira' => $brincadeira]);
    }

    /**
     * Remove uma brincadeira.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $brincadeira = Brincadeira::find($id);

        if (!$brincadeira) {
            return response()->json(['message' => 'Brincadeira não encontrada'], 404);
        }

        $brincadeira->delete();

        return response()->json(['message' => 'Brincadeira removida com sucesso!']);
    }
}