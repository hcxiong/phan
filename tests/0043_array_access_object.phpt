--TEST--
Array access object
--FILE--
<?php
class A { }
$a = new A;
if($a[1]) { }

class B implements ArrayAccess {
	function offsetExists($offset) { }
    function offsetGet($offset) { }
    function offsetSet($offset,$value) { }
    function offsetUnset($offset) { }
}

$b = new B;
if($b[1]) { }
--EXPECTF--
%s:4 TypeError Suspicious array access to A
