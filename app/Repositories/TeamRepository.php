<?php

namespace App\Repositories;
use App\Interfaces\TeamInterface;
use App\Models\team;
use DataTables;

class TeamRepository implements TeamInterface
{
    protected $path;

    protected $sl;

    public function __construct()
    {
        $this->path = 'backend.our_team';
        $this->sl = 0;
    }

    public function index($datatable)
    {
        return view($this->path.'.index');
    }

    public function create()
    {
        return view($this->path.'.create');
    }

    public function store($data){
        // 
    }

    public function show($id){

    }

    public function properties($id){
        // 
    }

    public function edit($id)
    {
        // 
    }

    public function update($data, $id){
        // 
    }

    public function destroy($id){
        // 
    }

    public function trash_list($datatable)
    {
        // 
    }

    public function restore($id)
    {
        // 
    }

    public function delete($id){
    //    
    }

    public function print(){

    }

}