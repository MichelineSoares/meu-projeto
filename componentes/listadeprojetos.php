<?php 
 $projetos= [
    [
        "titulo" => "Meu Portfólio", //titulo
        "finalizado" => false,// finalizado
        "data" => "2024",// data
        "descricao" => "Meu Primeiro Portfólio. ",// descricao
        "stack" => ["PHP", "HTML", "CSS", "JS"],
         "img" => "/img/projeto.png"
    ],
    [
        "titulo" => "Minha Lista de Tarefas", 
        "finalizado" => true,
        "data" => "2024",
        "descricao" => "Minha Primeira Lista de Tarefas.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
         "img" => "/img/lista.png"
    ],
    [
        "titulo" => "Minha Bibliotecas de Livros", 
        "finalizado" => true,
        "data" => "2024",
        "descricao" => "Lista de Livros . ",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
         "img" => "/img/livros.png"
    ],
    [
        "titulo" => "Segundo Projeto", 
        "finalizado" => false,
        "data" => "2025",
        "descricao" => "Projeto Secreto em Andamento. ",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "/img/secreto.png"
    ],
    
];

?>
<?php foreach ($projetos as $projeto): ?>
<div class="bg-slate-800 rounded-lg p-3  flex  items-center space-x-3">
    <div class="w-1/5 flex items-center justify-middle">
        <img src= "<?=$projeto['img']?>" class="h-42 rounded-md shadow-xl shadow-slate-900"  />
    </div>
    <div class="w-4/5 space-y-3">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl">
                <?php if($projeto['finalizado']): ?>✅<?php endif; ?>
                <?=$projeto['titulo']?> 
                <?php if($projeto['finalizado']): ?> <span class="text-xs text-gray-400 opacity-50 italic">(Finalizado em <?=$projeto['data'] ?>)</span>
                    <?php else: ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(em desenvolvimento)</span>
                    <?php endif; ?>
                   
                
            </h3>
            <div class="space-x-1">
            <?php 
                     $colors = ['sky', 'fuchsia', 'emerald', 'orange', 'amber','teal'];
                    foreach ($projeto['stack'] as $posicao => $linguagens):
             ?>
                <span class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1  font-semibold text-xs ">
                <?=$linguagens?> 
                </span>
                <?php endforeach; ?>
            </div>
        </div>
        <p class="leading-6">
                 <?=$projeto['descricao']?> 
        </p>
    </div>
</div>
            <?php endforeach; ?>