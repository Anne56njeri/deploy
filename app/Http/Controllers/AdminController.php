<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // returns the admin dash board
    public function admin()
    {
        return view('admin');
    }
    public function index()
    {
        //code for retrival of data stored in the db
        $proposalform=proposalform::all();
        return view('index')->withproposalform($proposalform);
}
}
