<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
    

class NewsController extends Controller
{
    
    public function showNews($id)
    {
        // Retrieve the product based on the provided ID
        $news = News::find($id);
        // Check if the product exists
        if (!$news) {
            abort(404); // Display a 404 Not Found page if the product is not found
        }
    
        // Return the view with the product data
        return view('/news-details', ['news' => $news]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = News::where('nama_berita', 'like', '%' . $query . '%')->paginate(4);
        $categories = News::select('kategori_berita')->distinct()->get();
        $tags = News::select('tags_berita')->distinct()->get();

        // Mendapatkan berita secara random
        $random_news = $this->getRandomNews();

        return view('news', compact('results', 'categories', 'tags', 'random_news'))
            ->with('all_news', $results);
    }

    public function filter(Request $request)
    {
        $category = $request->input('category');
        $all_news = News::where('kategori_berita', $category)->paginate(4);
        $categories = News::select('kategori_berita')->distinct()->get();
        $tags = News::select('tags_berita')->distinct()->get();
    
        return view('news', compact('all_news', 'categories', 'tags'));
    }

    public function index(Request $request){
        return $this->search($request);
    }

    public function getRandomNews($limit = 4)
    {
        // Mengambil sejumlah berita secara acak
        return News::inRandomOrder()->limit($limit)->get();
    }

}