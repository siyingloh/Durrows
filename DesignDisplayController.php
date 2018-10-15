<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class DesignDisplayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('category_home_status', '1')->get();

        $results = DB::table('portfolio')
            ->leftJoin('portfolio_images', 'portfolio.id', 'portfolio_images.p_portfolio_id')
            ->groupBy('portfolio.id')
            ->orderBy('portfolio.portfolio_added_date', 'DESC')
            ->get();

        return view('./frontend/designdisplay', [
            'categories' => $categories,
            'results' => $results
        ]);
    }

    public function search(Request $request)
    {
        $categories = Category::where('category_home_status', '1')->get();  
        $search_text = $request->s_l;
        #mine
        $categori_counts=Category::where('category_title', $search_text)->get();
        foreach($categori_counts as $categori_count){
            DB::table('category')
                    ->where('category_title', $search_text)
                    ->update(['count' => $categori_count->count+1
                        
            ]);
           
        }
        #end
 
        if( $request->has('s_c'))
        {
            $categoryid = $request->s_c;
            $results = DB::table('portfolio')
            ->leftJoin('portfolio_images', 'portfolio.id', 'portfolio_images.p_portfolio_id')
            ->where('portfolio_user_id', 'like', "%".$search_text."%")
            ->orwhere('portfolio_category', 'like', "%".$search_text."%")
            ->groupBy('portfolio.id')
            ->orderBy('portfolio.portfolio_added_date', 'DESC')
            ->leftJoin('users', 'users.id', '=', 'portfolio.portfolio_user_id')
            ->paginate(12);

            if($categoryid != '')
                $results = $results->where('portfolio_category', $categoryid);
        }
        else
        {
            $results = DB::table('portfolio')
            ->leftJoin('portfolio_images', 'portfolio.id', 'portfolio_images.p_portfolio_id')
            ->where('portfolio_user_id', 'like', "%".$search_text."%")
            ->orwhere('portfolio_category', 'like', "%".$search_text."%")
            ->groupBy('portfolio.id')
            ->orderBy('portfolio.portfolio_added_date', 'DESC')
            ->leftJoin('users', 'users.id', 'portfolio.portfolio_user_id')
            ->paginate(12);
        }

        return view('./frontend/portfoliotest', [
            'categories' => $categories,
            'results' => $results
        ]);
    }
    public function normalsearch()
    {
        $categories = Category::where('category_home_status', '1')->get();
        $results = DB::table('portfolio')
                ->leftJoin('portfolio_images', 'portfolio.id', 'portfolio_images.p_portfolio_id')
                ->groupBy('portfolio.id')
                ->orderBy('portfolio.portfolio_added_date', 'DESC')
                ->leftJoin('users', 'users.id', '=', 'portfolio.portfolio_user_id')
                ->paginate(12);

        return view('./frontend/portfoliotest', [
            'categories' => $categories,
            'results' => $results
        ]);
    }
}