<?php


class Products
{


	function get_products_array()
	{
		$products_array=array(
			// Product 1
			array(
				"name"=>"Baignoire balnéo",
				"price"=>"1049€50",
				"description"=>"La balnéothérapie à domicile? C’est maintenant possible gràce à CONCEPT-USINE! Optez pour cet espace de bien être, à la fois esthétique, pratique et performant. Les bienfaits de la balnéothérapie : L’objectif de la balnéothérapie ? Soigner son corps tout en apaisant l’esprit… “Sanitus per aquam”: la santé, le bien-être par l’eau. Les romains l’avaient déjà compris.",
				"img_link"=>"http://cdn.monechelle.fr/livadia-baignoire-balneo-ozonateur-chromotherapie-radio-fm-5-jets-de-massage-P-172389_1.jpg",
				"mano_link"=>"http://www.monechelle.fr/baignoire-balneo/livadia-baignoire-balneo-ozonateur-chromotherapie-radio-fm-5-jets-de-massage-172389"



				),
			// Product 2
			array(
				"name"=>"Perceuse visseuse à percussion Li-Ion 18 V",
				"price"=>"285€92",
				"description"=>"Plus grande autonomie grace aux batteries en 1,5 Ah. Perceuse visseuse à percussion 2 vitesses, compacte et ultra légère. Livré en coffret aluminium avec 67 accessoires . Batteries 18V Li-Ion puissantes, chargées en 15 minutes seulement. Mandrin auto-serrant 13 mm mono bague. Réglage précis du couple en 16 positions + position perçage. Meilleur contrôle grâce au frein électrique, la machine s'arrête au relachement de la gâchette. ",
				"img_link"=>"http://cdn.monechelle.fr/perceuse-visseuse-a-percussion-li-ion-18-v-15-ah-13-mm-makita-dhp453ryx3-P-28067_1.jpg",
				"mano_link"=>"http://www.monechelle.fr/perceuse/perceuse-visseuse-a-percussion-makita-dhp453ryx3-kit-67-accessoires-28067"


			),
			// Product 3
			array(
				"name"=>"Nain de jardin jardinier",
				"price"=>"35€",
				"description"=>"- En PVC - Peint à la main - En PVC - Peint à la main - - Nain de jardin jardinier - En PVC - Peint à la main - Peinture sans danger pour les enfants - Peinture inaltérable aux intempéries et résistant aux gels - Dimension : - Hauteur : 31cm",
				"img_link"=>"http://cdn.monechelle.fr/nain-de-jardin-jardinier-P-186498_1.jpg",
				"mano_link"=>"http://www.monechelle.fr/nain-de-jardin/nain-de-jardin-jardinier-186498"


			) 
			// TO ADD THE PRODUCT UNCOMMENT THE FOLOWING LINES BY ERASING "/*" on line 43 - AND "*/" on line 56
			/*,
			array(
				"name"=>"Toile Imprimée Tattoo 40X40",
				"price"=>"15€99",
				"description"=>"Toile Imprimée Tattoo 40X40. Vous Permettra De Compléter La Décoration D'une Pièce En Un Clin D'Oeil.",
				"img_link"=>"http://cdn.monechelle.fr/toile-imprimee-tattoo-40x40-P-321335_1.jpg",
				"mano_link"=>"http://www.monechelle.fr/catalogue/toile-tableau-image-decorative-dinterieur/toile-imprimee-tattoo-40x40-321335"


			) 



			*/
					// ADD YOUR OWN PRODUCTS HERE
					 


		);
		return $products_array;




	}





}