<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\booklist;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class BookListController extends Controller
{
    public function index(){
		$bookList =booklist::with('assingn_user:id,name','update_user:id,name')->orderBy('name')->get();
		
		return view('books.list.index',['bookList'=>$bookList]);
	}
	public function listCreate(Request $request){ ## book list create method
		$bookListData= $request->validate([
			'book_name'=>['required', 'string','max:255'],
			'book_author'=>['required', 'string','max:100'],
			'book_intro'=>['required', 'string'],
			'book_price'=>['required', 'numeric'],
		],[
			'book_name.required'=>'Book Name Required!',
			'book_name.max'=>'Book Name Will be Max 255 Chareacter!',
			'book_author.required'=>'Book Author Name Required!',
			'book_author.max'=>'Book Name Will be Max 100 Chareacter!',
			'book_intro.required'=>'Book Intro Required!',
			'book_price.required'=>'Book Price Required!',
			'book_price.numeric'=>'Book Price Will Be Number!',
		]);
		booklist::create([
			'code'=>time(),
			'name'=>Str::title($request->book_name),
			'author'=>Str::upper($request->book_author),
			'short_details'=>Str::title($request->book_intro),
			'price'=>$request->book_price,
			'slug'=>Str::slug($request->book_author),
			'assigned_id'=>Auth::id(),
		]);
		return back()->with('alert',['type'=>'success', 'message'=>'Create Successfully']);
	}
	public function bookListVisibility(Request $request){ ## visibility Update
		$bookListData = booklist::where('id', $request->visibilityId)->first();
		if (!$bookListData){
			return back()->with('alert',['type'=>'error','message'=>'Invalid Opration!']);
		}else{			
			$bookListData->update([
				'visibility'=>($bookListData->visibility == true ? false : true),
			]);
		}
		return redirect(route('book-list'))->with('alert',['type'=>'success', 'message'=>$bookListData->name . ($bookListData->visibility == true ? ' Visibility ': ' Invisibility ' ) .'Successfully']);
	}
	
	
	public function bookListIndex($code){ ## check book list 
		$bookListData = booklist::where('code',$code)->first();
		if (!$bookListData){
			return back()->with('alert',['type'=>'error','message'=>$bookListData->name.' Invalid Opration!']);
		}
		return view('books.list.edit',['book'=>$bookListData]);
	}
	public function bookListUpdata(Request $request, $code){ ## book list Update
		$bookListData = booklist::where('code',$code)->first();
		if (!$bookListData){ 
			return back()->with('alert',['type'=>'error','message'=>'Invalid Opration!']);
		}else{
			$request->validate([
				'book_name'=>['required', 'string','max:255','unique:booklists,name'],
				'book_author'=>['required','string','max:100'],
				'book_intro'=>['required', 'string'],
				'book_price'=>['required', 'numeric'],
			],[
				'book_name.required'=>'Book Name Required!',
				'book_name.max'=>'Book Name Will be Max 255 Chareacter!',
				'book_name.unique'=>'Book Name Already Exists!',
				'book_author.required'=>'Author Name Required!',
				'book_author.max'=>'Author Name Will be Max 100 Chareacter!',
				'book_intro.required'=>'Intro Required!',
				'book_price.required'=>'Price Required!',
				'book_price.numeric'=>'Price Will Be Number!',
			]);
			$bookListData->update([
				'name'=>Str::title($request->book_name),
				'author'=>Str::upper($request->book_author),
				'short_details'=>Str::title($request->book_intro),
				'price'=>$request->book_price,
				'slug'=>Str::slug($request->book_author),
				'updated_id'=>Auth::id(),
			]);
		}
		return redirect(route('book-list'))->with('alert',['type'=>'success', 'message'=>$bookListData->name .' Update Successfully']);
	}
	public function bookListDelete(Request $request){ ## Delete Update
		$bookListData = booklist::where('id', $request->deleteId)->first();
		if (!$bookListData){
			return back()->with('alert',['type'=>'error','message'=>'Invalid Opration!']);
		}else{			
			$bookListData->delete();
		}
		return redirect(route('book-list'))->with('alert',['type'=>'success', 'message'=> $bookListData->name .' delete Successfully']);
	}
}
