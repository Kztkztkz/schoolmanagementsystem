<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $courseNames = [
            'Web Development',
            'Software Development',
            'Data Science Fundamentals',
            'Machine Learning for Beginners',
            'Introduction to Artificial Intelligence',
            'Full Stack Web Development',
            'Mobile App Development with React Native',
            'Python for Data Analysis',
            'Java Programming Basics',
            'JavaScript Fundamentals',
            'Introduction to Cloud Computing',
            'Cybersecurity Essentials',
            'Game Development with Unity',
            'Introduction to UI/UX Design',
            'Digital Marketing Strategies',
            'Blockchain Fundamentals',
            'Networking Fundamentals',
            'Introduction to Big Data',
            'Graphic Design for Beginners',
            'iOS App Development with Swift',
        ];
        return [
            'name' =>$this->faker->unique()->randomElement($courseNames),
        ];
    }
}
