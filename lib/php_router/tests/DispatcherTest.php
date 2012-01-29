<?php

include_once(dirname(__FILE__) . '/../lib/Dispatcher.php');
include_once(dirname(__FILE__) . '/../lib/Route.php');


/*----------------------------------------------------------------------------*/

class DispatcherTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        @unlink('fooClass.php');
        @unlink('noclassnameClass.php');
    }

    public function helperCreateTestClassFile()
    {
        $contents = "<?php\n"
                  . "class fooClass {\n"
                  . "    public function bar( \$args ) {\n"
                  . "        return 'bar';\n"
                  . "    }\n"
                  . "}\n"
                  . "?>\n"
                  ;

        $fh = fopen('fooClass.php', 'w');
        fwrite($fh, $contents);
        fclose($fh);
    }
    
    /**
     * @expectedException classFileNotFoundException
     */
    public function testCatchClassFileNotFound()
    {
        $path = '/no_class/bar/55';
        
        $route = $this->getMock('Route');
        $route->expects($this->any())
              ->method('matchMap')
              ->will($this->returnValue(true));
        $route->expects($this->any())
              ->method('getMapClass')
              ->will($this->returnValue('noclassnameClass'));
        $route->expects($this->any())
              ->method('getMapMethod')
              ->will($this->returnValue('method'));

        $route->matchMap($path);

        $dispatcher = new Dispatcher;
        $dispatcher->dispatch( $route );
    }
    
    /**
     * @expectedException classNameNotFoundException
     */
    public function testCatchClassNameNotFound()
    {
        $contents = "<?php\n"
                  . "class noclassnamefoundClass {\n"
                  . "    public function bar( \$args ) {\n"
                  . "        //print_r(\$args);\n"
                  . "    }\n"
                  . "}\n"
                  . "?>\n"
                  ;

        $fh = fopen('noclassnameClass.php', 'w');
        fwrite($fh, $contents);
        fclose($fh);
        
        $route = $this->getMock('Route');
        $route->expects($this->any())
              ->method('matchMap')
              ->will($this->returnValue(true));
        $route->expects($this->any())
              ->method('getMapClass')
              ->will($this->returnValue('noclassnameClass'));
        $route->expects($this->any())
              ->method('getMapMethod')
              ->will($this->returnValue('method'));

        $dispatcher = new Dispatcher;
        $dispatcher->dispatch( $route );
    }
    
    /**
     * @expectedException classNotSpecifiedException
     */
    public function testCatchClassNotSpecified()
    {
        $route = $this->getMock('Route');
        $route->expects($this->any())
              ->method('matchMap')
              ->will($this->returnValue(true));
        $route->expects($this->any())
              ->method('getMapClass')
              ->will($this->returnValue(''));
        $route->expects($this->any())
              ->method('getMapMethod')
              ->will($this->returnValue('method'));

        $dispatcher = new Dispatcher;
        $dispatcher->dispatch( $route );
    }
    
    /**
     * @expectedException badClassNameException
     */
    public function testCatchBadClassName()
    {
        $route = $this->getMock('Route');
        $route->expects($this->any())
              ->method('matchMap')
              ->will($this->returnValue(true));
        $route->expects($this->any())
              ->method('getMapClass')
              ->will($this->returnValue('foo\"'));
        $route->expects($this->any())
              ->method('getMapMethod')
              ->will($this->returnValue('method'));

        $dispatcher = new Dispatcher;
        $dispatcher->dispatch( $route );
    }
    
    /**
     * @expectedException methodNotSpecifiedException
     */
    public function testCatchMethodNotSpecified()
    {
        $this->helperCreateTestClassFile();
        
        $route = $this->getMock('Route');
        $route->expects($this->any())
              ->method('matchMap')
              ->will($this->returnValue(true));
        $route->expects($this->any())
              ->method('getMapClass')
              ->will($this->returnValue('foo'));
        $route->expects($this->any())
              ->method('getMapMethod')
              ->will($this->returnValue(''));

        $dispatcher = new Dispatcher;
        $dispatcher->dispatch( $route );
    }
    
    /**
     * @expectedException classMethodNotFoundException
     */
    public function testCatchClassMethodNotFound()
    {
        $this->helperCreateTestClassFile();
        
        $route = $this->getMock('Route');
        $route->expects($this->any())
              ->method('matchMap')
              ->will($this->returnValue(true));
        $route->expects($this->any())
              ->method('getMapClass')
              ->will($this->returnValue('foo'));
        $route->expects($this->any())
              ->method('getMapMethod')
              ->will($this->returnValue('nomethod'));

        $dispatcher = new Dispatcher;
        $dispatcher->setSuffix('Class');
        $dispatcher->dispatch( $route );
    }

    public function testSuccessfulDispatch()
    {
        $this->helperCreateTestClassFile();
        
        $route = $this->getMock('Route');
        $route->expects($this->any())
              ->method('matchMap')
              ->will($this->returnValue(true));
        $route->expects($this->any())
              ->method('getMapClass')
              ->will($this->returnValue('foo'));
        $route->expects($this->any())
              ->method('getMapMethod')
              ->will($this->returnValue('bar'));

        $dispatcher = new Dispatcher;
        $dispatcher->setSuffix('Class');
        
        $this->assertTrue($route->matchMap('/foo/bar/55'));

        $res = $dispatcher->dispatch($route);
        $this->assertEquals('bar', $res);
    }

    public function testMethodsAreChainable()
    {
      $dispatcher = new Dispatcher();

      $this->assertSame($dispatcher, $dispatcher->setSuffix(''));
      $this->assertSame($dispatcher, $dispatcher->setClassPath(''));
    }
}

