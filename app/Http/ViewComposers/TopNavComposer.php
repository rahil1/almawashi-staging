<?php 

namespace App\Http\ViewComposers;



use Illuminate\Contracts\View\View;
use App\Models\Page;
use App\Models\StockValue;

class TopNavComposer
{
	public function compose(View $view)
	{
		$stockValue = StockValue::find(1)->value('current_stock_val');
		// dd($stockValue);
		$preStockValue = StockValue::find(1)->value('prev_stock_val');
		$stockValueDiff = $stockValue - $preStockValue;

			$view->with([
				'navObjs' => Page::all(),
				'stockValue' => $stockValue,
				'stockValueDiff' => $stockValueDiff,
				'preStockValue' => $preStockValue,
			]);
	}
}