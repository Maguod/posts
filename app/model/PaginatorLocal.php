<?php
namespace App\model;
use JasonGrimes\Paginator;
use App\model\Database;
use Aura\SqlQuery\QueryFactory;

class PaginatorLocal
{
  private $paginator;
  private $database;
  private $queryFactory;
  
  public function __construct(Paginator $paginator, Database $database, QueryFactory $queryFactory)
  {
    $this->paginator = $paginator;
    $this->database = $database;
    $this->queryFactory = $queryFactory;
  }
  
  public function paginatePage()
  {
    var_dump($this->database);
    $totalItems = count($this->database->getAll('posts'));
  }
}
