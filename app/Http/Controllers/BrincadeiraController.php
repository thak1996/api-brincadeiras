<?php

namespace App\Http\Controllers;

use App\Models\Brincadeira;
use App\Services\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BrincadeiraController extends Controller
{
    public function index(): JsonResponse
    {
        $brincadeiras = Brincadeira::all();

        return ResponseService::success($brincadeiras);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $this->validate($request, [
            'categoria' => 'required|string|max:255',
            'custo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'dificuldade' => 'required|string|max:255',
            'duracao' => 'required|string|max:255',
            'faixa_etaria' => 'required|string|max:255',
            'favorito' => 'nullable|boolean',
            'imagem' => 'nullable|string|max:255',
            'materiais' => 'required|array',
            'titulo' => 'required|string|max:255',
        ]);

        $brincadeira = Brincadeira::create($data);

        return ResponseService::success($brincadeira, 201);
    }

    public function show(int $id): JsonResponse
    {
        $brincadeira = Brincadeira::find($id);

        if (!$brincadeira) {
            return ResponseService::error('Brincadeira não encontrada', 404);
        }

        return ResponseService::success($brincadeira);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $brincadeira = Brincadeira::find($id);

        if (!$brincadeira) {
            return ResponseService::error('Brincadeira não encontrada', 404);
        }

        $data = $this->validate($request, [
            'categoria' => 'sometimes|string|max:255',
            'custo' => 'sometimes|string|max:255',
            'descricao' => 'sometimes|string',
            'dificuldade' => 'sometimes|string|max:255',
            'duracao' => 'sometimes|string|max:255',
            'faixa_etaria' => 'sometimes|string|max:255',
            'favorito' => 'nullable|boolean',
            'imagem' => 'nullable|string|max:255',
            'materiais' => 'sometimes|array',
            'titulo' => 'sometimes|string|max:255',
        ]);

        $brincadeira->update($data);

        return ResponseService::success($brincadeira);
    }

    public function destroy(int $id): JsonResponse
    {
        $brincadeira = Brincadeira::find($id);

        if (!$brincadeira) {
            return ResponseService::error('Brincadeira não encontrada', 404);
        }

        $brincadeira->delete();

        return ResponseService::success(null);
    }
}