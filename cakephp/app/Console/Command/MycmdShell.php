<?php

/**
 * Created by IntelliJ IDEA.
 * User: morita
 * Date: 2018/06/28
 * Time: 14:38
 */
class MycmdShell extends Shell
{
	function main()
	{
		$test_arr = array(1, 2);

		print($test_arr[3]);

		$this->out('HELLO WOOOOOOOOOOOLD'); // 標準出力には $this->out() を利用。
	}

	function main2()
	{
		$this->err('[ERROR] this is what?');
	}
}
