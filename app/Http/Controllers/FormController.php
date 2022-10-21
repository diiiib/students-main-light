<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Rap2hpoutre\FastExcel\FastExcel;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $students = DB::table('pays')->orderBy('nom')->get();
    }

    public function all_show()
    {
        //$Student = DB::table('school')->orderBy('username')->get();

        $studensts = DB::table('school')->orderBy('nom')->get();

        //  foreach ($products as $product) {
        //  echo $product->nom;
        //  }
        //return view('products');
        //dd('Form Controller');
        $studensts = form::paginate(10);
        $count = DB::table('school')->count();
        return view('show_formulaire', ['studensts' => $studensts, 'studentscount_count' => $count]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //insert new students
        $formations = array("", "", "");
        $i = 0;
        for ($x = 1; $x < 24; $x++) {
            if ($request['formation' . $x] != null) {
                $formations[$i] = $request['formation' . $x];
                $i++;
                if ($i == 3) {
                    $x = 24;
                }
            }
        }

        DB::table('school')->insertGetId([
            'nom' => $request->nom,
            'email' => $request->email,
            'lastname' => $request->lastname,
            'naissance' => $request->naissance,
            'gender' => $request->gender,
            'lieu' => $request->lieu,
            'Niveau_Scolaire' => $request->Niveau_Scolaire,
            'maladies' => $request->maladies,
            'urgence' => $request->urgence,
            'paiement' => $request->paiement,
            'formation_a' => $formations[0],
            'formation_b' => $formations[1],
            'formation_c' => $formations[2],

        ]);
       // $studensts = DB::table('school')->orderBy('nom')->get();
        //(new FastExcel($studensts))->download('inscroption.xlsx');
        return redirect('/show_formulaire')->with('status', 'Form Data Has Been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($studenst)
    {
        $mystudent = DB::table('school')->where('nom', $studenst)->first();

        //$count = DB::table('school')->where('nom', $studenst)->count();
        //$pdf = PDF::loadView('show_student',['mystudent' => $mystudent]);
        //download PDF file with download method
        // return $pdf->download('students_file.pdf');
        return view('show_student', ['mystudent' => $mystudent]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($studenst)
    {
        $mystudent = DB::table('school')->where('nom', $studenst)->first();

        //return  $mystudent->Username;
        return view('edit', ['mystudent' => $mystudent]);

    }
    public function wonder(){

        return view('logwonder');
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
        $formations = array("", "", "");
        $i = 0;
        for ($x = 1; $x < 24; $x++) {
            if ($request['formation' . $x] != null) {
                $formations[$i] = $request['formation' . $x];
                $i++;
                if ($i == 3) {
                    $x = 24;
                }
            }
        }

        DB::table('school')
            ->where('id', $id)
        // ->where('id', 1)
            ->update([
                'nom' => $request->nom,
                'email' => $request->email,
                'lastname' => $request->lastname,
                'naissance' => $request->naissance,
                'gender' => $request->gender,
                'lieu' => $request->lieu,
                'Niveau_Scolaire' => $request->Niveau_Scolaire,
                'maladies' => $request->maladies,
                'urgence' => $request->urgence,
                'paiement' => $request->paiement,
                'formation_a' => $formations[0],
                'formation_b' => $formations[1],
                'formation_c' => $formations[2],

            ]);
        return redirect('/show_formulaire')->with('status', 'Form Data Has Been Inserted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($studenst)
    {
        //  DB::table('pays')->delete();
        DB::table('school')
            ->where('nom', $studenst)
            ->delete();

        return redirect('/show_formulaire')->with('status', 'Form Data Has Been Inserted');
    }
    public function alldestroy()
    {
        DB::table('school')->delete();

        return view('form')->with('status', 'Form Data Has Been Inserted');
    }

    public function get_student_data()
    {
        return Excel::download(new StudentExport(), 'students.xlsx');
    }

    public function generate_and_save_pdf()
    {
        // retreive all records from db
        $studensts = DB::table('school')->orderBy('nom')->get();
        // share data to view
        view()->share('Student', ['studensts' => $studensts]);
        $pdf = PDF::loadView('myPDF', ['studensts' => $studensts]);
        // download PDF file with download method
        return $pdf->download('students_file.pdf');
    }
    public function search()
    {
        return view('search');
    }
    public function operation_search(Request $request)
    {
        $studensts = DB::table('school')->orderBy('nom')->
            where([
            ['nom', '!=', null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('nom', 'LIKE', '%' . $s . '%')
                        ->orWhere('lastname', 'LIKE', '%' . $s . '%')
                        ->orWhere('formation_a', 'LIKE', '%' . $s . '%')
                        ->orWhere('naissance', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }],
        ])->paginate(10);

        //  $count = DB::table('school')->count();
        return view('search', ['studensts' => $studensts]);
    }

}
