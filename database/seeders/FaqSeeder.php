<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('faqs')->insert([
            [
                'question' => 'Hoe print je een document vanaf je laptop op HZ?',
                'answer' => 'Je maakt verbinding met een printer via het wifi netwerk van HZ, stuur de opdracht
                om dit document uit te printen en scan vervolgens jouw HZ-pas om je kopie uit te printen.'
            ],
            [
                'question' => 'Hoe scan je een document en stuur je het naar je laptop bij HZ?',
                'answer' => 'Je kan hetzelfde doen als het antwoord hierboven of je mailt het door naar jouw e-mail.'
            ],
            [
                'question' => 'Wat moet je doen als je ziek bent / symptomen vertoont van coronavirus?',
                'answer' => 'Als je ziek bent of je hebt symptomen van coronavirus is het het beste om gewoon
                thuis te blijven. Als het erger wordt moet je 2 weken thuis blijven.'
            ],
            [
                'question' => 'Hoe boek je een projectruimte op school?',
                'answer' => 'Via het portaal, dat u kunt vinden op de site van de HZ, kunt u een projectruimte
                boeken om samen met je groepje te werken.'
            ],
            [
                'question' => 'Wat zijn de instructies als u uw auto wilt parkeren op het parkeerterrein van HZ?',
                'answer' => 'Je zal eerst bij de balie moeten aangeven dat u uw auto wilt gaan parkeren bij de school.
                Hun zullen je HZ-pas activeren zodat de slagbomen open gaan als je volgende keer je school-pas
                scant bij de parkeerplaats.'
            ],

        ]);
    }
}
