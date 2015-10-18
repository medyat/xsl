<?php
namespace Genkgo\Xsl\Integration\Xpath;

class AggregationTest extends AbstractXpathTest
{
    public function testSum()
    {
        $this->assertEquals(1995 + 1997, $this->transformFile('Stubs/Xpath/Aggregation/sum.xsl'));
    }

    public function testAvg()
    {
        $this->assertEquals(1996, $this->transformFile('Stubs/Xpath/Aggregation/avg.xsl'));
    }

    public function testMax()
    {
        $this->assertEquals(1997, $this->transformFile('Stubs/Xpath/Aggregation/max.xsl'));
    }

    public function testMin()
    {
        $this->assertEquals(1995, $this->transformFile('Stubs/Xpath/Aggregation/min.xsl'));
    }

    public function testSequenceSum()
    {
        $this->assertEquals(1995 + 1997, $this->transformFile('Stubs/Xpath/Aggregation/sequence-sum.xsl'));
    }

    public function testSequenceAvg()
    {
        $this->assertEquals(1996, $this->transformFile('Stubs/Xpath/Aggregation/sequence-avg.xsl'));
    }

}
