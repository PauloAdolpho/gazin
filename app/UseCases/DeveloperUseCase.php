<?php declare(strict_types=1);

namespace App\UseCases;

use App\Repositories\DeveloperRepository;
use App\UseCases\Dtos\DeveloperDto;
use App\Models\Developer;
use Illuminate\Contracts\Cache\Repository;

class DeveloperUseCase 
{

    private array $response = [];

    public function save($datas)
    {
        $repository = new DeveloperRepository(new Developer(), new DeveloperDto($datas));
        $stored = $repository->store();

        if($stored){
            http_response_code(201);
            $this->response = ["Cadastrado com sucesso!", 201];
        }
        else{
            http_response_code(400);
            $this->response = ["Erro ao cadastrar!", 400];
        }

        return $this->response;
    }

    public function update(array $datas, int $id)
    {
        $repository = new DeveloperRepository(new Developer(), new DeveloperDto($datas));
        $updated = $repository->update($datas, $id);

        if($updated){
            http_response_code(200);
            $this->response = ["Atualizado com sucesso!", 200];
        }
        else{
            http_response_code(400);
            $this->response = ["Erro ao atualizar", 400];
        }

        return $this->response;
    }

    public function delete(int $id)
    {
        $repository = new DeveloperRepository(new Developer(), null);

        $deleted = $repository->delete($id);

        if($deleted){
            http_response_code(204);
            $this->response = ["Deletado com sucesso!", 204];
        }
        else{
            http_response_code(400);
            $this->response = ["Erro ao deletar!", 400];
        }
    }
}