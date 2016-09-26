<?php

namespace App\Http\Controllers\Backend;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    function __construct(Page $pages)
    {
        $this->pages = $pages;
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = $this->pages->all();
        return view('backend.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
        $templates = $this->getPageTemplates();
        return view('backend.pages.form' , compact('page', 'templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StorePageRequest $request)
    {
        $this->pages->create($request->only('title', 'url' , 'name' , 'content', 'template'));

        return redirect(route('backend.pages.index'))->with('status' , 'Page has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = $this->pages->findOrFail($id);
        $templates = $this->getPageTemplates();

        return view('backend.pages.form', compact('page', 'templates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdatePageRequest $request, $id)
    {
        $page = $this->pages->findOrFail($id);
        $page->fill($request->only('title' , 'url' , 'name' , 'content', 'template'))->save();
        return redirect(route('backend.pages.edit', $page->id))->with('status' , 'Page has been updated');
    }

    public function confirm ($id) {
        $page = $this->pages->findOrFail($id);
        return view('backend.pages.confirm', compact('page'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = $this->pages->findOrFail($id);
        $page->delete();
        return redirect(route('backend.pages.index'))->with('status' , 'Page has been deleted');
    }

    protected function getPageTemplates()
    {
        $templates = config('cms.templates');
        return ['' => ''] + array_combine(array_keys($templates), array_keys($templates));
    }
}
