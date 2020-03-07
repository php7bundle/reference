<?php

namespace PhpBundle\Reference\Domain\Repositories\Eloquent;

use PhpLab\Eloquent\Db\Base\BaseEloquentCrudRepository;
use PhpBundle\Reference\Domain\Interfaces\Repositories\BookRepositoryInterface;

class BookRepository extends BaseEloquentCrudRepository implements BookRepositoryInterface
{

    protected $tableName = 'reference_book';

    protected $entityClass = 'PhpLab\\Sandbox\\Reference\\Entities\\BookEntity';


}

