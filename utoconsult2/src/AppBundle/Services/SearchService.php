<?php
namespace AppBundle\Services;

use Symfony\Component\DependencyInjection\Container;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Elastica\Result;
use Elastica\Query;
use FOS\ElasticaBundle\Elastica\Client;

class SearchService {
    /**
     * @var Container
     */
    public $container;
    
     /**
     * @var Registry
     */
    protected $doctrine;

    /*
     * @var em
     */
    protected $em;
    
    protected $indexManager;

    protected $transformer;
    
    protected $resultSet;
    
    protected $searchHost;
    
    protected $searchPort;

    public function __construct(Container $container, Registry $doctrine, $indexManager, $searchHost, $searchPort)
    {
        $this->container = $container;
        $this->doctrine = $doctrine;
        $this->em = $this->doctrine->getManager();
        $this->indexManager = $indexManager;
        $this->client = new Client();
        $this->searchHost = $searchHost;
        $this->searchPort = $searchPort;
    }
    
    public function searchArticleManager($only_total, $offset, $limit, $word)
    {
        try{
            if(!$this->getSearchEngineConnection()){
                return array('data' => null, 'code' => 500,'message' => 'no connection');
            }
            $searchResult = $this->searchArticleByIndex($only_total, $offset, $limit, $word);
            
            return array('data' => $searchResult, 'code' => 200);
        } catch (Exception $e) {
            return array('data' => null, 'code' => 500,'message' => $e->getMessage());
        }
    }        
    
    public function searchArticleByIndex($only_total, $offset, $limit, $word)
    {
        $search = $this->container->get($this->indexManager)->getIndex('app')->createSearch();
        $search->addType('article');
        
        $boolQuery = new \Elastica\Query\BoolQuery();

        $deleteQuery = new \Elastica\Query\Terms();
        $deleteQuery->setTerms('isdeleted', array(0, 'false', false));
        $boolQuery->addMust($deleteQuery);

        if(strlen($word) > 0){
            $wordQuery = new \Elastica\Query\QueryString();
            $wordQuery->setQuery($word); 
            $boolQuery->addMust($wordQuery);
        }
        
        if($only_total){
            return $search->search($boolQuery)->getTotalHits(); 
        }
        
        $queryObject = Query::create($boolQuery);
        $queryObject->setSize($limit);
        $queryObject->setFrom($offset);
        
        if(strlen($word) === 0){
            $queryObject->addSort(array('updatedAt' => array('order' => 'desc')));
        }
        
        $this->resultSet = $search->search($queryObject)->getResults();
        
        return $this->getSourceArray();
    }      
    
    public function getSourceArray()
    {
        return array_map(function (Result $result) {
            return $result->getSource();
        }, $this->resultSet);
    }
    
    public function getSearchEngineConnection()
    {
        try{
            $url = "curl --silent http://".$this->searchHost.":".$this->searchPort;
            $info = exec($url);

            if(strlen(json_encode($info)) > 2){
                return true;
            } 
            return false;
        } catch(\Exception $e) {
            return false;
        }
    }
}
