<?php 
    require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>style/style.css">
    <title>Qualificar Academy Job</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="<?php echo INCLUDE_PATH;?>imagens/logo.svg" alt="">
        </div><!--logo-->
    </div><!--header-->

    <section class="sessao-one">
        <div class="container">
            <div class="flex">
                <div class="col-one">
                    <h1>Vaga de <span>vendedor</span></h1>
                    <p>Empresa: InvestFIP | Senna Automóveis</p>
                    <div class="btn-action" data-direct="form">
                        <p>Quero me candidatar</p>
                    </div><!--btn-action-->
                </div><!--col-one-->

                <div class="col-two">
                    <div class="bg-interno"></div>
                    <div class="box one">
                        <div class="box-interno">
                            <img src="<?php echo INCLUDE_PATH;?>imagens/img-investfip.png" alt="">
                        </div><!--box-interno-->
                    </div><!--box-->

                    <div class="box two">
                    <div class="box-interno">
                            <img src="<?php echo INCLUDE_PATH;?>imagens/img-senna.png" alt="">
                        </div><!--box-interno-->
                    </div><!--box-->

                    <div class="labels">
                        <div class="label theme-white flex">
                            <div class="circle">
                                <img src="<?php echo INCLUDE_PATH;?>imagens/logotipo-white.svg" alt="">
                            </div><!--cirvle-->

                            <div class="texto">
                                <h5>Parabéns, você está convocado!</h5>
                                <p>A empresa tem interesse no seu currículo.</p>
                            </div><!--texto-->
                        </div><!--label-->

                        <div class="label flex">
                            <div class="circle">
                                <img src="<?php echo INCLUDE_PATH;?>imagens/logotipo-orange.svg" alt="">
                            </div><!--cirvle-->

                            <div class="texto">
                                <h5>Marcamos sua entrevista hoje!</h5>
                                <p>Sua entrevista está marcada para hoje.</p>
                            </div><!--texto-->
                        </div><!--label-->

                        <div class="label flex">
                            <div class="circle">
                                <img src="<?php echo INCLUDE_PATH;?>imagens/logotipo-orange.svg" alt="">
                            </div><!--cirvle-->

                            <div class="texto">
                                <h5>Parabéns, o trabalho é seu!</h5>
                                <p>Você foi selecionado para ocupar a vaga!</p>
                            </div><!--texto-->
                        </div><!--label-->
                    </div><!--labels-->

                </div><!--col-two-->
            </div><!--flex-->
        </div><!--container-->
    </section><!--sessao-one-->

    <section class="sessao-two">
        <div class="container">
            <div class="bg">
                <div class="flex content">
                        <div class="box">
                            <div class="icon">
                                <img src="<?php echo INCLUDE_PATH;?>imagens/img-box-1.svg" alt="">
                            </div><!--icon-->

                            <div class="texto">
                                <h2>Beneficios</h2>
                                <p>Plano de saude Hapvida + Passagem,
                                auxílio para filhos abaixo dos 12 anos, 
                                Plano Academia, VA em implementação</p>
                            </div><!--texto-->
                        </div><!--box-->

                        <div class="box">
                            <div class="icon">
                                <img src="<?php echo INCLUDE_PATH;?>imagens/img-box-2.svg" alt="">
                            </div><!--icon-->
                            <div class="texto">
                                <h2>Vagas disponíveis</h2>
                                <p>Restam <span>5 vagas</span> para serem ocupadas
                                no cargo de vendedor</p>
                            </div>
                        </div><!--box-->
                        <div class="box">
                            <div class="icon">
                                <img src="<?php echo INCLUDE_PATH;?>imagens/img-box-3.svg" alt="">
                            </div><!--icon-->
                            <div class="texto">
                                <h2>Regime trabalhista</h2>
                                <p>O regime de trabalho para a vaga 
                                é o de <span>Carteira Assinada - CLT</span></p>
                            </div><!--texto-->
                        </div><!--box-->
                        <div class="box">
                            <div class="icon">
                                <img src="<?php echo INCLUDE_PATH;?>imagens/img-box-4.svg" alt="">
                            </div><!--icon-->
                            <div class="texto">
                                <h2>Horários e dias</h2>
                                <p>De <span>segunda à sábado</span> do horário de
                                <span>08h às 18h</span></p>
                            </div><!--texto-->
                        </div><!--box-->
                    <h3>Salário de <span>R$ 1.550,00</span> + Comissão e bonús que podem chegar a <span>R$4.000,00 iniciais</span></h3>
                </div><!--flex-->

            </div><!--bg-->
        </div><!--container-->
    </section><!--sessao--two-->
</body>
</html>