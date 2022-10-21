<?php 
namespace App\Exports;
 
use App\Models\Student;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
 
class StudentExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */ 
    public function headings():array{
        return[
            'nom' ,
            'email',
            'lastname' ,
            'naissance' ,
            'gender' ,
            'Niveau_Scolaire',
            'maladies',
            'paiement' ,
            'formation_a'  ,
            'formation_b'  ,
            'formation_c',
             
        ];
    } 
    public function collection()
    {
      // return Student::all();
      return  $studensts = DB::table('school')->orderBy('nom')->get();

    }
}