<?php

include_once(dirname(__FILE__) . '/../lib/Route.php');
include_once(dirname(__FILE__) . '/../lib/Router.php');

/*----------------------------------------------------------------------------*/

class RouterTest extends PHPUnit_Framework_TestCase
{
    /**
     * Adding a route by name should behave as expected 
     */
    public function testAddRoute()
    {
        $route = $this->getMock('Route');
        
        $router = new Router;
        $routesBeforeAdd = $router->getRoutes();
        $router->addRoute( 'myroute', $route );
        $routes = $router->getRoutes();
        
        $this->assertFalse(array_key_exists('myroute', $routesBeforeAdd));
        $this->assertTrue( array_key_exists('myroute', $routes));
    }
    
    /**
     * The correct url should be returned when using a named route 
     */
    public function testGetUrl()
    {
        $route = $this->getMock('Route');
        $route->expects($this->atLeastOnce())
              ->method('getDynamicElements')
              ->will($this->returnValue(array(
                  ':class'    => ':class',
                  ':method'   => ':method',
                  ':id'       => ':id'
              )));
        $route->expects($this->atLeastOnce())
              ->method('getPath')
              ->will($this->returnValue('/:class/:method/:id'));

        $router = new Router;
        $router->addRoute( 'myroute', $route );

        $url = $router->getUrl( 'myroute', array(
            ':class'    => 'myclass',
            ':method'   => 'mymethod',
            ':id'        => '1'
        ));
        
        $this->assertSame('/myclass/mymethod/1', $url);
        $this->assertNotSame('/myclass/mymethod/2', $url);
    }

    /**
     * @expectedException NamedPathNotFoundException
     */
    public function testGetUrlNamedRouteDoesNotExist()
    {
        $route = $this->getMock('Route');

        $router = new Router;
        $router->addRoute( 'myroute', $route );
        
        $router->getUrl( 'not_there', array(
            ':class'    => 'myclass',
            ':method'   => 'mymethod',
            ':id'       => 1
        ));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetUrlWrongArgumentForNamedRoute()
    {
        $route = $this->getMock('Route');
        $route->expects($this->atLeastOnce())
              ->method('getDynamicElements')
              ->will($this->returnValue(array(
                  ':class'    => ':class',
                  ':method'   => ':method',
                  ':id'       => ':id'
              )));
        
        $router = new Router;
        $router->addRoute( 'myroute', $route );

        $router->getUrl( 'myroute', array(
            ':class'    => 'myclass',
            ':method'   => 'mymethod',
            ':wrong'    => 1
        ));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetUrlWrongNumberOfArgumentsForNamedRoutes()
    {
        $route = $this->getMock('Route');
        $route->expects($this->atLeastOnce())
              ->method('getDynamicElements')
              ->will($this->returnValue(array(
                  ':class'    => ':class',
                  ':method'   => ':method',
                  ':id'       => ':id'
              )));

        $router = new Router;
        $router->addRoute( 'myroute', $route );

        $router->getUrl( 'myroute', array(
            ':class'    => 'myclass',
            ':method'   => 'mymethod'
        ));
    }

    /**
     * Find a route
     */
    public function testFindRoute()
    {
        $path = '/find/this/class';
        
        $route = $this->getMock('Route');
        $route->expects($this->atLeastOnce())
              ->method('matchMap')
              ->with($this->equalTo($path))
              ->will($this->returnValue(true));

        $router = new Router;
        $router->addRoute( 'myroute', $route );

        $found_route = $router->findRoute( $path );

        $this->assertSame($route, $found_route);
        
    }

    /**
     * When no matching routes exist, throw exception
     * 
     * @expectedException RouteNotFoundException
     */
    public function testFailToFindRoute()
    {
        $find_path = '/fail/to/find/this/route';
        
        $route = $this->getMock('Route');
        $route->expects($this->atLeastOnce())
              ->method('matchMap')
              ->with($this->equalTo($find_path))
              ->will($this->returnValue(false));
        
        $router = new Router;
        $router->addRoute( 'myroute', $route );

        $router->findRoute($find_path);
    }

    /**
     * When more than one route exists, find the right one.
     */
    public function testFindRouteInManyRoutes()
    {
        $find_path = '/parts/show/100';
        
        $id_route = $this->getMock('Route');
        $id_route->expects($this->atLeastOnce())
                 ->method('matchMap')
                 ->with($this->equalTo($find_path))
                 ->will($this->returnValue(true));

        $def_route = $this->getMock('Route');
        $def_route->expects($this->any())
                  ->method('matchMap')
                  ->will($this->returnValue(false));
        
        $router = new Router;
        $router->addRoute( 'id', $id_route );
        $router->addRoute( 'default', $def_route );
        
        $found_route = $router->findRoute( $find_path );
        
        $this->assertSame($id_route, $found_route);
    }
    
    /**
     * addRoute should return itself
     */
    public function testMethodsAreChainable()
    {
        $route = $this->getMock('Route');
        $router = new Router;

        $this->assertSame($router, $router->addRoute('test', $route));
    }
    
    /**
     * Query parameters should not be considered when matching routes. 
     */
    public function testQueryParameters()
    {
        $router = new Router;
        
        $route = $this->getMock('Route');
        $route->expects($this->atLeastOnce())
               ->method('matchMap')
               ->with($this->equalTo('/2008-08-01/Accounts/1/IncomingPhoneNumbers?a=1&b=2'))
               ->will($this->returnValue(true));
        
        $router->addRoute('test', $route);
        $found = $router->findRoute( '/2008-08-01/Accounts/1/IncomingPhoneNumbers?a=1&b=2' );
        
        $this->assertSame($found, $route);
    }
    
    /**
     * When two matching routes exist, the first one added should be matched. 
     */
    public function testFindRoutesInTheOrderTheyAreAdded()
    {
        $router = new Router;
        
        $route1 = $this->getMock('Route');
        $route2 = $this->getMock('Route');

        $route1->expects($this->atLeastOnce())
               ->method('matchMap')
               ->with($this->equalTo('/foo/bar'))
               ->will($this->returnValue(true));
        
        $route2->expects($this->any())
               ->method('matchMap')
               ->will($this->returnValue(true));
        
        $router->addRoute('route1', $route1);
        $router->addRoute('route2', $route2);
        
        $matchedRoute = $router->findRoute('/foo/bar');
        $this->assertSame($route1, $matchedRoute);
    }
    
    /**
     * When similar dynamic elements exists (e.g. :some, :something) they should be treated independently by getUrl().
     */
    public function testGetUrlWhenDynamicPartsAreReversed()
    {
        $route = $this->getMock('Route');
        $route->expects($this->atLeastOnce())
              ->method('getDynamicElements')
              ->will($this->returnValue(array(
                  ':something' => ':something',
                  ':some'      => ':some'
              )));
        $route->expects($this->atLeastOnce())
              ->method('getPath')
              ->will($this->returnValue('/:something/:some'));

        $router = new Router();
        $router->addRoute('the_route', $route);
        $url = $router->getUrl('the_route', array(
            ':something' => 'foo',
            ':some' => 'bar'
        ));

        $this->assertEquals($url, '/foo/bar');

        $url = $router->getUrl('the_route', array(
            ':some' => 'bar',
            ':something' => 'foo'
        ));

        $this->assertEquals($url, '/foo/bar');
    }
    
}

?>
