<?php
namespace Hamcrest\Type;

class IsCallableTest extends \Hamcrest\AbstractMatcherTest
{

    public static function callableFunction()
    {
    }

    public function __invoke()
    {
    }

    protected function createMatcher()
    {
        return \Hamcrest\Type\IsCallable::callableValue();
    }

    public function testEvaluatesToTrueIfArgumentIsFunctionName()
    {
        assertThat('preg_match', callableValue());
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16back()
    {
        assertThat(
            array('Hamcrest\Type\IsCallableTest', 'callableFunction'),
            callableValue()
        );
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16llback()
    {
        assertThat(
            array($this, 'testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16llback'),
            callableValue()
        );
    }

    public function testEvaluatesToTrueIfArgumentIsClosure()
    {
        if (!version_compare(PHP_VERSION, '5.3', '>=')) {
            $this->markTestSkipped('Closures require php 5.3');
        }
        eval('assertThat(function () {}, callableValue());');
    }

    public function testEvaluatesToTrueIfArgumentImplementsInvoke()
    {
        if (!version_compare(PHP_VERSION, '5.3', '>=')) {
            $this->markTestSkipped('Magic method __invoke() requires php 5.3');
        }
        assertThat($this, callableValue());
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16Name()
    {
        if (function_exists('not_a_Hamcrest_function')) {
            $this->markTestSkipped('Function "not_a_Hamcrest_function" must not exist');
        }

        assertThat('not_a_Hamcrest_function', not(callableValue()));
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16thodCallback()
    {
        assertThat(
            array('Hamcrest\Type\IsCallableTest', 'noMethod'),
            not(callableValue())
        );
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16MethodCallback()
    {
        assertThat(array($this, 'noMethod'), not(callableValue()));
    }

    public function testEvaluatesTVFgsePm5EuWcL1aYP97CDoy9CXLHKEh16voke()
    {
        assertThat(new \stdClass(), not(callableValue()));
    }

    public function testEvaluatesToFalseIfArgumentDoesntMatchType()
    {
        assertThat(false, not(callableValue()));
        assertThat(5.2, not(callableValue()));
    }

    public function testHasAReadableDescription()
    {
        $this->assertDescription('a callable', callableValue());
    }

    public function testDecribesActualTypeInMismatchMessage()
    {
        $this->assertMismatchDescription(
            'was a string "invalid-function"',
            callableValue(),
            'invalid-function'
        );
    }
}
