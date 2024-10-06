<?php

namespace Modules\BaseModule\App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BaseProviderUtils extends ServiceProvider
{
	private function getPublishableViewPaths(string $moduleNameLower): array
	{
		$paths = [];
		foreach (config('view.paths') as $path) {
			if (is_dir($path.'/modules/'.$moduleNameLower)) {
				$paths[] = $path.'/modules/'.$moduleNameLower;
			}
		}

		return $paths;
	}
}
