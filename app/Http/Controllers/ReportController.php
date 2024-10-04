<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();

        return view('report.index')->with(compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('report.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = new Report();
        $report->title = $request->title;
        $report->description = $request->description;
        $report->author = $request->author;
        $report->category_id = $request->category_id;
        $report->status = verify_status($request->status);
        $report->source = $request->source;
        $report->save();

        return redirect()->route('report.index')->with('success', 'Notícia criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $report = Report::find($id);

        return view('report.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = Report::find($id);
        $categories = Category::all();

        return view('report.edit', compact('report', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Report::find($id);
        $report->title = $request->title;
        $report->description = $request->description;
        $report->author = $request->author;
        $report->category_id = $request->category_id;
        $report->status = verify_status($request->status);
        $report->source = $request->source;
        $report->update();

        return redirect()->route('report.index')->with('success', 'Notícia editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Report::find($id)->delete();

        return redirect()->route('report.index')->with('success', 'Notícia deletada com sucesso!');
    }

    public function list()
    {
        dd('a');
        $reports = Report::where('status', 'active')->get();

        return view('report.list', compact('reports'));
    }

    public function search(Request $request)
    {
        // $reports = Report::find

        return view('report.search', compact('reports'));
    }
}
