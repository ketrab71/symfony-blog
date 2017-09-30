<?php
// src/AppBundle/Service/CategoriesHelper.php
namespace AppBundle\Service;

class CategoriesHelper
{
    public function getCategories()
    {

        return array(
					array(
						'id' => '1',
						'author_id' => '18',
						'title' => 'Pets',
						'description' => 'Illum laborum sed magni dolore non consequuntur qui. Sint id laudantium officiis nemo voluptatem. Nesciunt harum sunt quam. Omnis voluptas eveniet quo numquam inventore.',
						'images' => 'images/my/krasnal.jpg'
					),
					array(
						'id' => '2',
						'author_id' => '18',
						'title' => 'Cars',
						'description' => 'Illum laborum sed magni dolore non consequuntur qui. Sint id laudantium officiis nemo voluptatem. Nesciunt harum sunt quam. Omnis voluptas eveniet quo numquam inventore.',
						'images' => 'images/my/krasnal.jpg'
					),
					array(
						'id' => '3',
						'author_id' => '18',
						'title' => 'People',
						'description' => 'Illum laborum sed magni dolore non consequuntur qui. Sint id laudantium officiis nemo voluptatem. Nesciunt harum sunt quam. Omnis voluptas eveniet quo numquam inventore.',
						'images' => 'images/my/krasnal.jpg'
					)
				);
    }
}
