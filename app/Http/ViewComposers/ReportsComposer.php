<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Report;

class ReportsComposer
{
	public function compose(View $view)
	{
		$view->with('reports', Report::all());
	}
}