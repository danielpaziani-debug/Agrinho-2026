<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'cabecalho.php'; 
?>

    <section class="hero">
        <h2>Semeando Educação, Colhendo Cidadania</h2>
        <p>Descubra como o projeto Agrinho transforma a realidade de milhares de alunos integrando o campo e a sala de aula.</p>
        <a href="sobre.php" class="btn">Saiba Mais</a>
    </section>

    <main class="container">
        <h2 class="secao-titulo">Nossos Pilares</h2>
        
        <div class="grid-cards">
            <div class="card">
                <div class="card-conteudo">
                    <h3>Meio Ambiente</h3>
                    <p>Práticas sustentáveis, preservação da fauna, flora e o uso consciente da água no meio rural e urbano.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-conteudo">
                    <h3>Cidadania e Saúde</h3>
                    <p>Desenvolvendo a consciência crítica dos alunos sobre alimentação saudável, ética e direitos sociais.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-conteudo">
                    <h3>Concurso Agrinho</h3>
                    <p>Espaço dedicado a premiar as melhores redações, desenhos e projetos pedagógicos das escolas parceiras.</p>
                </div>
            </div>
        </div>
    </main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Projeto Agrinho Escolar. Desenvolvido por Daniel dos Santos para fins educativos.</p>
</footer>
</body>
</html>