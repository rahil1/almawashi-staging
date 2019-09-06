<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Section;
use App\Models\Coverage;
use App\Models\Product;
use App\Models\Location;
use App\Models\Aboutus;
use App\Models\Service;
use App\Models\Stakeholder;
use App\Models\Report;
use App\Models\Standard;
use App\Models\Salesoutlet;
use App\Models\Tender;
use App\Models\Career;
use App\Models\Recipe;


use App\Traits\CountryTrait;



use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    use CountryTrait;

    public function returnWelcomeView()
    {
        $main_nav_links = Page::where('page_link_level', 1)->where('is_active', 1)->get();
        $secondary_nav_links = Page::where('page_link_level', 2)->where('is_active', 1)->get();
        $action_bar_links = $this->returnActionBarLinks();

        return view('frontend.home')->with([
            'main_nav_links' => $main_nav_links,
            'secondary_nav_links' => $secondary_nav_links,
            'action_bar_links' => $action_bar_links,
        ]);
    }
    
    private function returnActionBarLinks()
    {
       return Page::where('page_link_level', 3)->where('is_active', 1)->get();
    }

    private function returnNavLinks($page_id)
    {
       return Section::where('fk_page_id', $page_id)->where('is_active', 1)->get();
    }

    public function returnNewsAndMediaView($section_name)
    {
        //Getting the nav links for news and media
        $news_media_page_id = Page::where('page_name', 'News_&_Media')->value('page_id');
        $nav_links = $this->returnNavLinks($news_media_page_id);


        //Getting news coverage
        $news_section_id = Section::where('section_name', $section_name)->value('section_id');
        $coverages = Coverage::where('fk_section_id', $news_section_id)->get();

        return view('frontend.news_&_media.'.$section_name)->with([
            'nav_links' => $nav_links,
            'coverages' => $coverages,
        ]);
    }

    public function returnReadMoreView($id)
    {
        $requested_coverage = Coverage::find($id);
        return view('frontend.news_&_media.news_single_story')->with([
            'title' => $requested_coverage->media_title,
            'media_type' => $requested_coverage->getMediaTypeString->media_type,
            'date_of_coverage' => $requested_coverage->created_at->toFormattedDateString(),
            'image' => $requested_coverage->media_image != null ? url()->assetFrom(config('externalAssets.ext_asset_link'), $requested_coverage->media_image) : ($requested_coverage->media_video != null ? json_decode($requested_coverage->media_video)->image : ''),
            // 'image' => url()->assetFrom(config('externalAssets.ext_asset_link'), $requested_coverage->media_image),
            'l_description' => $requested_coverage->media_l_description,
        ]);
    }

    public function returnProductView($section_name)
    {
        $products_page_id = Page::where('page_name', 'Products')->value('page_id');
        $nav_links = $this->returnNavLinks($products_page_id);

        $product_section_id = Section::where('section_name', $section_name)->value('section_id');


        if(strcasecmp($section_name, 'recipes'))
        {
            //Getting products
            $products = Product::where('fk_section_id', $product_section_id)->get();

        }
        else
        {
            $products = Recipe::all();
        }
        // dd( $products);

        return view('frontend.products.'.$section_name)->with([
            'nav_links' => $nav_links,
            'products' => $products,
        ]);
    }

    public function returnLocationsView()
    {
        //Getting locations
        $locations = Location::all();

        return view('frontend.contact.contact_us')->with([
            'locations' => $locations,

        ]);
    }

    public function returnBranchesView()
    {
        //Getting locations
        $locations = Location::all();

        return view('frontend.our_branches.branches')->with([
            'locations' => $locations,

        ]);
    }
    public function returnOutletsView($location_code)
    {
        //Getting locations
        $country_id = Location::where('location_code' , $location_code)->value('location_id');
        $outlets = Salesoutlet::where('country_id', $country_id)->get();
        $nameOfCountry = null;

        if(!$outlets->isEmpty())
        {
            $nameOfCountry = $outlets->first()->getRelatedCountry->country;
        }    

        return view('frontend.our_branches.sales_outlets')->with([
            'outlets' => $outlets,
            'nameOfCountry' => $nameOfCountry,
        ]);
    }

    public function returnAboutUsView($section_name)
    {
        $aboutUs_page_id = Page::where('page_name', 'About_Us')->value('page_id');
        $nav_links = $this->returnNavLinks($aboutUs_page_id);

        //Getting processed products
        $aboutus_section_id = Section::where('section_name', $section_name)->value('section_id');
        
        if(strcasecmp($section_name, "MISSION_&_VISION") == 0)
        {
            //Getting visitor ip
            $visitor_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);

            $locations_id = Location::where('location_short', $visitor_ip->iso_code)->value('location_id');

            $aboutus_contents = Aboutus::where('fk_section_id', $aboutus_section_id)->where('content_location', $locations_id)->get();   
        }
        else
        {
            $aboutus_contents = Aboutus::where('fk_section_id', $aboutus_section_id)->get();
        }

        return view('frontend.about_us.'.$section_name)->with([
            'nav_links' => $nav_links,
            'aboutus_contents' => $aboutus_contents,
        ]);
    }

    public function returnServicesView($section_name)
    {
        $services_page_id = Page::where('page_name', 'Services')->value('page_id');
        $nav_links = $this->returnNavLinks($services_page_id);

        //Getting services
        $services_section_id = Section::where('section_name', $section_name)->value('section_id');
        $services = Service::where('fk_section_id', $services_section_id)->get();

        return view('frontend.our_services.'.$section_name)->with([
            'nav_links' => $nav_links,
            'services' => $services,
        ]);

    }

    public function returnStakeholderView($section_name)
    {
        $stakeholder_page_id = Page::where('page_name', 'Stakeholders')->value('page_id');
        $nav_links = $this->returnNavLinks($stakeholder_page_id);
        $locations = Location::pluck('country');

        //Getting stakeholders
        $stakeholders_section_id = Section::where('section_name', $section_name)->value('section_id');
        $stakeholders = Stakeholder::where('fk_section_id', $stakeholders_section_id)->get();

        return view('frontend.stakeholders.'.$section_name)->with([
            'nav_links' => $nav_links,
            'stakeholders' => $stakeholders,
            'locations' => $locations,
        ]);
    }

    public function returnQualityView($section_name)
    {
        $quality_page_id = Page::where('page_name', 'Quality')->value('page_id');
        $nav_links = $this->returnNavLinks($quality_page_id);

        //Getting quality_standards
        $quality_section_id = Section::where('section_name', $section_name)->value('section_id');
        $quality_standards = Standard::where('fk_section_id', $quality_section_id)->get();
        // dd($quality_section_id);

        return view('frontend.our_quality.'.$section_name)->with([
            'nav_links' => $nav_links,
            'quality_standards' => $quality_standards,
        ]);
    }

    public function downloadReport($report_id_code)
    {
        $report = Report::findByUUID($report_id_code);
        $filePath = url()->assetFrom(config('externalAssets.ext_asset_link'), $report->report_path);
        $filename = $report->report_title;
        $tempFileDownload = tempnam(sys_get_temp_dir(), $filename);
        copy($filePath, $tempFileDownload);                         //copy file from link locally first
        return response()->download($tempFileDownload, $filename);
    }

    public function returnTendersView()
    {
        $nav_links = $this->returnActionBarLinks();
        $tenders = Tender::all();

        return view('frontend.smart_menus.open_tenders')->with([
            'nav_links' => $nav_links,
            'tenders' => $tenders,
        ]);
    }

    public function showTenderForm($form_code)
    {
        $nav_links = $this->returnActionBarLinks();
        $selected_tender = Tender::findByUUID($form_code);
        
        return view('frontend.smart_menus.tender_form')->with([
            'nav_links' => $nav_links,
            'selected_tender' => $selected_tender,
        ]);
    }

    public function returnRequestQuoteView()
    {
        $nav_links = $this->returnActionBarLinks();
        $products_page_id = Page::where('page_name', 'Products')->value('page_id');
        $product_categories = Section::where('fk_page_id', $products_page_id)->where('is_active', 1)->pluck('section_name');
        // $locations = $this->returnCountryArray();
        $locations = Location::pluck('country');


        return view('frontend.smart_menus.request_quote')->with([
            'nav_links' => $nav_links,
            'product_categories' => $product_categories,
            'locations' => $locations, 
        ]);
    }

    public function fetchProductsFromSections(Request $request)
    {

        $userSelectedCategory = $request->get('valueOfCategory');
        $section_id = Section::where('section_name', $userSelectedCategory)->value('section_id');
        $products = Product::where('fk_section_id', $section_id)->pluck('product_name');

        $output = '<option value="">Select product</option>';
        foreach($products as $row)
        {
            $output .= '<option userSelectedCategory="'.$row.'">'.$row.'</option>';
        }
                                                         
        echo $output;
    }

    public function returnCareerView()
    {
        $nav_links = $this->returnActionBarLinks();
        $careers = Career::all();

        return view('frontend.smart_menus.careers_hub')->with([
            'nav_links' => $nav_links,
            'careers' => $careers,
        ]);
    }

    public function returnCareerApplyView($career_id)
    {
        $nav_links = $this->returnActionBarLinks();
        $selected_career = Career::find($career_id);
        $locations = $this->returnCountryArray();        

        return view('frontend.smart_menus.apply_now')->with([
            'nav_links' => $nav_links,
            'selected_career' => $selected_career,
            'locations' => $locations, 
            
        ]);
    }

    public function returnCareerSubmitView($career_id)
    {
        $nav_links = $this->returnActionBarLinks();
        $selected_career = Career::find($career_id);


        return view('frontend.smart_menus.submit_job')->with([
            'nav_links' => $nav_links,
            'selected_career' => $selected_career,
        ]);
    }

    public function returnTodayRecipeView()
    {
        $today_recipe = Recipe::where('recipe_title', 'Fresh Lamb Rack Special cuts with mashed potatoes')->get();
        // dd($today_recipe); 

        return view('frontend.recipie.today-recipe')->with([

            'today_recipe' => $today_recipe,
        ]);
    }
}
