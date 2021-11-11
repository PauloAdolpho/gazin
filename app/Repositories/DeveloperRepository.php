<?php declare(strict_types=1);

namespace App\Repositories;

use App\UseCases\Dtos\DtoInterface;
use App\Models\Developer;
use PDOException;

class DeveloperRepository
{
    /**
     * 
     * @param Model $developer
     * @param DtoInterface $dto
     */
    public function __construct(
        private Developer $developer,
        private ?DtoInterface $dto
    )
    {}

    public function store()
    {
        try{
            $this->developer->save();
            return TRUE;
        }catch(PDOException $ex){
            echo throw new PDOException($ex->getMessage(), $ex->getCode());
            return FALSE;
        }
    }
    
    public function update($datas, $id)
    {
        try{
            $developer = $this->developer::find($id);
            $developer->update($datas);
            return TRUE;
        }catch(PDOException $ex){
            echo throw new PDOException($ex->getMessage(), $ex->getCode());
            return FALSE;
        }
    }

    public function delete(int $id)
    {
        try{
            $developer = Developer::find($id);
            $this->developer->delete();
            return TRUE;
        }catch(PDOException $ex){
            echo throw new PDOException($ex->getMessage(), $ex->getCode());
            return TRUE;
        }
    }

}