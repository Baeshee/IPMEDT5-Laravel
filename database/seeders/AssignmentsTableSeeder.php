<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('assignments')->insert([
            "user_email" => "TimBakker123@gmail.com",
            "book_isbn" => "9789000339280",
            "assignment" => 'Hieronder kun jij een kleur kiezen. Zoek de mooiste kleur uit en geef hem net zo’n bijzondere naam. Bedenk daarvoor dus goed waar de kleur jou precies aan doet denken.',
            "assignmentChild1" => ' ',
            "assignmentChild2" => ' ',
            "assignmentChild3" => ' ',
            'kind_of_assignment' => 'color',
            'status' => 'active',
            'answer_1' => '',
            'answer_2' => '',
            'answer_3' => '',
        ]);

        DB::table('assignments')->insert([
            "user_email" => "TimBakker123@gmail.com",
            "book_isbn" => "9789000339280",
            "assignment" => 'Maak een ontwerp van jouw eigen muts! Teken hem op het juiste formaat uit, knip hem uit en bekijk zelf voor de spiegel hoe hij staat of knutsel hem zodat hij echt op jouw hoofd past. Upload als je klaar bent een foto voor in je boekenkast.',
            "assignmentChild1" => ' ',
            "assignmentChild2" => ' ',
            "assignmentChild3" => ' ',
            'kind_of_assignment' => 'image',
            'status' => 'active',
            'answer_1' => '',
            'answer_2' => '',
            'answer_3' => '',
        ]);
        DB::table('assignments')->insert([
            "user_email" => "TimBakker123@gmail.com",
            "book_isbn" => "9789000339280",
            "assignment" => 'Hieronder vind je opdrachten die over het boek gaan.',
            "assignmentChild1" => 'Botje zegt in plaats van ‘Bibi’ ‘Bibibi’, en in plaats van ‘papa’, ‘papapa’. Zie jij wat Botje doet? Hoe denk je dat botje mama zou noemen?',
            "assignmentChild2" => 'Stel dat botje de woorden ‘dodo’, ‘jojo’ en ‘lolly’ zou uitspreken, hoe zou ze dat dan doen?',
            "assignmentChild3" => ' Stel dat er twee andere botjes zijn, ze heten BOTJEBOTJE, EJTOB, BOT en BOET',
            'kind_of_assignment' => 'multipleChoice1',
            'status' => 'active',
            'answer_1' => '',
            'answer_2' => '',
            'answer_3' => '',
        ]);
        DB::table('assignments')->insert([
            "user_email" => "TimBakker123@gmail.com",
            "book_isbn" => "9789000339280",
            "assignment" => 'Ken jij het woord ‘onbetaalbaar’? Wat betekent dat (voor jou?). Iets dat onbetaalbaar is, dat is iets wat je voor geen geld zou willen verkopen. Niet voor al het geld in de wereld.
            In het boek is Bibi bang dat haar vader botje verkoopt aan De Rus. De Rus heeft namelijk een koffer met héél veel geld. Voor Bibi is botje onbetaalbaar. Hoe veel geld De Rus haar ook zo betalen, ze zou botje nooit weggeven.',
            "assignmentChild1" => 'Waarom denk je dat Bibi Botje niet wil verkopen, zelfs niet voor héél veel geld?',
            "assignmentChild2" => 'Wat zou jij hebben gedaan als je in dezelfde situatie zat als Bibi?',
            "assignmentChild3" => 'Zijn er dingen die voor jou onbetaalbaar zijn? Waarom zijn die onbetaalbaar voor je?',
            'kind_of_assignment' => 'multipleChoice2',
            'status' => 'active',
            'answer_1' => '',
            'answer_2' => '',
            'answer_3' => '',
        ]);
        DB::table('assignments')->insert([
            "user_email" => "TimBakker123@gmail.com",
            "book_isbn" => "9789000339280",
            "assignment" => 'Luister hieronder naar een audiofragment over je boek.',
            "assignmentChild1" => ' ',
            "assignmentChild2" => ' ',
            "assignmentChild3" => ' ',
            'kind_of_assignment' => 'audio',
            'status' => 'active',
            'answer_1' => '',
            'answer_2' => '',
            'answer_3' => '',
        ]);
      


    }
}
