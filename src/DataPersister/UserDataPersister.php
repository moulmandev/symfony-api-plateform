<?php 

namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use App\Entity\BlogPost;

final class UserDataPersister implements ContextAwareDataPersisterInterface
{
    public function supports($data, array $context = []): bool
    {
        return $data instanceof BlogPost;
    }

    public function persist($data, array $context = [])
    {
        
		
		
        return $data;
    }

    public function remove($data, array $context = [])
    {
        // call your persistence layer to delete $data
    }
}