<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Student;
use App\Http\Resources\PhoneResource;
use App\Http\Resources\PhoneCollection;
use App\Phone;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\VarDumper\Cloner\Stub;
use Illuminate\Support\Facades\Validator;


class CRUDController extends Controller
{



    private function store_student(Student $student, array $request)
    {
        $student->name = $request['name'];
        $student->address = $request['address'];
        $student->email = $request['email'];
        $student->links = $request['links'];
        $student->notes = $request['notes'];
        $student->company = $request['company'];
        echo $student;
        $student->save();
    }
    private function store_phone($id, array $request)
    {

        // $student = new Student();
        $phone = new Phone();
        $data = [['st_id' => $id, 'mobile' => $request['mobile1']], ['st_id' => $id, 'mobile' => $request['mobile2']], ['st_id' => $id, 'mobile' => $request['mobile3']]];
        $phone->insert($data);
        // echo $phone;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @return Response 
     */
    public function store(UserStoreRequest $request)
    {

        // $validator = $request->validated();
        $student = new Student();
        // if ($validator->fails()) {

        //     $request->Session::flash('error', $validator->messages()->first());
        //     return redirect(route('phonebook.index'))
        //         ->withInput()
        //         ->withErrors($validator);
        // }

        $this->store_student($student, $request->all());
        $this->store_phone($student->id, $request->all());
        return redirect()->route('phonebook.index')->with('message', 'New Contact Created Successfully !');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Phone::onlyTrashed()->get();
        // for($i=0;$i<sizeof($articles);$i++)
        // echo($articles[$i]);
        // return PhoneResource::collection($articles);
        return PhoneCollection::collection($articles);

//  _______________________________________________
        // $phone = Phone::with('student')->get();
        // $students = Student::paginate(20);
        // // dd($phone);
        // return view('crud.index', compact('students', 'phone'))->with('Phone', $phone);


        // $phone = new Phone();
        // return view('crud.index', compact('students', 'phone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone = Phone::where('st_id', $id)->with('student')->first();
        // $student = new Student();
        $phone = phone::where('st_id', $id)->get();
        $student = Student::find($id);
        // echo $phone[0];
        // dd($phone);
        return view('crud.read', compact('student', 'phone'))->with('Phone', $phone);


        // $student = student::where('id', $id)->first();
        // $phone = phone::where('st_id', $id)->get();
        // return view('crud.read', compact('student', 'phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('crud.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the Field
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'links' => 'required',
            'notes' => 'required',
            'company' => 'required',
        ]);
        $student = Student::find($id);
        $student->mobile = $request->mobile;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->email = $request->email;
        $student->links = $request->links;
        $student->notes = $request->notes;
        $student->company = $request->company;
        $student->save();
        return redirect()->route('phonebook.index')->with('message', 'Contact added Successfully !');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $var = Phone::with('students')->where('st_id',$id)->get();

        for($i=0;$i<sizeof($var);$i++)
        $var[$i]->delete();
        

        // $user = Student::where('id', $id)->firstorfail()->delete();
        // $user->phones()->delete();
        // $user->delete();
        // $phone = Phone::;
        // $student = new Student();
        // $phone = Phone::with('student')->where('st_id', $id)->withTrashed()->get();
        // $student->foreign('id')->references('st_id')->on('phones')->onDelete('cascade');
        return back()->with('message', 'Contact Deleted Successfull !');
    }
}
