<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Carbon\Carbon;

class BookController extends Controller
{
    public function bookDashBoard() {
        return view('dashboard')
            ->with('books',Book::paginate(3));
    }

    public function addBook() {
        return view('bookstore.addBook');
    }

    public function addBookToStore(Request $request) {
        /********** Validate Data **********/ 
        $request->validate([
            'product_name' => 'required|max:255',
            'product_description' => 'required',
            'product_image' => 'required|mimes:jpg,jpeg,png',
            'product_price' => 'required|numeric',
        ]);
        /********** Generate Image Name **********/ 
        $product_image = $request->file(('product_image'));
        $name_generate = hexdec(uniqid());
        $img_extension = strtolower($product_image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_extension;
        /********** Generate Full Path **********/ 
        $upload_location = 'book/';
        $full_path = $upload_location.$img_name;
        /********** Insert Data To Table (Eloquent) **********/ 
        Book::insert([
            'product_name'=>$request->product_name,
            'product_description'=>$request->product_description,
            'product_image'=>$full_path,
            'product_price'=>$request->product_price,
            'created_at'=>Carbon::now(),
        ]);
        /********** Insert Data To Folder public/book **********/ 
        $product_image->move($upload_location, $img_name);
        return redirect()->route('dashboard')->with('success', 'Updated Success');
    }

    public function editBook($id) {
        return view('bookstore.editBook')->with('book', Book::find($id));
    }

    public function updateBook(Request $request, $id) {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_description' => 'required',
            'product_image' => 'mimes:jpg,jpeg,png',
            'product_price' => 'required|numeric',
        ]);
        $product_image = $request->file(('product_image'));

        if($product_image){
            $name_generate = hexdec(uniqid());
            $img_extension = strtolower($product_image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_extension;
            /********** Generate Full Path **********/ 
            $upload_location = 'book/';
            $full_path = $upload_location.$img_name;

            Book::find($id)->update([
                'product_name'=>$request->product_name,
                'product_description'=>$request->product_description,
                'product_image'=>$full_path,
                'product_price'=>$request->product_price,
                'created_at'=>Carbon::now(),
            ]);
            $old_image = $request->old_image;
            unlink($old_image);
            $product_image->move($upload_location, $img_name);
            return redirect()->route('dashboard')->with('success','Updated Success');
        }else {
            Book::find($id)->update([
                'product_name'=>$request->product_name,
                'product_description'=>$request->product_description,
                'product_price'=>$request->product_price,
                'created_at'=>Carbon::now(),
            ]);
            return redirect()->route('dashboard')->with('success','Updated Success');
        }
    }

    public function deleteBook($id) {
        $img = Book::find($id)->product_image;
        unlink($img);
        $delete = Book::find($id)->delete();
        return redirect()->back()->with('success','Deleted Success');
    } 
}
