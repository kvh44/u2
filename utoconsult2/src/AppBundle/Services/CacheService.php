<?php
namespace AppBundle\Services;

use Symfony\Component\DependencyInjection\Container;

class CacheService
{
    /**
     * @var Container
     */
    public $container;
    
    protected $redisCategories;
    
    protected $categories;


    public function __construct(Container $container, $categories)
    {
        $this->container = $container;
        $this->redisCategories = $this->container->get('snc_redis.categories');
        $this->categories = $categories;
    }
    
    public function checkRedisRunning($redis)
    {
        try{
            $redis->ping();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }    
    
    public function getCategoriesCache()
    {
        try{
            return $this->redisCategories->hGet($this->categories,'categories');
        } catch(\Exception $e) {
            return false;
        }
    }  
    
    public function setCategoriesCache($categories)
    {
        try{
            return $this->redisCategories->hSet($this->categories, 'categories', $categories);
        } catch(\Exception $e) {
            return false;
        }
    }
    
    public function removeCategoriesCache()
    {
        try{
            return $this->redisCategories->hDel($this->categories,'categories');
        } catch(\Exception $e) {
            return false;
        }
    } 
    
    
}