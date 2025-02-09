<?php
namespace Hamcrest\Core;

class AllOfTest extends \Hamcrest\AbstractMatcherTest
{

    protected function createMatcher()
    {
        return \Hamcrest\Core\AllOf::allOf('irrelevant');
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16atchers()
    {
        assertThat('good', allOf('good', 'good'));

        assertThat('good', not(allOf('bad', 'good')));
        assertThat('good', not(allOf('good', 'bad')));
        assertThat('good', not(allOf('bad', 'bad')));
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16Matchers()
    {
        assertThat('good', allOf('good', 'good', 'good', 'good', 'good'));
        assertThat('good', not(allOf('good', endsWith('d'), 'bad', 'good', 'good')));
    }

    public function testSupportsMixedTypes()
    {
        $all = allOf(
            equalTo(new \Hamcrest\Core\SampleBaseClass('good')),
            equalTo(new \Hamcrest\Core\SampleBaseClass('good')),
            equalTo(new \Hamcrest\Core\SampleSubClass('ugly'))
        );

        $negated = not($all);

        assertThat(new \Hamcrest\Core\SampleSubClass('good'), $negated);
    }

    public function testHasAReadableDescription()
    {
        $this->assertDescription(
            '("good" and "bad" and "ugly")',
            allOf('good', 'bad', 'ugly')
        );
    }

    public function testMismatchDescriptionDescribesFirstFailingMatch()
    {
        $this->assertMismatchDescription(
            '"good" was "bad"',
            allOf('bad', 'good'),
            'bad'
        );
    }
}
