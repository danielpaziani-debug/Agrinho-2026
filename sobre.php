<?php 
// Ativa a exibição de erros caso falte algum arquivo
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'cabecalho.php'; 
?>

    <div class="page-header">
        <h2>Conheça a Nossa História</h2>
        <p>Entenda o impacto do Programa Agrinho na educação e no campo.</p>
    </div>

    <main class="container">
        
        <section class="bloco-sobre">
            <div class="sobre-texto">
                <h3>O que é o Programa Agrinho?</h3>
                <p>O Agrinho é o maior programa de responsabilidade social do Sistema FAEP/SENAR, criado com o objetivo de levar informações sobre cidadania, saúde, preservação ambiental e empreendedorismo para crianças e jovens das escolas públicas e privadas.</p>
                <p>Trabalhando em parceria com as secretarias de educação, o projeto desenvolve uma consciência crítica nos alunos, mostrando a importância do produtor rural e como o campo e a cidade estão diretamente interligados no nosso dia a dia.</p>
            </div>
            <div class="sobre-imagem">
                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&q=80&w=600" alt="Crianças na natureza" class="imagem-animada">
            </div>
        </section>

        <section class="bloco-sobre" style="flex-direction: row-reverse;">
            <div class="sobre-texto">
                <h3>Como Funciona na Prática?</h3>
                <p>O programa disponibiliza gratuitamente materiais pedagógicos (cartilhas e manuais) adaptados para diferentes faixas etárias. Os professores passam por treinamentos e levam os temas transversais para dentro da sala de aula de forma criativa.</p>
                <p>Ao final de cada ano letivo, o tradicional <strong>Concurso Agrinho</strong> premia os melhores trabalhos de alunos (desenhos e redações) e os melhores projetos de professores, incentivando a inovação e o aprendizado prático.</p>
            </div>
            <div class="sobre-imagem">
                <img src="https://t4.ftcdn.net/jpg/06/33/11/13/360_F_633111346_C0Y4kwsafjJTIC3odEOFO8nMckqYTObf.jpg" alt="Sala de aula" class="imagem-animada">
            </div>
        </section>

        <section class="bloco-sobre">
            <div class="sobre-texto">
                <h3>Objetivo Deste Trabalho</h3>
                <p>Este site foi desenvolvido como um projeto prático para a disciplina de Pensamento Computacional. O nosso grande objetivo foi aplicar conceitos de lógica, estruturação de dados e desenvolvimento web para dar visibilidade a uma causa tão importante quanto o Programa Agrinho.

                   Através da decomposição de problemas, do reconhecimento de padrões e do design focado no usuário, transformamos ideias 
                   sobre sustentabilidade e cidadania rural em uma plataforma digital interativa, dinâmica e acessível. Mais do que criar linhas de código, este trabalho demonstra como a tecnologia pode ser uma poderosa semente para espalhar a educação e o conhecimento.</p>
            </div>
            <div class="sobre-imagem">
                <img src="https://www.unipar.br/media/images/Colegio_Prof_Nei.max-1024x538.format-jpeg.jpegquality-80.jpg" alt="Sala de aula" class="imagem-animada">
            </div>
        </section>

        <div class="mvv-grid">
            <div class="mvv-card">
                <h4>Nossa Missão</h4>
                <p>Promover a educação de qualidade, incentivando hábitos sustentáveis, cidadania e a valorização do meio rural no ambiente escolar.</p>
            </div>
            <div class="mvv-card">
                <h4>Nossa Visão</h4>
                <p>Ser reconhecido como o principal programa de integração entre a comunidade escolar e a realidade rural sustentável do nosso estado.</p>
            </div>
            <div class="mvv-card">
                <h4>Nossos Valores</h4>
                <p>Ética, sustentabilidade, cooperação, respeito à natureza, cidadania e valorização da educação e do produtor rural.</p>
            </div>
        </div>

    </main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Projeto Agrinho Escolar. Desenvolvido por Daniel dos Santos para fins educativos.</p>
</footer>
</body>
</html>