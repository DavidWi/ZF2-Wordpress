<?php
/**
 *
 */

namespace Wordpress\Router\Http;

use Zend\Mvc\Router\Http\TreeRouteStack as ZendTreeRouteStack;
use Zend\Stdlib\RequestInterface as Request;
use Zend\Mvc\Router\Http\RouteMatch;

/**
 * Tree search implementation.
 */
class TreeRouteStack extends ZendTreeRouteStack
{
    /**
     *
     * @var RouteMatch
     */
    protected $fallbackRouteMatch;
    
    /**
     * 
     * @param Request $request
     * @param type $pathOffset
     * @param array $options
     * @return \Zend\Mvc\Router\Http\RouteMatch
     */
    public function match(Request $request, $pathOffset = null, array $options = array())
    {
        // Return RouteMatch if found
        $parentMatch = parent::match($request, $pathOffset, $options);
        if ($parentMatch) {
            return $parentMatch;
        }
        
        if ($this->fallbackRouteMatch) {
            return $this->fallbackRouteMatch;
        }
        return;
    }
    
    /**
     * 
     * @param array $options
     * @return self
     * @throws Exception\InvalidArgumentException
     */
    public static function factory($options = array())
    {
        if ($options instanceof Traversable) {
            $options = ArrayUtils::iteratorToArray($options);
        } elseif (!is_array($options)) {
            throw new Exception\InvalidArgumentException(__METHOD__ . ' expects an array or Traversable set of options');
        }

        $instance = parent::factory($options);

        if (isset($options['defaultRoute'])) {
            $match = new RouteMatch($options['defaultRoute']['params']);
            $match->setMatchedRouteName($options['defaultRoute']['name']);
            $instance->setFallbackRouteMatch($match);
        }

        return $instance;
    }
    
    /**
     * 
     * @param RouteMatch $fallbackRouteMatch
     * @return \Wordpress\Router\Http\TreeRouteStack
     */
    public function setFallbackRouteMatch(RouteMatch $fallbackRouteMatch) {
        $this->fallbackRouteMatch = $fallbackRouteMatch;
        return $this;
    }

}
