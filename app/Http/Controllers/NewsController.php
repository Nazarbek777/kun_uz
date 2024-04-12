<?php

namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function news(Request $request)
    {

        $news = News::all();
        $news_type = $request->input('news_type', 'muxarrir');
        $news_type_2 = $request->input('news_type', ['toshkent','dolzarb','jahon']);
        $news_type_5 = $request->input('news_type', ['toshkent','jahon']);
        $news_type_3 = $request->input('news_type','maqola');
        $news_type_4 = $request->input('news_type','dolzarb');
        $news_type_select = News::where('news_type', $news_type)->get();
        $news_type_select_2 = News::whereIn('news_type', $news_type_2)->get();
        $news_type_select_5 = News::whereIn('news_type', $news_type_5)->get();
        $news_type_select_3 = News::where('news_type', $news_type_3)->get();
        $news_type_select_4 = News::where('news_type', $news_type_4)->get();
        return view('welcome', [
            'news' => $news,
            'news_type_select' => $news_type_select,
            'news_type_select_2' => $news_type_select_2,
            'news_type_select_3' => $news_type_select_3,
            'news_type_select_4'  => $news_type_select_4,
            'news_type_select_5' => $news_type_select_5
        ]);
    }

    public function showNews(string $id)
    {
        $newsAll=News::all();
        $news = News::findOrFail($id);
        return view('show', compact('news','newsAll'));
    }

    public function toshkent(Request $request)
    {
        $newsAll=News::all();
        $selectedType = $request->input('news_type', 'toshkent');
        $news = News::where('news_type', $selectedType)->get();

        // Boshqa loyihalarga muvofiqlik uchun $news o'zgartirilmaydi

        return view('toshkent', compact('news', 'selectedType','newsAll'));
    }
    public function uzb(Request $request)

    {
        $selectedType = $request->input('news_type', 'uzb');
        $news_type_2 = $request->input('news_type', ['toshkent','dolzarb','jahon']);
        $news_type_select_2 = News::whereIn('news_type', $news_type_2)->get();
        $news = News::where('news_type', $selectedType)->get();

        return view('uzb',compact('news','news_type_select_2'));
    }



    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        $latestNews = $news->first();
        return view('news.index', compact('news', 'latestNews'));
    }


    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'short_content' => 'required|string',
            'news_type' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('storage/images'), $imageName);

        News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'short_content' => $request->input('short_content'),
            'news_type' => $request->input('news_type'),
            'description' => $request->input('description'),
            'image' => 'storage/images/' . $imageName,
        ]);

        return redirect()->route('news')->with('success', 'News added successfully.');
    }




    public function show(string $id)
    {
        $new = News::findOrFail($id);
        return view('news.show', compact('new'));
    }

    public function edit(string $id)
    {
        $new = News::findOrFail($id);
        return view('news.edit', compact('new'));
    }

    public function update(Request $request, string $id)
    {
        $new = News::findOrFail($id);
        $new->update($request->all());
        return redirect()->route('news')->with('success', 'new update success');
    }

    public function destroy(string $id)
    {
        $new = News::findOrFail($id);
        $new->delete();
        return redirect()->route('news')->with('success', 'product delete success');
    }
}
