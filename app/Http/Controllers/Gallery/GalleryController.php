<?php

namespace App\Http\Controllers\Gallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategory;
use App\Photo;
use Validator;
use DB;

class GalleryController extends Controller
{

  public function index(Request $request)    {
    $NUM_PAGE = 6;
    $categories = Category::paginate($NUM_PAGE);
    $page = $request->input('page');
    $page = ($page != null)?$page:1;
    return view('Front.page_homepage')->with('categories',$categories)
                                      ->with('NUM_PAGE',$NUM_PAGE)
                                      ->with('page',$page);
  }

  public function getSubcategory($category_name,$category_id,Request $request)    {
      $NUM_PAGE = 6;
      $subcategories = Subcategory::where('category_id',$category_id)->paginate($NUM_PAGE);
      $page = $request->input('page');
      $page = ($page != null)?$page:1;
      return view('Front.page_subcategory')->with('subcategories',$subcategories)
                                           ->with('NUM_PAGE',$NUM_PAGE)
                                           ->with('page',$page);
  }

  public function getPhoto($subcategory_name,$subcategory_id,Request $request)    {
      $NUM_PAGE = 9;
      $photos = Photo::where('subcategory_id',$subcategory_id)
                     ->paginate($NUM_PAGE);
      $page = $request->input('page');
      $page = ($page != null)?$page:1;
      return view('Front.page_gallery')->with('photos',$photos)
                                       ->with('NUM_PAGE',$NUM_PAGE)
                                       ->with('page',$page);
  }

  public function getaddPhoto()    {
      $categories = Category::get();
      return view('Front.page_addphoto')->with('categories',$categories);
  }

  public function addPhoto(Request $request){
       $validator = Validator::make($request->all(), $this->rules(), $this->messages());
       if ($validator->passes()) {
         $photo = request()->all();
         $photo = Photo::create($photo);
         $photo = Photo::all()->last();
         if($request->hasFile('photo')){
              echo 'Uploaded <br>';
              $file = $request->file('photo');
              $fileName = md5(($file->getClientOriginalName(). time()) . time()) . "_o." . $file->getClientOriginalExtension();
              $file->move('uploads/photo', $fileName);
              $path = 'uploads/photo'.$fileName;
              echo '<a href="'.$path.'" target="_blank">Download Photo</a>';
              $created_photo = Photo::findOrFail($photo->photo_id);
              $created_photo->update(array('photo'=>$fileName));
         }
         else
         {
              echo 'Can not Upload';
         }
          return redirect('AddPhoto');
        }
        else {
         return back()->withErrors($validator)->withInput();
       }
  }
  public function rules() {
       return [
         'photo_name' => 'required',
         'category_id' => 'required',
         'subcategory_id' => 'required',
         'photo' => 'required|mimes:jpeg,jpg,png',
         'status' => 'required',
       ];
  }

  public function messages() {
       return [
         'photo_name.required' => 'Please enter a name',
         'category_id.required' => 'Please select a category',
         'subcategory_id.required' => 'Please select a subcategory',
         'photo.required' => 'Please select a photo',
         'photo.required' => 'The photo must be a file of type :jpeg,jpg,png',
         'status.required' => 'Please select a status',
       ];
  }

  public function deletePhoto($photo_id)    {
       Photo::destroy($photo_id);
       return back();
  }

  public function editPhoto($photo_name,$photo_id){
       $photo = Photo::findOrFail($photo_id);
       $categories = Category::get();
       $subcategories = Subcategory::get();
       return view('Front.page_editphoto')->with('photo',$photo)
                                          ->with('categories',$categories)
                                          ->with('subcategories',$subcategories);

  }
  public function updatePhoto(Request $request){
       $validator = Validator::make($request->all(), $this->rules(), $this->messages());
       $photo_id = $request->photo_id;
       if ($validator->passes()) {
         $photo = Photo::findOrFail($photo_id);
         if($request->hasFile('photo')){
              echo 'Uploaded <br>';
              $file = $request->file('photo');
              $fileName = md5(($file->getClientOriginalName(). time()) . time()) . "_o." . $file->getClientOriginalExtension();
              $file->move(public_path('uploads/photo/'), $fileName);
              $path = 'uploads/photo/'.$fileName;
              echo '<a href="'.$path.'" target="_blank">Download Photo</a>';
              $created_photo = Photo::findOrFail($photo_id);
              $photo->update($request->all());
              $created_photo->update([  'photo' => $fileName,  ]);

         }
         return redirect('AddPhoto');
        }
        else {
         return back()->withErrors($validator)->withInput();
       }
  }
}
