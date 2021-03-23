<?php 
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use DataTables;
use Session;
use App\Traits\ImageTrait;
use App\Http\Requests\StudentRequest;

  
class StudentController extends Controller
{
  use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $student;
    
    // Define Constructer Methode ----------- 
    function __construct(Request $request,Student $student){
        // Initialize the object and its properties by assigning value(models)----------- 
        $this->student          = $student;
        $this->method           = $request->method();
        
    }

    public function index()
    {
        return view('students.index');
    }



    public function data(Request $request)
    {
        $student = $this->student->get();
        return DataTables::of($student)
            ->addIndexColumn()
        ->addColumn('actions','<a href="{{URL::to("students/edit/$id")}}">Edit</a>')
            ->rawColumns(['actions'])
            ->make(true);
    }




      //Load insert form view and page category and measurement values on view  ----------
    public function create(){
      
      return view('students.add');
    }
    
  //Insert post data in table ---------
    public function store(StudentRequest $request){



      $input = request()->except(['_token','photo']);
     
    try {
           $student = $this->student->create($input);
     
           //print_r();die;
           $id = $student->id;
            if($request->hasFile('photo')){
              
              $folder_name ='students';
              $photoName = $this->fileUpload($request->file('photo'),false,$folder_name);
           //  print_r($photoName);die;
              $input['photo'] = $photoName;
              $this->student->findOrFail($id)->update($input);
            }
            die;
                Session::flash('success','student create successful');
        } catch (\Exception $e) {
                Session::flash('error',$e->getMessage());
        }
      return back();
    }

    //Get post data by id  and load edit form----------
    public function edit($id = null){
      
      
      $data=$this->student->findOrFail($id);
      //echo "<pre>"; print_r($data); die();
      return view('students.edit',compact('data'));
    }

    //update post data by id ----------------
    public function update(StudentRequest $request,$id = null){
        $input = request()->except(['_token']);
        $student=$this->student->findOrFail($id);

        try {
                
            $this->student->findOrFail($id)->update($input);
            if($request->hasFile('photo')){
              $folder_name ='students';
              $photoName = $this->fileUpload($request->file('photo'),true,$folder_name);
              
              $input['photo'] = $photoName;
              $this->student->findOrFail($id)->update($input);
            }
            Session::flash('success','students Update Successfully');
        } catch (\Exception $e) {
            Session::flash('error',$e->getMessage());
        }
        return back();
    } 


     public function destroy($id)
     {
        $student = $this->student->withoutGlobalScope(StatusScope::class)->findOrFail($id);
        $student->delete();
        
        if($student){
         return redirect('students')->with('success', trans('student Delete Successfully.'));
        }else{
         return redirect('students')->with('error', trans('There was an issue deleting the recode. Please try again.'));
        }
     }


}