<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio!</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-900 text-gray-200">
    <?php include('./componentes/header.php');   ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <!-- Hero -->
        <?php include('./componentes/hero.php'); ?>
        <!-- Projetos -->
        <section class="space-y-3 py-6" id="projetos">
            <h2 class="text-2xl font-bold"> Meus Projetos</h2>
            <!-- Lista de Projetos -->
            <?php include('./componentes/listadeprojetos.php'); ?>




        </section>
    </main>

    <!-- Rodapé -->
    <footer class=" mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm ">
            © Copyright <?=date('Y') ?>. Construído 🤍 por mim mesma.

        </div>
        <!-- Data -->
        <div></div>

        <!-- Links Rede Sociais -->
        <div></div>
    </footer>



</body>

</html>