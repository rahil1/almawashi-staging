<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\StockValue;
// use Goutte\Client;



class stockValueUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stockValue:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command used by the app';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $options = [
            '--disable-extensions',
            '--headless',
            '--no-sandbox',
            '--remote-debugging-port=9222',
            '--disable-dev-shm-usage'

        ];

        $client = \Symfony\Component\Panther\Client::createChromeClient(null, null, $options);
        $crawler = $client->request('GET', 'http://www.boursakuwait.com.kw/stock/701/profile');
        $fullPageHtml = $crawler->html();
        $stockValue = $crawler->filter('#dvMostRecentTradePrice')->text();

        // $client = new Client();
        // $crawler = $client->request('GET', 'http://www.boursakuwait.com.kw/stock/701/profile');
        // // $stockValue = $crawler->filter('#dvMostRecentTradePrice')->text();
        // $crawler->filter('h2 > a')->each(function ($node) {
        //     print $node->text()."\n";
        // });

        $prev_stock_val = StockValue::find(1)->value('current_stock_val');
        echo "WORKING";

        StockValue::updateOrInsert(
            ['id' => 1,],
            ['current_stock_val' => $stockValue, 'prev_stock_val' => $prev_stock_val],
        );
    }
}
