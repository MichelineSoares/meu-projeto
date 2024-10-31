<?php 
        $itens =[
            ['href' => 'https://github.com/MichelineSoares', 'src'=> '/img/github-icon.png', 'alt' => 'GitHub Logo'],
            ['href' => 'https://www.linkedin.com/in/michelinesoares/', 'src' => '/img/linkedin-icon.png', 'alt' => 'LinkedIn Logo'],
            ['href' => 'https://www.instagram.com/miihsoarz/', 'src' => '/img/instagram-icon.png', 'alt' =>'Instagram Logo'],

        ];
?>

<section class="flex gap-x-3">
    <!-- Titulo -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Olá, meu nome é Micheline</h1>
        <p class="text-xl leading-5 mt-5">
        Falando um pouco sobre mim, sou uma desenvolvedora iniciante e estou adorando aprender PHP. Estou trabalhando no meu primeiro projeto, e, apesar dos desafios, tem sido muito gratificante. A cada nova etapa, aprendo algo importante e me sinto motivada a continuar evoluindo.
            
        </p>
        <ul class="flex gap-x-3 mt-3">
        <?php foreach ($itens as $item): ?>
            <li>
                    <a href="<?=$item ['href']?>"  target="_blank">
                     <img class="h-8 hover:animate-bounce" src="<?=$item['src'] ?>" alt="<?=$item['alt']?>" />
                 </a>
            </li>
                <?php endforeach; ?>
        </ul>
    </div>
    <!-- Foto -->
    <div class="w-1/3 flex items-center justify-center">
        <div>
            <img class="h-40 rounded-lg -mt-6 hover:animate-pulse" src="/img/mi-icon.png" alt="Foto Micheline Soares" />
        </div>
    </div>
</section>