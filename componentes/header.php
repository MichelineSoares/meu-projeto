<?php 
        $itens =[
            ['href' => '#projetos', 'texto' => 'Projetos'],
            ['href' => 'https://github.com/MichelineSoares', 'texto' => 'Github'],
            ['href' => 'https://www.linkedin.com/in/michelinesoares/', 'texto' => 'LinkedIn'],

        ];
?>
<header class=" mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between ">
    <!-- Logo -->
    <div class="font-bold text-xl text-cyan-600 ">
        🍀 Meu Portfólio...!
    </div>

    <!-- Links -->
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-300">
            <?php foreach ($itens as $item): ?>
            <li>
                    <a href="<?=$item ['href']?>" class="hover:underline text-emerald-400">
                    <?=$item['texto']?>
                 </a>
            </li>
                <?php endforeach; ?>
        </ul>
    </div>

</header>