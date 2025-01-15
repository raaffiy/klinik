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
        
        // Semua kategori dan tag tetap diambil untuk ditampilkan di sidebar
        $kategori_1 = News::where('kategori_berita', 'Kesehatan Umum')->get();
        $kategori_2 = News::where('kategori_berita', 'Gizi dan Nutrisi')->get();
        $kategori_3 = News::where('kategori_berita', 'Penyakit dan Pencegahan')->get();
        $kategori_4 = News::where('kategori_berita', 'Kesehatan Mental')->get();
        $kategori_5 = News::where('kategori_berita', 'Olahraga dan Kebugaran')->get();
        $kategori_6 = News::where('kategori_berita', 'Kesehatan Anak')->get();
        $kategori_7 = News::where('kategori_berita', 'Kesehatan Lansia')->get();
    
        $tag_1 = News::where('tags_berita', 'Tips Kesehatan')->get();
        $tag_2 = News::where('tags_berita', 'Edukasi Kesehatan')->get();
        $tag_4 = News::where('tags_berita', 'Trending Kesehatan')->get();
        $tag_5 = News::where('tags_berita', 'Panduan Hidup Sehat')->get();
        $tag_6 = News::where('tags_berita', 'Rekomendasi Diet')->get();
    
        // Hasil pencarian
        $all_news = News::where('nama_berita', 'LIKE', '%' . $query . '%')->paginate(4);
    
        return view('news', compact('all_news', 'kategori_1', 'kategori_2', 'kategori_3', 'kategori_4', 'kategori_5', 'kategori_6', 'kategori_7', 'tag_1', 'tag_2', 'tag_4', 'tag_5', 'tag_6'));
    }
}