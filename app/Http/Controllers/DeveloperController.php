<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Developer;
use App\UseCases\DeveloperUseCase;

class DeveloperController
{

    public function index()
    {
        $developers = Developer::all();
        
        json_encode([$developers, 200]);
    }

    public function store()
    {
        $dados = filter_input(INPUT_GET, 'developer', FILTER_DEFAULT);
        $use_case = new DeveloperUseCase();
        $response = $use_case->save($dados);

        echo json_encode($response);
    }

    public function show(int $id)
    {
        $developer = Developer::find($id);

        echo json_encode($developer);
    }

    public function update(int $id)
    {
        $dados = filter_input(INPUT_GET, 'developer', FILTER_DEFAULT);
        
        $use_case = new DeveloperUseCase($dados);
        $response = $use_case->update($dados, $id);
        echo json_encode($response);
    }

    public function destroy(int $id)
    {
        $use_case = new DeveloperUseCase();
        $response = $use_case->delete($id);
        echo json_encode($response);
    }

}