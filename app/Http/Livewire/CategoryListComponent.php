<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CategoryList;

class CategoryListComponent extends Component
{
    public $categories;
    public $name;
    public $category_id;


    public function confirmDeleteCategoryList()
    {

        CategoryList::destroy($this->delete);
        session()->flash('susccess', 'Category deleted successfully.');
        return redirect()->route("category");
    }

    public function deleteCategoryList($idp)
    {
        $this->delete = $idp;
    }

    public function UpdateCategoryList()
    {
        $this->validate([
            'name' => 'required|unique:categories,name',

        ]);

        $CategoryList= CategoryList::findOrFail($this->category_id);
        $CategoryList->name = $this->name;
        $CategoryList->save();

        session()->flash('success', 'Category updated successfully.');
        return redirect()->route("category");
    }

    public function insertCategoryList()
    {

        $this->validate([
            'name' => 'required|unique:category_lists,name',

        ]);

        CategoryList::create([
            "name" => $this->name,
        ]);
        
        


        session()->flash('success', 'CategoryList added successfully.');

        return redirect()->route("CategoryList");
    }
    public function render()
    {
        $this->categories = CategoryList::all();
        return view('livewire.category-list-component')->layout('layouts.app');
    }
}
