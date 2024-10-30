<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resume;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Certification;

class ResumeSeeder extends Seeder
{
    public function run()
    {
        $resume = Resume::create([
            'name' => 'Jauie Canon',
            'address' => 'Taal, Pulilan, Bulacan | Pulilan, Philippines, 3005',
            'phone' => '09495689082',
            'email' => 'jauiecanon@gmail.com'
        ]);

        // Add experiences
        $resume->experiences()->createMany([
            [
                'title' => 'Logistics Assistant',
                'company' => 'Orovet Farm',
                'location' => 'Paltao, Pulilan',
                'start_date' => '2024-07-01',
                'end_date' => '2024-09-01',
                'description' => 'Coordinated efficient movement of goods, improving delivery timelines by 20%. Reduced stock discrepancies by 15% through improved inventory management processes. Enhanced operational efficiency through collaboration with cross-functional teams.'
            ],
            [
                'title' => 'Freelance Web Developer',
                'company' => 'Self-employed',
                'location' => 'Remote', // Default value instead of null
                'start_date' => '2023-01-01',
                'end_date' => null,
                'description' => 'Designed and developed websites for small businesses using HTML, CSS, JavaScript, and PHP. Collaborated with clients to deliver custom web solutions to meet their business needs. Implemented SEO best practices, increasing web traffic for clients by 25%.'
            ],
        ]);

        // Add education
        $resume->education()->createMany([
            [
                'degree' => 'Bachelor of Science in Information Technology',
                'institution' => 'Baliwag Polytechnic College',
                'start_date' => '2021-01-01',
                'end_date' => '2025-01-01'
            ],
            [
                'degree' => 'Senior High School',
                'institution' => 'Asian Institute of Science and Technology',
                'start_date' => '2019-01-01',
                'end_date' => '2021-01-01'
            ],
            [
                'degree' => 'Junior High School',
                'institution' => 'Bajet-Castillo High School',
                'start_date' => '2015-01-01',
                'end_date' => '2019-01-01'
            ],
            [
                'degree' => 'Elementary School',
                'institution' => 'Jose C Castro Elementary School',
                'start_date' => '2009-01-01',
                'end_date' => '2015-01-01'
            ],
        ]);

        // Add skills
        $resume->skills()->createMany([
            ['skill_name' => 'Logistics & Supply Chain Management'],
            ['skill_name' => 'PC, Laptop & Mobile Device Repair'],
            ['skill_name' => 'Web Development (HTML, CSS, JavaScript, PHP)'],
            ['skill_name' => 'Programming (Python, Java, C++)'],
            ['skill_name' => 'POS & Queue Management System Development'],
            ['skill_name' => 'Multimedia & Computer Editing (Photoshop, Video Editing)'],
            ['skill_name' => 'Networking & Troubleshooting'],
            ['skill_name' => 'Database Management (MySQL, SQL Server)'],
            ['skill_name' => 'Capstone & IT Project Implementation'],
        ]);

        // Add certifications
        $resume->certifications()->createMany([
            [
                'title' => 'Full Course in Inventive Media',
                'organization' => 'Inventive Media',
                'date_obtained' => '2024-01-01'
            ],
            [
                'title' => 'CISCO Networking Essentials',
                'organization' => 'CISCO Networking Academy',
                'date_obtained' => '2023-01-01'
            ],
            [
                'title' => 'Certified PHP Developer',
                'organization' => 'W3Schools',
                'date_obtained' => '2022-01-01'
            ],
        ]);
    }
}