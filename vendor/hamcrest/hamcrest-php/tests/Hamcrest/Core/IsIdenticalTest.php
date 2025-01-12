<?php
namespace Hamcrest\Core;

class IsIdenticalTest extends \Hamcrest\AbstractMatcherTest
{

    protected function createMatcher()
    {
        return \Hamcrest\Core\IsIdentical::identicalTo('irrelevant');
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16ifiedObject()
    {
        $o1 = new \stdClass();
        $o2 = new \stdClass();

        assertThat($o1, identicalTo($o1));
        assertThat($o2, not(identicalTo($o1)));
    }

    public function testReturnsReadableDescriptionFromToString()
    {
        $this->assertDescription('"ARG"', identicalTo('ARG'));
    }

    public function testReturnsReadableDescriptionFromToStringWhenInitialisedWithNull()
    {
        $this->assertDescription('null', identicalTo(null));
    }
}
