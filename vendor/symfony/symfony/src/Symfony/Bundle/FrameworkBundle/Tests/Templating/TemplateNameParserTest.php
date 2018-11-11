<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Templating;

use Symfony\Bridge\PhpUnit\ErrorAssert;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference;
use Symfony\Component\Templating\TemplateReference as BaseTemplateReference;

class TemplateNameParserTest extends TestCase
{
    protected $parser;

    protected function setUp()
    {
        $kernel = $this->getMock('Symfony\Component\HttpKernel\KernelInterface');
        $kernel
            ->expects($this->any())
            ->method('getBundle')
            ->will($this->returnCallback(function ($bundle) {
                if (in_array($bundle, array('SensioFooBundle', 'SensioCmsFooBundle', 'FooBundle'))) {
                    return true;
                }

                throw new \InvalidArgumentException();
            }))
        ;
        $this->parser = new TemplateNameParser($kernel);
    }

    protected function tearDown()
    {
        $this->parser = null;
    }

    /**
     * @dataProvider parseProvider
     */
    public function testParse($name, $logicalName, $path, $ref)
    {
        $template = $this->parser->parse($name);

        $this->assertSame($ref->getLogicalName(), $template->getLogicalName());
        $this->assertSame($logicalName, $template->getLogicalName());
        $this->assertSame($path, $template->getPath());
    }

    public function parseProvider()
    {
        return array(
            array('FooBundle:Post:home.html.twig.php', 'FooBundle:Post:home.html.twig.php', '@FooBundle/Resources/views/Post/home.html.twig.php', new TemplateReference('FooBundle', 'Post', 'index', 'html', 'php')),
            array('FooBundle:Post:home.html.twig.twig', 'FooBundle:Post:home.html.twig.twig', '@FooBundle/Resources/views/Post/home.html.twig.twig', new TemplateReference('FooBundle', 'Post', 'index', 'html', 'twig')),
            array('FooBundle:Post:index.xml.php', 'FooBundle:Post:index.xml.php', '@FooBundle/Resources/views/Post/index.xml.php', new TemplateReference('FooBundle', 'Post', 'index', 'xml', 'php')),
            array('SensioFooBundle:Post:home.html.twig.php', 'SensioFooBundle:Post:home.html.twig.php', '@SensioFooBundle/Resources/views/Post/home.html.twig.php', new TemplateReference('SensioFooBundle', 'Post', 'index', 'html', 'php')),
            array('SensioCmsFooBundle:Post:home.html.twig.php', 'SensioCmsFooBundle:Post:home.html.twig.php', '@SensioCmsFooBundle/Resources/views/Post/home.html.twig.php', new TemplateReference('SensioCmsFooBundle', 'Post', 'index', 'html', 'php')),
            array(':Post:home.html.twig.php', ':Post:home.html.twig.php', 'views/Post/home.html.twig.php', new TemplateReference('', 'Post', 'index', 'html', 'php')),
            array('::home.html.twig.php', '::home.html.twig.php', 'views/home.html.twig.php', new TemplateReference('', '', 'index', 'html', 'php')),
            array('home.html.twig.php', '::home.html.twig.php', 'views/home.html.twig.php', new TemplateReference('', '', 'index', 'html', 'php')),
            array('FooBundle:Post:foo.bar.home.html.twig.php', 'FooBundle:Post:foo.bar.home.html.twig.php', '@FooBundle/Resources/views/Post/foo.bar.home.html.twig.php', new TemplateReference('FooBundle', 'Post', 'foo.bar.index', 'html', 'php')),
            array('@FooBundle/Resources/views/layout.html.twig', '@FooBundle/Resources/views/layout.html.twig', '@FooBundle/Resources/views/layout.html.twig', new BaseTemplateReference('@FooBundle/Resources/views/layout.html.twig', 'twig')),
            array('@FooBundle/Foo/layout.html.twig', '@FooBundle/Foo/layout.html.twig', '@FooBundle/Foo/layout.html.twig', new BaseTemplateReference('@FooBundle/Foo/layout.html.twig', 'twig')),
            array('name.twig', 'name.twig', 'name.twig', new BaseTemplateReference('name.twig', 'twig')),
            array('name', 'name', 'name', new BaseTemplateReference('name')),
            array('default/home.html.twig.php', '::default/home.html.twig.php', 'views/default/home.html.twig.php', new TemplateReference(null, null, 'default/index', 'html', 'php')),
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testParseValidNameWithNotFoundBundle()
    {
        $this->parser->parse('BarBundle:Post:home.html.twig.php');
    }

    /**
     * @group legacy
     * @dataProvider provideAbsolutePaths
     * @requires function Symfony\Bridge\PhpUnit\ErrorAssert::assertDeprecationsAreTriggered
     */
    public function testAbsolutePathsAreDeprecated($name, $logicalName, $path, $ref)
    {
        ErrorAssert::assertDeprecationsAreTriggered('Absolute template path support is deprecated since Symfony 3.1 and will be removed in 4.0.', function () use ($name, $logicalName, $path, $ref) {
            $template = $this->parser->parse($name);

            $this->assertSame($ref->getLogicalName(), $template->getLogicalName());
            $this->assertSame($logicalName, $template->getLogicalName());
            $this->assertSame($path, $template->getPath());
        });
    }

    public function provideAbsolutePaths()
    {
        return array(
            array('/path/to/section/home.html.twig.php', '/path/to/section/home.html.twig.php', '/path/to/section/home.html.twig.php', new BaseTemplateReference('/path/to/section/home.html.twig.php', 'php')),
            array('C:\\path\\to\\section\\name.html.php', 'C:path/to/section/name.html.php', 'C:path/to/section/name.html.php', new BaseTemplateReference('C:path/to/section/name.html.php', 'php')),
            array('C:\\path\\to\\section\\name:foo.html.php', 'C:path/to/section/name:foo.html.php', 'C:path/to/section/name:foo.html.php', new BaseTemplateReference('C:path/to/section/name:foo.html.php', 'php')),
            array('\\path\\to\\section\\name.html.php', '/path/to/section/name.html.php', '/path/to/section/name.html.php', new BaseTemplateReference('/path/to/section/name.html.php', 'php')),
            array('/path/to/section/name.php', '/path/to/section/name.php', '/path/to/section/name.php', new BaseTemplateReference('/path/to/section/name.php', 'php')),
        );
    }
}
