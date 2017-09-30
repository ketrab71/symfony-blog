<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\CategoriesHelper;

class BlogController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, CategoriesHelper $categoriesHelper)
    {
        // replace this example code with whatever you need
				$posts = array(
				  array('id' => '1','author_name' => 'Bartosz', 'author_id' => '3','title' => 'Quisquam aperiam nulla sint ipsam et.','description' => 'Dicta et sequi culpa qui doloribus. Minus aut molestias quibusdam veniam. Consequatur perspiciatis sit rem.','content' => 'In eos et doloremque. Quo ipsa est officiis aperiam laborum repudiandae fuga. Eius rerum harum et accusamus enim. Facere dolore ut aspernatur ut at aut. Amet quas debitis quia ut officiis vel.','date' => '1984-08-09', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '2','author_name' => 'Bartosz', 'author_id' => '6','title' => 'Nesciunt perspiciatis autem aliquid suscipit quis.','description' => 'Deleniti dolorum fugit sapiente nam quos. Ea illo porro omnis est eum sit nostrum cupiditate. Omnis enim temporibus odio doloremque. Perferendis doloribus sit labore fugit et labore.','content' => 'Incidunt nesciunt esse at vel voluptates unde. Sit quo asperiores porro quo aut at sed aliquid. Atque unde sit quia.','date' => '1976-12-30', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '3','author_name' => 'Bartosz', 'author_id' => '11','title' => 'Ratione consequatur dolorum voluptatum voluptatem dolor non cum.','description' => 'Nisi quas saepe sapiente nam doloribus. Minima itaque officia omnis quo aspernatur voluptas quam mollitia. Quod et doloremque officiis magnam esse blanditiis dignissimos. Dolore sint alias corporis fuga incidunt.','content' => 'Quia laboriosam nisi facilis accusamus numquam. Tempore accusantium labore ut corrupti alias. Dolor illum eaque culpa et. Omnis est magnam modi molestiae totam earum sit explicabo.','date' => '2000-10-22', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '4','author_name' => 'Bartosz', 'author_id' => '4','title' => 'Quidem et enim ut quidem.','description' => 'Odio omnis earum possimus dolorem doloribus. Rerum explicabo eligendi nisi porro sint deleniti. Magnam recusandae repudiandae et rerum qui rerum alias.','content' => 'Iste expedita adipisci quo dolorem in beatae eos. Placeat maxime sit est at in delectus sed.','date' => '1997-04-27', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '5','author_name' => 'Bartosz', 'author_id' => '11','title' => 'Aliquid voluptas similique culpa et.','description' => 'Et inventore omnis nam doloribus dolor voluptatem et. Nostrum consequatur repellat nobis temporibus. Officia animi nemo iste alias. Earum quam deleniti velit soluta et dolores illum nihil.','content' => 'A assumenda enim qui voluptatem. Nulla quia eos enim perspiciatis qui qui adipisci. Fugiat quos quis eaque itaque dolor consequatur et.','date' => '1971-12-01', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '6','author_name' => 'Bartosz', 'author_id' => '14','title' => 'Maxime perspiciatis inventore voluptas voluptas explicabo illum.','description' => 'Facilis alias tenetur ea totam a consequatur corrupti ut. Deserunt tempore nihil blanditiis dicta. Distinctio aut consequatur omnis mollitia tempora voluptate accusantium et. Et nihil voluptas mollitia nam.','content' => 'Est et dolorem repellat aliquid. Sunt repudiandae maiores molestiae voluptatum. Id labore est impedit perferendis molestiae voluptatem aliquam aperiam.','date' => '2013-03-24', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '7','author_name' => 'Bartosz', 'author_id' => '5','title' => 'Consequatur natus iste deserunt et recusandae quod nostrum.','description' => 'Nesciunt hic est dolorem ab ut. Quisquam harum rerum et illum. Consequatur repellendus sed omnis. Repudiandae harum esse provident officia culpa.','content' => 'Voluptas modi quibusdam dolor magnam ab ab. Dolores culpa recusandae qui fuga enim autem et. Et voluptatem maxime eos at tenetur quae. Et quos dolores vel unde est optio.','date' => '1992-12-15', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '8','author_name' => 'Bartosz', 'author_id' => '16','title' => 'Mollitia necessitatibus qui est nostrum est fugit.','description' => 'Facere voluptatem occaecati aut itaque assumenda labore modi non. Qui sunt voluptatem saepe ut dignissimos et. Recusandae laboriosam consequatur ex molestias placeat provident dolorem.','content' => 'Inventore illum neque soluta eligendi. Et rerum provident eaque laboriosam et. Commodi quo fuga a ut fugit ad officiis eos.','date' => '1991-12-20', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '9','author_name' => 'Bartosz', 'author_id' => '19','title' => 'Omnis itaque a sint est sunt.','description' => 'Vitae nisi rem necessitatibus dolores doloremque nihil voluptatum. Eum sed et aspernatur minima. Rerum non et veniam natus dolorum quod molestias voluptas. A unde voluptatibus delectus occaecati et eum quia. Dignissimos quia sit laboriosam omnis expedita at.','content' => 'Reiciendis ut ex consequuntur repellendus. A soluta soluta voluptatem consequatur ipsum eos magnam voluptatem. Asperiores eum est deserunt nihil odio qui.','date' => '1979-07-25', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '10','author_name' => 'Bartosz', 'author_id' => '17','title' => 'Voluptas atque odit tempore ducimus blanditiis ut quaerat.','description' => 'Labore corporis temporibus distinctio non voluptas sed deleniti non. Ut earum eius magnam ut. Dolores hic at praesentium sint.','content' => 'Deleniti ut explicabo dolor qui sit ratione. Sapiente maiores nostrum esse. Inventore vel nostrum reprehenderit ex perferendis ex. Non et adipisci nobis rem eum eum.','date' => '1994-03-04', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '11','author_name' => 'Bartosz', 'author_id' => '12','title' => 'Quia quam dolor voluptas amet sit cupiditate.','description' => 'Aliquam dolorum excepturi ea qui velit. Dignissimos vero asperiores non. Consequatur vitae fugiat quidem quo quos fugit dolorum aut. Cumque enim eos et commodi ea.','content' => 'Enim sit voluptatem et esse. Minus consequatur neque et perspiciatis ab et consequatur. Vel doloremque commodi ullam debitis velit.','date' => '1983-02-14', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '12','author_name' => 'Bartosz', 'author_id' => '15','title' => 'Eos incidunt totam consectetur rem nihil.','description' => 'Sed cupiditate a amet tempore quia placeat dolorem. Nihil qui qui quis et ea suscipit perspiciatis. Odio sed quo minus doloribus.','content' => 'Expedita facilis consectetur vel reprehenderit explicabo minus fugit. Ipsam rerum quibusdam nihil error aut aut eum. Accusantium dolor quae incidunt rerum nam aut et et.','date' => '2014-03-15', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '13','author_name' => 'Bartosz', 'author_id' => '15','title' => 'Architecto quia omnis veniam omnis quia.','description' => 'Harum facilis incidunt distinctio esse placeat totam totam. Sed ut quibusdam quam blanditiis. Aut soluta ipsum veritatis officiis repudiandae minima maiores. Qui ea nulla rerum rerum repudiandae et facere.','content' => 'Tempore natus distinctio voluptatem et est et cumque. Modi fuga aliquid distinctio nostrum reiciendis error quam. Voluptas esse eum possimus qui et consequatur.','date' => '1974-02-06', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '14','author_name' => 'Bartosz', 'author_id' => '19','title' => 'Doloremque et rerum debitis voluptatibus quod ea quo labore.','description' => 'Eius nisi eveniet modi commodi a. Sunt et totam asperiores cum. In iure tempore quia voluptatem quaerat cum itaque. Sed non animi eos similique perferendis nihil et.','content' => 'Unde dolore sapiente temporibus dolor voluptatem. Et aut officia harum distinctio rerum. Aut adipisci et illo dolor quidem velit. Id nihil recusandae consequatur et.','date' => '1995-05-02', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '15','author_name' => 'Bartosz', 'author_id' => '6','title' => 'Tempora suscipit porro perspiciatis occaecati ea voluptates.','description' => 'Hic numquam possimus accusantium fugit. Labore excepturi culpa ea id. Earum aut eius autem totam modi ut accusantium at. Debitis earum labore ut vero qui provident et. Enim modi ullam aut qui eaque.','content' => 'Exercitationem ad vitae molestiae perferendis asperiores commodi. Omnis natus aut ut quo nostrum placeat laboriosam. Ea enim natus rerum ad in mollitia eos ut.','date' => '1984-12-11', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '16','author_name' => 'Bartosz', 'author_id' => '12','title' => 'Voluptates aut ullam maxime nam soluta excepturi.','description' => 'Eum amet quis fugit illum enim. Beatae eaque aut omnis qui aliquam magnam. Voluptates aut quibusdam dicta.','content' => 'Et aspernatur vel laboriosam eligendi beatae. Earum labore rem non unde impedit suscipit. Sunt quod eaque maxime non enim sunt reiciendis. Et veniam saepe voluptatum eos sed quidem.','date' => '1980-10-05', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '17','author_name' => 'Bartosz', 'author_id' => '10','title' => 'Dicta eveniet delectus qui.','description' => 'Sed sequi incidunt sit soluta assumenda nesciunt. Praesentium corporis consequatur culpa qui consequatur maiores nesciunt. Ipsa consectetur beatae corrupti quam.','content' => 'Autem voluptatem animi non laborum vel. Unde quas maxime in expedita ea. Voluptates corporis sint voluptates possimus quia. Possimus expedita vel magni in dignissimos sunt aliquam.','date' => '1985-08-16', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '18','author_name' => 'Bartosz', 'author_id' => '15','title' => 'Ut sapiente eius ut vitae nam unde ut.','description' => 'Magnam in fuga temporibus sed cum est. Iure aut quo dignissimos. Consequatur quas rem voluptatem rerum quasi. Id autem voluptate nostrum pariatur. Consequatur eveniet enim temporibus iure laudantium.','content' => 'Eius est ut impedit possimus delectus. Sint vitae quia iste unde ea corrupti officiis. Aperiam ut ut nostrum fuga excepturi necessitatibus.','date' => '2008-03-27', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '19','author_name' => 'Bartosz', 'author_id' => '13','title' => 'Fuga soluta ex earum enim expedita qui.','description' => 'Quisquam error accusamus dolores reiciendis ex praesentium ea. Ea consequatur sed et ex aliquam enim. Error eum magni dignissimos similique fugit. Ratione iure harum aspernatur ut ratione qui quae.','content' => 'Quam doloribus suscipit maxime blanditiis sapiente. Delectus et minima qui ut cupiditate. Repudiandae autem quia ratione inventore nulla nulla at.','date' => '2006-04-03', 'images' => 'images/my/krasnal.jpg'),
				  array('id' => '20','author_name' => 'Bartosz', 'author_id' => '18','title' => 'Eaque ut sunt aspernatur quaerat eos consequatur.','description' => 'Illum laborum sed magni dolore non consequuntur qui. Sint id laudantium officiis nemo voluptatem. Nesciunt harum sunt quam. Omnis voluptas eveniet quo numquam inventore.','content' => 'Quasi et et quia. Quia voluptatem nesciunt recusandae sed dolorem modi. Quae atque perspiciatis sed at et consequatur commodi. Delectus ab nulla neque minima.','date' => '1990-11-05', 'images' => 'images/my/krasnal.jpg'),

				);

				$categories = $categoriesHelper->getCategories();
        return $this->render('blog/index.html.twig', [
            'blog_entries' => $posts,
						'categories' => $categories,
						'sitemeta' => array(
							'title' => 'Homepage blog'
						)
        ]);
    }
		/**
		 * @Route("/categories", name="categories_list")
		 */
		public function categoriesAction(CategoriesHelper $categoriesHelper)
		{

			$categories = $categoriesHelper->getCategories();
			return $this->render('blog/categories.html.twig', [
					'categories' => $categories,
					'sitemeta' => array(
						'title' => 'Categories List'
					)
			]);

		}
		/**
		 * @Route("/{slug}", name="single_blog")
		 */
		public function singleAction($slug, CategoriesHelper $categoriesHelper)
		{
			$post = array(
				'id' => '20',
				'author_name' => 'Bartosz',
				'author_id' => '18',
				'category' => 'people',
				'title' => 'Eaque ut sunt aspernatur quaerat eos consequatur.',
				'description' => 'Illum laborum sed magni dolore non consequuntur qui. Sint id laudantium officiis nemo voluptatem. Nesciunt harum sunt quam. Omnis voluptas eveniet quo numquam inventore.',
				'content' => 'Quasi et et quia. Quia voluptatem nesciunt recusandae sed dolorem modi. Quae atque perspiciatis sed at et consequatur commodi. Delectus ab nulla neque minima.',
				'date' => '1990-11-05',
				 'images' => 'images/my/krasnal.jpg'
			);
			$categories = $categoriesHelper->getCategories();
			return $this->render('blog/single.html.twig', [
					'blog_entry' => $post,
					'categories' => $categories,
					'sitemeta' => array(
						'title' => $post['title']
					)
			]);

		}

}
