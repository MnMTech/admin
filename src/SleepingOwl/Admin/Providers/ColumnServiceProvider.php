<?php namespace SleepingOwl\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use SleepingOwl\Admin\Columns\Column;

class ColumnServiceProvider extends ServiceProvider
{

	public function register()
	{
		Column::register('string', 'SleepingOwl\Admin\Columns\Column\String');
		Column::register('count', 'SleepingOwl\Admin\Columns\Column\Count');
		Column::register('lists', 'SleepingOwl\Admin\Columns\Column\Lists');
		Column::register('filter', 'SleepingOwl\Admin\Columns\Column\Filter');
		Column::register('url', 'SleepingOwl\Admin\Columns\Column\Url');
		Column::register('custom', 'SleepingOwl\Admin\Columns\Column\Custom');
		Column::register('datetime', 'SleepingOwl\Admin\Columns\Column\DateTime');
		Column::register('control', 'SleepingOwl\Admin\Columns\Column\Control');
		Column::register('treeControl', 'SleepingOwl\Admin\Columns\Column\TreeControl');
	}

}