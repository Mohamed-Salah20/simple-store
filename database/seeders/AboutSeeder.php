<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $about = new About;

        $about->title = 'Title';

        $about->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta dapibus eros, a tempor metus iaculis vitae. Morbi sagittis mauris vel dui eleifend aliquam. Suspendisse vel massa vel arcu condimentum rhoncus. Duis est mauris, elementum eu lacus eu, convallis tincidunt libero. Quisque non condimentum elit, sed porta odio. Fusce tellus est, euismod vitae pellentesque eget, commodo quis sem. Etiam fermentum purus vel aliquet volutpat. Nulla dictum, nibh quis malesuada consequat, tortor arcu convallis metus, in varius erat velit elementum lacus. Proin diam tellus, porttitor eu sollicitudin eget, lobortis viverra eros. Sed tincidunt maximus odio eu dapibus. Etiam molestie a arcu ac viverra.';

        $about->image_path = asset('my') . '/assets/images/about-us.jpg';

        $about->save();

    }
}