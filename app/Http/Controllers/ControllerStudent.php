<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class ControllerStudent extends Controller
{
    private $students;
    private $genders;

    public function __construct()
    {
        $this->getAllStudents();
        $this->genders = config('students.genders');
    }

    public function index()
    {
        // $students = $this->students;
        // return view('students.index', compact('students'));
        
        $data = [
            'genders' => $this->genders
        ];
        return view('students.index', $data);
    }

    public function show($id)
    {
        if(!array_key_exists($id, $this->students)) {
            abort('404');
        }
        return view ('students.show', ['student' => $this->students[$id]]);
    }

    private function getAllStudents(){
        // $this->students =[
        //     [
        //         'img' => 'https://www.boolean.careers/images/students/biagini.png',
        //         'nome' => 'Alessandro Biagini',
        //         'eta' => 25,
        //         'azienda' => 'DISC SPA',
        //         'ruolo' => 'web developer',
        //         'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.',
        //         'genere' => 'm'
        //     ],
        //     [
        //         'img' => 'https://www.boolean.careers/images/students/poggini.png',
        //         'nome' => 'Paola Poggini',
        //         'eta' => 24,
        //         'azienda' => 'Prima Assicurazioni',
        //         'ruolo' => 'junior software engineer',
        //         'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.',
        //         'genere' => 'f'
        //     ],
        //     [
        //         'img' => 'https://www.boolean.careers/images/students/masetti.png',
        //         'nome' => 'Loana Masetti',
        //         'eta' => 36,
        //         'azienda' => 'The Zen Agency',
        //         'ruolo' => 'web developer',
        //         'descrizione' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.',
        //         'genere' => 'f'
        //     ],
        //     [
        //         'img' => 'https://www.boolean.careers/images/students/patruno.png',
        //         'nome' => 'Davide Patruno',
        //         'eta' => 29,
        //         'azienda' => 'ArmadioVerde',
        //         'ruolo' => 'web developer',
        //         'descrizione' => 'Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.',
        //         'genere' => 'm'
        //     ]
        // ];

        $this->students = config('students.students');
        // dd($this->students);

    } 
    public function dbCall() 
    {
        $students = Student::all();
        dd($students);
    }

}

