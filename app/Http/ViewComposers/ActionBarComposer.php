<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Page;

class ActionBarComposer
{
	public function compose(View $view)
	{
		$action_bar_links = Page::where('page_link_level', 3)->where('is_active', 1)->get();
		$view->with('action_bar_links', $action_bar_links);
	}
}