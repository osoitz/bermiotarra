<?php

function getFiles($dirs, $allow = NULL)
{
/*
    $allow = array
    (
        '/\.md/i'
    );
*/
	$files = array();
	foreach($dirs as $dir)
	{
		$f = scandir($dir);

		foreach($f as $g)
		{
			if($allow!==NULL)
			{
				foreach($allow as $a)
				{
					if(preg_match($a, $g))
					{
                        //if(in_array("{$dir}/{$g}", $files))
                            $files[] = "{$dir}/{$g}";
					}
				}
			}
		}
	}
	return $files;
}
