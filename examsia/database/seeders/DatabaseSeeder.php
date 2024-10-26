<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skills;
use App\Models\Resume;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
       
        Resume::create([
            'name' => 'Anthony P. Salvador',
            'address' => 'San Isidro, San Luis, Pampanga | Pampanga, Philippines, 2014',
            'phone' => '09634178106',
            'email' => 'thonysalvado30.@gmail.com',
            'objective' => 'As an IT Student with A highly skilled and innovative Online Graphic Designer with a strong background in creating visually compelling digital content for web and social media platforms.',
            'certifications' => 'CISCO Networking Essentials - CISCO Networking Academy (2024)',
        ]);
        Skills::insert([
            ['details' => 'Graphic Design using Canva (Expert in templates, layouts, and branding design)'],
            ['details' => 'Customizing Canva for social media graphics, presentations, and marketing materials)'],
            ['details' => 'Collaboration and team design sharing in Canva Pro Photo editing and image enhancement using Canva tool'],
            ['details' => 'Creating cohesive brand identities with Canvas design features'],
            ['details' => 'Strong understanding of typography, color schemes, and visual hierarchy in Canva'],
        ]);
        Education::insert([
            ['details' => 'Bachelor of Science in Information Technology - Baliwag Polytechnic College (2021 - Present)'],
            ['details' => 'Senior High School - Saint Joseph School of Candaba Incorporated (2019 - 2021)'],
            ['details' => 'Junior High School - San Isidro National High School (2015 - 2019)'],
            ['details' => 'Elementary School - San Isidro Elementary School (2009 - 2015)'],
        ]);
       Experience::insert([
            ['details' => 'Graphic Desinger - Online Platform (2021 to present)'],
            ['details' => 'Creative and versatile Online Graphic Designer with 3 years of experience in designing visually impactful digital content for web, social media, and e-commerce platforms.'],
            ['details' => 'Proficient in Canva, Figma, and other design tools.'],
            ['details' => 'Adept at translating client needs into effective design solutions, with a keen eye for detail, color, typography, and user experience.'],
           
        ]);
        Language::insert([
            ['details' => 'English - Fluent'],
            ['details' => 'Filipino - Native'],
            ['details' => 'Kapampangan - Native'],
    
        ]);
    
    
    }
}
