<?php

use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slide = new \App\Slide();
        $slide->id = "1";
        $slide->link = "";
        $slide->image = "bg_1.jpg";
        $slide->save();

        $slide = new \App\Slide();
        $slide->id = "2";
        $slide->link = "";
        $slide->image = "bg_2.jpg";
        $slide->save();

        $slide = new \App\Slide();
        $slide->id = "3";
        $slide->link = "";
        $slide->image = "bg_3.jpg";
        $slide->save();
    }
}
