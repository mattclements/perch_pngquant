<?php
class PerchPngQuant
{
	private static $_min_quality = 60;
	private static $_max_quality = 90;

	public static function on_create($Event)
	{
		if (!file_exists($Event->subject->file_path))
		{
			PerchUtil::debug("ERROR! File Does not Exist: ".$Event->subject->file_path);
		}

		$compressed_png_content = shell_exec("pngquant --quality=".self::$_min_quality."-".self::$_max_quality." - < ".escapeshellarg($Event->subject->file_path));

		if (!$compressed_png_content)
		{
			PerchUtil::debug("ERROR! Could not Optimize Image - Is PNG Quant Installed?");
		}

		file_put_contents($Event->subject->file_path, $compressed_png_content);

	}
}
