<?php
  // ## Snack 5
  // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

  $paragrafoIniziale = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorum, voluptatibus laboriosam amet quod suscipit at tenetur libero veniam accusamus rem quos nulla facilis voluptate modi fugit consequuntur commodi dicta adipisci ratione voluptates cupiditate eius. Sed provident qui explicabo esse delectus nostrum consequatur accusantium veritatis error hic eveniet, ea, quo ullam recusandae expedita dignissimos. Quos, animi facilis porro sunt temporibus quo numquam suscipit unde, eius, molestias autem reiciendis? Deserunt architecto labore amet distinctio. Culpa nemo id officiis, labore architecto officia, ut eaque obcaecati minus perspiciatis eveniet nam vero, quaerat nostrum asperiores error deserunt! Molestias quae cupiditate quam culpa accusamus tempore aperiam modi recusandae ipsam saepe ullam neque, doloremque aliquid aut accusantium labore provident a beatae iure necessitatibus harum adipisci. Enim ullam id, et harum eius voluptate consequatur a corrupti! Mollitia fugiat dignissimos omnis officia quae error nobis ea, fuga, tenetur nostrum possimus cum animi modi quaerat corrupti deserunt voluptatibus molestias dolorem placeat earum exercitationem iste magnam eius? Exercitationem sapiente voluptatum harum suscipit amet itaque dolorum! Ut totam porro iusto, nulla quis nesciunt voluptas id fugit illum ratione inventore ad nam quaerat! Laudantium ipsa sint, voluptatum impedit aut deleniti fugiat nobis. Rem voluptate maxime repellendus nesciunt laborum consequuntur cum, natus provident obcaecati nemo aperiam sint earum distinctio soluta sapiente? Aut culpa aliquid adipisci accusamus molestias ut vel, nesciunt ipsa, enim omnis, magni delectus. Maxime dolores laborum minima doloribus eveniet. At quo, numquam assumenda minus suscipit corporis nihil soluta porro, ipsam in, cum maiores ratione. Beatae, hic. Eum tempora error ea placeat.';

  // str_contains($string, 'lazy')
  $paragrafi = explode('.', $paragrafoIniziale, -1);
  // var_dump($paragrafi);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2>Pragrafo iniziale:</h2>

<p><?php echo $paragrafoIniziale ?></p>

<h2>Paragrafi divisi:</h2>

<ul>
  <?php foreach ($paragrafi as $paragrafo) {?>
  <li><?php echo $paragrafo ?></li>
  <?php } ?>
</ul>


  
</body>
</html>