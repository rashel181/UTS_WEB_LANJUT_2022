<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class review_barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('review_barang')->insert([
            [
                'id_barang' => '1',
                'deskripsi_barang' => "This once-devoted Acolyte of Clasz has turned oathbreaker, betraying his faith and stealing a measure of power from his god's unknowable expanse. But that connection to Clasz has opened a terrible gateway, and now the faceless usurper must find victims to meet his former master's endless need -- or be consumed by that world-rending power himself.",
                'reviewer_name' => 'noob69',
                'review' => "gonna slide my card for that skin fr",
            ],
            [
                'id_barang' => '2',
                'deskripsi_barang' => "Shadow Fiend has long collected the souls of his enemies. As is the case with any collector, some prizes have stood above others, to be sought out at any cost. However, there are certain souls that should not be tried, and forces so dark and filled with rage that no being could hope to contain them. Thus did Shadow Fiend learn the price, and gift, that comes with stealing the souls of demons, and he was changed evermore.",
                'reviewer_name' => 'googoogaga91922',
                'review' => "2014 arcana's are insanely underated",
            ],
            [
                'id_barang' => '3',
                'deskripsi_barang' => "Deep in the hell of Hell, Terrorblade lay bound behind fractal walls, sentenced to an eternity of twisted contemplation. He stared long into the reflection of his own worst self. And long did his worst self stare into him. Now they rise together, a single entity more powerful than ever before.",
                'reviewer_name' => 'dazcrazy111',
                'review' => "metamorph state was really cool",
            ],
            [
                'id_barang' => '4',
                'deskripsi_barang' => "Yurnero’s mask has been cleaved in two, awakening the ancient souls that once laid dormant inside it. These spirits have become one with Yurnero, giving him both the wisdom and fury of his ancestors. This symbiotic relationship has transformed the Juggernaut into something new and terrifying… a celestial force of nature.",
                'reviewer_name' => 'rrrampge213',
                'review' => "omnislash effect?!!!??!?!",
            ],
            [
                'id_barang' => '5',
                'deskripsi_barang' => "Through the eyes of the mad mask, Traxex glimpsed forgotten memories of her youth. But in addition to her own repressed terrors, the mask revealed much more--horrors glimpsed by different eyes in other times. Memories of brutality stretching into ages uncountable, mystically imprinting a murderous landscape across every corner of her mind. Now, even as she casts the mask aside, she must fight to overcome the most self-destructive impulses unleashed by the evils burned behind her eyes. In this maelstrom of loathing, her only recourse is vengeance... against any worthy victims that cross her path.",
                'reviewer_name' => 'bruhhh510',
                'review' => "silence effect diff",
            ],
            [
                'id_barang' => '6',
                'deskripsi_barang' => "The many aspects of Mercurial are fragments of a single form no longer—for one has stolen away from the many, and the realities of a new Spectre rise. Enticed and trapped by a cursed set of armor, a solitary shade of Mercurial finds that with each soul she harvests for the blighted plate, a stronger sense of self arrives along with it. While at first such forced separation enraged her, she now seeks this tantalizing freedom... Killing whomever she needs to earn more.",
                'reviewer_name' => 'rroooom009',
                'review' => "ez kill with this skin",
            ],
            [
                'id_barang' => '7',
                'deskripsi_barang' => "In an age lost even to his own memory, Ostarion fed his lust for eternal life not with spectral essence, but a nigh-unending harvest of bone. The walls of his palace were formed of fired bone; the streets paved with bones of every sort of creature and every enemy. And those of the flesh who entered this domain took great care, for the King was first and foremost a collector, and nothing moved in the Empire of Bone without summoning the gaze of his unblinking eyes.",
                'reviewer_name' => 'uoooooaw444',
                'review' => "undead? more like underated",
            ],
            [
                'id_barang' => '8',
                'deskripsi_barang' => "Centuries ago, the Rumusque priestess Crella forged unbreakable links of hook and chain to bind the most powerful servants of the Dead God. But the Dead God's corruption grew too strong even for Crella's revered enchantments. Taken up with the rhythm of the Dirge, her chains abandoned their charge, turning instead to carry out the destruction of Crella's homeland at the Dead God's command. Now, their vile purpose long since served, the Chains of Abscession have sworn service to a new master... and the delights of butchery.",
                'reviewer_name' => 'pudgeenjoyer4445445',
                'review' => "FRESH MEAT!!!",
            ],
        ]);
    }
}
