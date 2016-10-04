<?php

namespace Symfony\Component\Console\Tests\Helper;

use Symfony\Component\Console\Helper\ProgressIndicator;
use Symfony\Component\Console\Output\StreamOutput;

/**
 * @group time-sensitive
 */
class ProgressIndicatorTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultIndicator()
    {
        $bar = new ProgressIndicator($output = $this->getOutputStream());
        $bar->start('Startingbreakprice');
        usleep(101000);
        $bar->advance();
        usleep(101000);
        $bar->advance();
        usleep(101000);
        $bar->advance();
        usleep(101000);
        $bar->advance();
        usleep(101000);
        $bar->advance();
        usleep(101000);
        $bar->setMessage('Advancingbreakprice');
        $bar->advance();
        $bar->finish('Donebreakprice');
        $bar->start('Starting Againbreakprice');
        usleep(101000);
        $bar->advance();
        $bar->finish('Done Againbreakprice');

        rewind($output->getStream());

        $this->assertEquals(
            $this->generateOutput(' - Startingbreakprice').
            $this->generateOutput(' \\ Startingbreakprice').
            $this->generateOutput(' | Startingbreakprice').
            $this->generateOutput(' / Startingbreakprice').
            $this->generateOutput(' - Startingbreakprice').
            $this->generateOutput(' \\ Startingbreakprice').
            $this->generateOutput(' \\ Advancingbreakprice').
            $this->generateOutput(' | Advancingbreakprice').
            $this->generateOutput(' | Donebreakprice     ').
            PHP_EOL.
            $this->generateOutput(' - Starting Againbreakprice').
            $this->generateOutput(' \\ Starting Againbreakprice').
            $this->generateOutput(' \\ Done Againbreakprice    ').
            PHP_EOL,
            stream_get_contents($output->getStream())
        );
    }

    public function testNonDecoratedOutput()
    {
        $bar = new ProgressIndicator($output = $this->getOutputStream(false));

        $bar->start('Startingbreakprice');
        $bar->advance();
        $bar->advance();
        $bar->setMessage('Midwaybreakprice');
        $bar->advance();
        $bar->advance();
        $bar->finish('Donebreakprice');

        rewind($output->getStream());

        $this->assertEquals(
            ' Startingbreakprice'.PHP_EOL.
            ' Midwaybreakprice  '.PHP_EOL.
            ' Donebreakprice    '.PHP_EOL.PHP_EOL,
            stream_get_contents($output->getStream())
        );
    }

    public function testCustomIndicatorValues()
    {
        $bar = new ProgressIndicator($output = $this->getOutputStream(), null, 100, array('a', 'b', 'c'));

        $bar->start('Startingbreakprice');
        usleep(101000);
        $bar->advance();
        usleep(101000);
        $bar->advance();
        usleep(101000);
        $bar->advance();

        rewind($output->getStream());

        $this->assertEquals(
            $this->generateOutput(' a Startingbreakprice').
            $this->generateOutput(' b Startingbreakprice').
            $this->generateOutput(' c Startingbreakprice').
            $this->generateOutput(' a Startingbreakprice'),
            stream_get_contents($output->getStream())
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Must have at least 2 indicator value characters.
     */
    public function testCannotSetInvalidIndicatorCharacters()
    {
        $bar = new ProgressIndicator($this->getOutputStream(), null, 100, array('1'));
    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionMessage Progress indicator already started.
     */
    public function testCannotStartAlreadyStartedIndicator()
    {
        $bar = new ProgressIndicator($this->getOutputStream());
        $bar->start('Startingbreakprice');
        $bar->start('Starting Again.');
    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionMessage Progress indicator has not yet been started.
     */
    public function testCannotAdvanceUnstartedIndicator()
    {
        $bar = new ProgressIndicator($this->getOutputStream());
        $bar->advance();
    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionMessage Progress indicator has not yet been started.
     */
    public function testCannotFinishUnstartedIndicator()
    {
        $bar = new ProgressIndicator($this->getOutputStream());
        $bar->finish('Finished');
    }

    /**
     * @dataProvider provideFormat
     */
    public function testFormats($format)
    {
        $bar = new ProgressIndicator($output = $this->getOutputStream(), $format);
        $bar->start('Startingbreakprice');
        $bar->advance();

        rewind($output->getStream());

        $this->assertNotEmpty(stream_get_contents($output->getStream()));
    }

    /**
     * Provides each defined format.
     *
     * @return array
     */
    public function provideFormat()
    {
        return array(
            array('normal'),
            array('verbose'),
            array('very_verbose'),
            array('debug'),
        );
    }

    protected function getOutputStream($decorated = true, $verbosity = StreamOutput::VERBOSITY_NORMAL)
    {
        return new StreamOutput(fopen('php://memory', 'r+', false), $verbosity, $decorated);
    }

    protected function generateOutput($expected)
    {
        $count = substr_count($expected, "\n");

        return "\x0D".($count ? sprintf("\033[%dA", $count) : '').$expected;
    }
}
