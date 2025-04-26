<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Category, JobType, Job, User};

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Run AdminUserSeeder first
        $this->call([
            AdminUserSeeder::class,
        ]);

        // Get the first user (admin)
        $admin = User::first();

        // Create categories
        $categories = [
            ['name' => 'Software Development'],
            ['name' => 'Marketing'],
            ['name' => 'Design'],
            ['name' => 'Finance'],
            ['name' => 'Healthcare']
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }

        // Create job types
        $jobTypes = [
            ['name' => 'Full-time'],
            ['name' => 'Part-time'],
            ['name' => 'Contract'],
            ['name' => 'Freelance'],
            ['name' => 'Internship']
        ];
        foreach ($jobTypes as $type) {
            JobType::create($type);
        }

        // Create sample jobs
        $jobs = [
            [
                'user_id' => $admin->id,
                'title' => 'Senior Laravel Developer',
                'description' => 'We are looking for an experienced Laravel developer to join our team.',
                'salary' => '$80,000 - $100,000',
                'location' => 'Remote',
                'job_type_id' => 1,
                'category_id' => 1
            ],
            [
                'user_id' => $admin->id,
                'title' => 'Digital Marketing Specialist',
                'description' => 'Looking for a marketing expert with SEO and PPC experience.',
                'salary' => '$50,000 - $70,000',
                'location' => 'New York',
                'job_type_id' => 2,
                'category_id' => 2
            ],
            [
                'user_id' => $admin->id,
                'title' => 'UI/UX Designer',
                'description' => 'Join our design team to create beautiful user experiences.',
                'salary' => '$60,000 - $85,000',
                'location' => 'San Francisco',
                'job_type_id' => 3,
                'category_id' => 3
            ],
            [
                'user_id' => $admin->id,
                'title' => 'Senior Laravel Developer',
                'description' => 'We are looking for an experienced Laravel developer to join our team.',
                'salary' => '$80,000 - $100,000',
                'location' => 'Remote',
                'job_type_id' => 1,
                'category_id' => 1
            ],
            [
                'user_id' => $admin->id,
                'title' => 'Digital Marketing Specialist',
                'description' => 'Looking for a marketing expert with SEO and PPC experience.',
                'salary' => '$50,000 - $70,000',
                'location' => 'New York',
                'job_type_id' => 2,
                'category_id' => 2
            ],
            [
                'user_id' => $admin->id,
                'title' => 'UI/UX Designer',
                'description' => 'Join our design team to create beautiful user experiences.',
                'salary' => '$60,000 - $85,000',
                'location' => 'San Francisco',
                'job_type_id' => 3,
                'category_id' => 3
            ]
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}