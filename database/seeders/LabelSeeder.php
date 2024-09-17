<?php

namespace Database\Seeders;

// database/seeders/LabelSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Label;

class LabelSeeder extends Seeder
{
    public function run()
    {
        Label::create(['key' => 'welcome_message', 'value' => 'Bienvenue sur notre site web']);
        Label::create(['key' => 'contact_us', 'value' => 'Contactez-nous']);
        Label::create(['key' => 'about_us', 'value' => 'À propos de nous']);
    }
}
