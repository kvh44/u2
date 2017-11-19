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
    
    protected $redisHomeArticles;
    
    protected $redisArticlesForCategory;

    protected $categories;
    
    protected $homeArticles;
    
    protected $articlesForCategory;


    public function __construct(Container $container, $categories, $homeArticles, $articlesForCategory)
    {
        $this->container = $container;
        $this->redisCategories = $this->container->get('snc_redis.categories');
        $this->redisHomeArticles = $this->container->get('snc_redis.homeArticles');
        $this->redisArticlesForCategory = $this->container->get('snc_redis.articlesForCategory');
        $this->categories = $categories;
        $this->homeArticles = $homeArticles;
        $this->articlesForCategory = $articlesForCategory;
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
    
    public function getHomeArticlesCache()
    {
        try{
            return $this->redisHomeArticles->hGet($this->homeArticles,'homeArticles');
        } catch(\Exception $e) {
            return false;
        }
    }  
    
    public function sethomeArticlesCache($homeArticles)
    {
        try{
            return $this->redisHomeArticles->hSet($this->homeArticles, 'homeArticles', $homeArticles);
        } catch(\Exception $e) {
            return false;
        }
    }
    
    public function removeHomeArticlesCache()
    {
        try{
            return $this->redisHomeArticles->hDel($this->homeArticles,'homeArticles');
        } catch(\Exception $e) {
            return false;
        }
    }
    
    public function getArticlesForCategoryCache($key)
    {
        try{
            return $this->redisArticlesForCategory->hGet($this->articlesForCategory, $key);
        } catch(\Exception $e) {
            return false;
        }
    }  
    
    public function setArticlesForCategoryCache($key, $articlesForCategory)
    {
        try{
            return $this->redisArticlesForCategory->hSet($this->articlesForCategory, $key, $articlesForCategory);
        } catch(\Exception $e) {
            return false;
        }
    }
    
    public function removeArticlesForCategoryCache($key)
    {
        try{
            return $this->redisArticlesForCategory->hDel($this->articlesForCategory, $key);
        } catch(\Exception $e) {
            return false;
        }
    }
    
    
}