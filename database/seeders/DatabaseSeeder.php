<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Properties;
use App\Models\Team;
use App\Models\testimonials;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Properties::create([
            'address' => '123 Ocean Drive, Miami, FL 33101',
            'slug' => '123-ocean-drive',
            'list_price' => 450000,
            'est_payment' => 2500,
            'arv' => 520000,
            'roi' => 15.5,
            'ltc' => 70,
            'beds' => 3,
            'bath' => 2,
            'sqft' => 1800,
            'yr_built' => 2020,
            'exterior' => 'Stucco',
            'main_img' => 'property1.jpg',
            'status' => 'Available',
            'prop_type' => 'Single Family',
            'is_featured' => true,
            'is_available' => true,
        ]);

        Properties::create([
            'address' => '456 Palm Avenue, Tampa, FL 33602',
            'slug' => '456-palm-avenue',
            'list_price' => 325000,
            'est_payment' => 1800,
            'arv' => 380000,
            'roi' => 12.0,
            'ltc' => 65,
            'beds' => 4,
            'bath' => 2.5,
            'sqft' => 2200,
            'yr_built' => 2018,
            'exterior' => 'Brick',
            'main_img' => 'property2.jpg',
            'status' => 'Available',
            'prop_type' => 'Single Family',
            'is_featured' => false,
            'is_available' => true,
        ]);

        Properties::create([
            'address' => '789 Sunset Boulevard, Orlando, FL 32801',
            'slug' => '789-sunset-boulevard',
            'list_price' => 550000,
            'est_payment' => 3000,
            'arv' => 650000,
            'roi' => 18.0,
            'ltc' => 60,
            'beds' => 5,
            'bath' => 3,
            'sqft' => 3000,
            'yr_built' => 2022,
            'exterior' => 'Vinyl',
            'main_img' => 'property3.jpg',
            'status' => 'Under Construction',
            'prop_type' => 'Single Family',
            'is_featured' => true,
            'is_available' => true,
        ]);

        Team::create([
            'fullname' => 'John Smith',
            'position' => 'CEO & Founder',
            'profile_pic' => 'john.jpg'
        ]);

        Team::create([
            'fullname' => 'Sarah Johnson',
            'position' => 'Chief Operations Officer',
            'profile_pic' => 'sarah.jpg'
        ]);

        Team::create([
            'fullname' => 'Michael Brown',
            'position' => 'Head of Acquisitions',
            'profile_pic' => 'michael.jpg'
        ]);

        testimonials::create([
            'name' => 'Emily Davis',
            'subject' => 'Great Investment Experience',
            'description' => 'Mioym helped me find an amazing investment property. The process was smooth and transparent.',
            'rating' => 5
        ]);

        testimonials::create([
            'name' => 'Robert Wilson',
            'subject' => 'Professional Service',
            'description' => 'Very professional team. They guided me through every step of my property purchase.',
            'rating' => 5
        ]);

        testimonials::create([
            'name' => 'Jennifer Lee',
            'subject' => 'Highly Recommend',
            'description' => 'Excellent real estate company. They found exactly what I was looking for.',
            'rating' => 4
        ]);
    }
}
