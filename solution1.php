<?php

function eq($exp) {
	eval('$result = ('.$exp.');');
	return $result;
}
