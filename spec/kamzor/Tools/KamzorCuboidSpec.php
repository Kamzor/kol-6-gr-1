<?php

namespace spec\kamzor\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KamzorCuboidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamzor\Tools\KamzorCuboid');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);
        $this->setB(2)->getB()->shouldReturn(2);
        $this->setH(4)->getH()->shouldReturn(4);
    }
    
    function it_should_calculate_objetosc()
    {
        $this->setA(2)->setB(2)->setH(4)->objetosc()->shouldReturn(16);
    }
}
