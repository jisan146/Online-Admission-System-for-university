<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mail;
class PagesController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function login()
{
    return view ('auth.login');
}

public function oan(Request $request,$id)
{

    if ($request->sp=='sp')
    {

         DB::update('update online_application set ems=0 where id=?',[$request->id]);
         $programs=DB::select('select * from programs where departments=?',[$request->departments]);
         $departments=DB::select('select * from departments ');
         $data=DB::select($this->da,[$request->id]);
         return view ('pages.OnlineApplication')->with('data',$data)->with('programs',$programs)->with('departments',$departments);

    }
    elseif ($request->sn=='sn')
    {

        $data=DB::select('select nvl(max(id),5846)+1 ID from online_application');
        foreach ($data as $key ) {
            $feedback = DB::insert('INSERT INTO online_application ( id,start_time, std_full_name, email, phone,departments,programs,ems) VALUES ( ?,current_timestamp(), ?, ?, ?,(select min(id) from departments),(select min(id) from programs),0)',[$key->ID,'','','']);
            


            $programs=DB::select('select * from programs where departments=?',[$request->departments]);
             $departments=DB::select('select * from departments ');
             $data=DB::select($this->da,[$key->ID]);
             return view ('pages.OnlineApplication')->with('data',$data)->with('programs',$programs)->with('departments',$departments);
        }
    }

    return view ('pages.OnlineApplicationReq')->with('id',$id);
}

public $da='select o.id,ems,start_time,std_full_name,email,phone,o.departments departments,d.departments department_name,o.programs programs,p.programs program_name, fn,fp,mn,mp 
    from online_application o, departments d,programs p where o.departments=d.id and p.id=o.programs and o.id=?';

public function oas(Request $request)
{

    $feedback=DB::update('update online_application set departments=?, programs=? where id=?',[$request->departments,$request->programs,$request->id]);


    if ($request->s1=='s1')
    {
        if ($request->ems=='0'){

        $inputs=
        [
           'no'=>$request->id,
       ];
       Mail::send('pages.ApplicationNoEmail',$inputs,function($mail)use ($request,$inputs){
        $mail->from('jisanrahman1996@gmail.com','Hamdard University Bangladesh Admission')
        ->to($request->email,$request->std_full_name)             
        ->subject('Your Online Admission Application No');
    }
);}
     $feedback=DB::update('update online_application
         set  

         start_time=current_timestamp,
         std_full_name=?,
         email=?,
         phone=?,
         departments=?,
         programs=?,
         ems=1


         where id=?',[$request->std_full_name,$request->email,$request->phone,$request->departments,$request->programs,$request->id]);


 }


 if ($request->s2=='s2')
    {
         $feedback=DB::update('update online_application
         set  
         fn=?,
         fp=?,
         mn=?,
         mp=?      
         where id=?',[$request->fn,$request->fp,$request->mn,$request->mp,$request->id]);
    }

$programs=DB::select('select * from programs where departments=?',[$request->departments]);
$departments=DB::select('select * from departments ');
$data=DB::select($this->da,[$request->id]);
 return view ('pages.OnlineApplication')->with('data',$data)->with('programs',$programs)->with('departments',$departments);
}




public function cfl(Request $request)
{
    if (Auth::check())
    {
        if ($request->submit=='submit') {


            foreach ($request->id as $key ) {
                $test = DB::update(
                    'update certificate_info set                                                
                    std_id=?,
                    std_name=?,
                    cgpa=?,
                    issue_date=?,
                    program=?,
                    certificate_no=?,
                    total_credit=? where id=?',
                    [$request->std_id[$key],$request->std_name[$key],$request->cgpa[$key],$request->issue_date[$key],$request->program[$key],$request->certificate_no[$key],$request->total_credit[$key],$request->id[$key]]);                       
            }                   
        }

        $data = DB::select('select * from certificate_info');       
        return view('pages.CertificateList')->with('data',$data);
    }else
    {
        return view('auth.login');
    }
}

public function drl(Request $request)
{
    if (Auth::check())
    {
        if ($request->submit=='submit') {


            foreach ($request->id as $key ) {
                $test = DB::update(
                    'update departments set                                                
                    departments=?
                    where id=?',
                    [$request->departments[$key],$request->id[$key]]);                       
            }                   
        }

        $data = DB::select('select * from departments');       
        return view('pages.DepartmentList')->with('data',$data);
    }else
    {
        return view('auth.login');
    }
}

public function prl(Request $request)
{
    if (Auth::check())
    {
        if ($request->submit=='submit') {


            foreach ($request->id as $key ) {
                $test = DB::update(
                    'update programs set                                                
                    departments=?,
                    programs=?
                    where id=?',
                    [$request->departments[$key],$request->programs[$key],$request->id[$key]]);                       
            }                   
        }

        $data = DB::select('SELECT p.id id, p.departments departments, p.programs programs, d.departments department_name FROM programs p,departments d where d.id=p.departments');       
        $dpts=DB::select('select * from departments');

        return view('pages.ProgramList')->with('data',$data)->with('dpts',$dpts);
    }else
    {
        return view('auth.login');
    }
}

public function dr(Request $request)
{
    if (Auth::check())
    {
        if ($request->submit=='submit') {
            $feedback = DB::insert('insert into departments (departments) values (?)',[$request->departments]);
            session()->flash('Success','Success !!!!');
        }
        return view ('pages.DepartmentEntry');
    }else
    {
        return view('auth.login');
    }
}
public function pr(Request $request)
{
    if (Auth::check())
    {
        if ($request->submit=='submit') {
            $feedback = DB::insert('insert into programs (departments,programs) values (?,?)',[$request->departments,$request->programs]);
            session()->flash('Success','Success !!!!');
        }
        $data = DB::select('select * from departments');
        return view ('pages.ProgramEntry')->with('data',$data);
    }else
    {
        return view('auth.login');
    }
}
public function emails()
{
    $inputs=
    [
        'name'=>'jisan',
        'email'=>'jisan146@gmail.com',
        'subject'=>'suject',
        'message'=>'message',
    ];
    Mail::send('pages.emailtest',$inputs,function($mail){
        $mail->from('jisanrahman1996@gmail.com','jisan tset')
        ->to('jisan146@gmail.com','jisan')
        ->subject('subject tset');
    }
);
    return 'ok';
}
public function cfv(Request $request)
{
    $data = DB::select('select * from certificate_info where std_id=? or certificate_no=?',[$request->id,$request->id]);
    return view ('pages.CertificateVerify')->with('data',$data);
}
public function cfe()
{
    if (Auth::check())
    {
        return view ('pages.CertificateEntry');
    }else
    {
        return view('auth.login');
    }
}
public function cfr(Request $request)
{
    if (Auth::check())
    {
        $feedback = DB::insert('insert into certificate_info (std_id, std_name, cgpa, issue_date, program, certificate_no, total_credit) values (?,?,?,?,?,?,?)',[$request->std_id,$request->std_name,$request->cgpa,$request->issue_date,$request->program,$request->certificate_no,$request->total_credit]);
        session()->flash('Success','Success !!!!');
        return redirect ('/cfe');
    }else
    {
        return view('auth.login');
    }
}
public function index()
{
    return view ('pages.Home');
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
//
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
//
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
//
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
//
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
//
}
}