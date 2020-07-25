<?php

namespace App\Http\Controllers\Department;

use App\Department;
use App\Semester;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index($id){
        $table = Department::find($id);//page link
        $semester = Semester::orderBY('name','ASC')->where('deptID',$id)->get();
        $faculty = Faculty::orderBY('name','ASC')->where('departmentID',$id)->get();
        $dept = Department::orderBy('name','ASC')->get();
        return view('department.department')->with(['table' => $table, 'dept' => $dept , 'id' => $id, 'faculty' =>$faculty, 'semester' =>$semester]);
    }
	
  // ajax show
    public function allFaculty($id){
        $table = Faculty::orderBy('name', 'ASC')->where('departmentID',$id)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['email'] = $row->email;
            $rowData['phone_no'] = $row->phone_no;
            $rowData['gender'] = $row->gender;
            $rowData['image'] = $row->image;
            $rowData['designation'] = $row->designation;
            $rowData['departmentID'] = $row->dept['name'];
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }

        return response()->json($data);
    }
	
	  //search
    public function facultySearch(Request $request,$id){
        $search = $request->search;
        $table = Faculty::orderBy('name', 'ASC')->search($search)->where('departmentID',$id)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['email'] = $row->email;
            $rowData['phone_no'] = $row->phone_no;
            $rowData['gender'] = $row->gender;
            $rowData['image'] = $row->image;
            $rowData['designation'] = $row->designation;
            $rowData['departmentID'] = $row->dept['name'];
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }
        return response()->json($data);
    }
}
