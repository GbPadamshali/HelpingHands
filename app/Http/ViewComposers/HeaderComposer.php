<?php

namespace App\Http\ViewComposers;

use App\Hospitals;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class HeaderComposer
{
    public $data = [];
    /**
     * Create a header composer.
     *
     * @return void
     */

     public function __construct(Request $request)
    {
        // $req = $request->url();
        $req = $request->id;
        // return $req;
        $this->data = Hospitals::where('id', $req)->first();
        // $this->get();
    }

    // public function get($id)
    // {
    //   $this->data = Hospitals::where('id', $id)->first();
    // }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $data = Hospitals::where('user_id', $id)->first();
        // $view->with(compact('data'));
        // $data = Hospitals::first();
        // $view->with('data', 'happy friday!!!');
        // $view->with(compact('data'));
        $data = $this->data;
        $view->with(compact('data'));

    }
}
