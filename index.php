<?php include("includes/header.php"); ?>

<div id="topo">

    <div class="container">
        <div class="row justify-content-around">

            <div class="col-lg-6" id="oferta-destaque">
                <h1 class="oferta-titulo">TAKE UP! 4 portas</h1>
                <p>Parcelas a partir de</p>
                <h2 class="oferta-preco">R$ <span>479,</span> 63</h2>
                <h5 class="oferta-obs">* foto ilustrativa consulte a versão e condições.</h5>
                <img src="/landing-page-click-cons/src/img/take-up.png" alt="TAKE UP! 4 portas" title="TAKE UP! 4 portas" class="oferta-img" />
            </div>
            <div class="col-lg-4">
                <div id="simulacao">
                    <p>Solicite uma </p>
                    <h3>Simulação Agora</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>

                    <form class="mt-4">
                        <div class="form-group">
                            <label for="inputNome" class="sr-only">Nome</label>
                            <input type="text" class="form-control" id="inputNome"  placeholder="Nome" required />                        
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail"  placeholder="E-mail" required />                        
                        </div>
                        <div class="form-group">
                            <label for="inputTelefone" class="sr-only">Whatsapp</label>
                            <input type="phone" class="form-control" id="inputTelefone"  placeholder="Whatsapp" required />                        
                        </div>
                        <div class="form-group">
                            <label for="inputValorCredito">Valor do Crédito: <strong>R$ 400.00,00</strong></label>
                            <input type="range" class="form-control-range" id="inputValorCredito">
                        </div>
                        <label for="inputContato">Prefiro ser contatado via:</label>
                        <div class="form-group">                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="telefone" value="Telefone" />
                                <label class="form-check-label" for="telefone">Telefone</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="whatsapp" value="Whatsapp" />
                                <label class="form-check-label" for="whatsapp">Whatsapp</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="email" value="Email" />
                                <label class="form-check-label" for="email">E-mail</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-verde btn-block">Quero receber agora</button>
                        </form>
                </div>
            </div>

        </div>        
        <!-- /.row -->

        <div class="row mt-4">
            <div class="col-lg-8">
                <h2 class="titulo-secao">Veja o Comparativo de <br/><span class="txt-destaque">Financiamento</span> x <span class="txt-destaque">Consórcio</span></h2>
                
                <div class="table-responsive-lg">
                    <table class="table table-sm my-5" id="topo-tabela">
                        <thead>
                            <tr class="bg-azul">
                                <th scope="col"></th>
                                <th scope="col">Valor do Crédito</th>
                                <th scope="col">Valor do Imóvel</th>
                                <th scope="col">Valor Total</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Financiamento</th>
                                <td>R$ 200.000,00</td>
                                <td>204 x R$ 2.588,14</td>
                                <td>R$ 527.980,56</td>
                                <td class="bg-danger">R$ 327.980,56</td>
                            </tr>
                            <tr class="mb-5">
                                <th scope="row">Consórcio</th>
                                <td>R$ 200.000,00</td>
                                <td>200 x R$ 1.269,09</td>
                                <td>R$ 253.818,00</td>
                                <td class="bg-verde">R$ 53.818,00</td>
                            </tr>
                            <tr>
                                <th scope="row">Financiamento</th>
                                <td>R$ 500.000,00</td>
                                <td>204 x R$ 2.588,14</td>
                                <td>R$ 527.980,56</td>
                                <td class="bg-danger">R$ 327.980,56</td>
                            </tr>
                            <tr>
                                <th scope="row">Consórcio</th>
                                <td>R$ 500.000,00</td>
                                <td>200 x R$ 1.269,09</td>
                                <td>R$ 253.818,00</td>
                                <td class="bg-verde">R$ 53.818,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="titulo-secao"><h2 class="titulo-secao">Veja o Comparativo de <br/><span class="txt-destaque">24, 36, 48, 72</span> e <span>80 meses</span> com <br/><span class="txt-destaque">Taxas especiais</span> para você fazer o seu consórcio.</h2>
            </div>
        </div>

    </div>
    <!-- /.container -->



</div>



<div id="planos">
    <div class="container">
        <div class="row justify-content-around">
            <section class="col-md-3">
                <div class="planos-icone">
                    <img src="/landing-page-click-cons/src/img/icone-creditos.jpg" alt="Créditos" title="Créditos" />                    
                </div>
                <h3 class="text-center">Créditos de 21 mil até 114 mil.</h3>
            </section>
            <section class="col-md-3">
                <div class="planos-icone">
                    <img src="/landing-page-click-cons/src/img/icone-planos.jpg" alt="Planos" title="Planos" />                    
                </div>
                <h3 class="text-center">Planos com até 80 meses para pagar.</h3>
            </section>
            <section class="col-md-3">
                <div class="planos-icone">
                    <img src="/landing-page-click-cons/src/img/icone-parcelas.jpg" alt="Parcelas" title="Parcelas" />                    
                </div>
                <h3 class="text-center">Parcelas mensais que cabem no seu bolso. A partir de R$ 381,00 mensais.</h3>
            </section>
        </div>
    </div>
</div>

<div id="marca-consorcio" class="container">
    <div class="row">
        <section class="col-md-6">
            <h2 class="titulo-secao"><span class="txt-destaque d-block">Experiência</span> da marca</h2>
            <p>Somos os únicos a contar com a garantia da marca <strong>Volkswagen</strong> e da marca <strong>Ducati</strong>.</p>
            <p><strong>Mais de 35 anos de tradição e 500 mil veículos entregues!</strong> O Consórcio Nacional Volkswagen é uma das maiores administradoras de consórcios do país e líder de mercado entre as administradoras ligadas a montadoras em número de clientes ativos, segundo o Banco Central do Brasil.</p>
        </section>
        <section class="col-md-6 mt-md-0 mt-5">
            <h2 class="titulo-secao"><span class="txt-destaque d-block">como funciona</span> o Consórcio </h2>
            <p>O Consórcio é uma forma de se adquirir um bem, fazer um investimento ou de proporcionar a você a programação da compra do sonho de consumo, com menor gasto, se comparado à maioria dos financiamentos.</p>
            <p>É similar a um autofinanciamento, em que pessoas com o objetivo de adquirir um bem similar se juntam em um grupo e realizam pagamentos mensais para geração de fundo para compra do bem.</p>
        </section>
    </div>
</div>

<main id="modelos">
    <div class="container">
        <section class="row">
            <div class="col">
                <h2 class="titulo-secao">Confira os <span class="txt-destaque">Modelos de carros</span></h2>
            </div>
        </section>

        <section class="row modelos-container">

            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo 1.0">
                    <img src="/landing-page-click-cons/src/img/polo-1.0.jpg" alt="Polo 1.0" title="Polo 1.0" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo 1.0</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 594,35</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 50.670,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo MSI 1.6">
                    <img src="/landing-page-click-cons/src/img/polo-msi-1.6.jpg" alt="Polo MSI 1.6" title="Polo MSI 1.6" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo MSI 1.6</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 670,83</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 57.190,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>        
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo Highline 200 TSI">
                    <img src="/landing-page-click-cons/src/img/polo-highline-200-tsi.jpg" alt="Polo Highline 200 TSI" title="Polo Highline 200 TSI" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo Highline 200 TSI</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 859,21</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 73.250,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Amarok Cabine Simples">
                    <img src="/landing-page-click-cons/src/img/amarok-cabine-simples.jpg" alt="Amarok Cabine Simples" title="Amarok Cabine Simples" class="img-fluid" />
                    <h3 class="modelos-descricao">Amarok Cabine Simples</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 594,35</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 50.670,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>

        </section>

        <section class="row modelos-container">

            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo 1.0">
                    <img src="/landing-page-click-cons/src/img/polo-1.0.jpg" alt="Polo 1.0" title="Polo 1.0" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo 1.0</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 594,35</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 50.670,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo MSI 1.6">
                    <img src="/landing-page-click-cons/src/img/polo-msi-1.6.jpg" alt="Polo MSI 1.6" title="Polo MSI 1.6" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo MSI 1.6</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 670,83</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 57.190,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>        
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo Highline 200 TSI">
                    <img src="/landing-page-click-cons/src/img/polo-highline-200-tsi.jpg" alt="Polo Highline 200 TSI" title="Polo Highline 200 TSI" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo Highline 200 TSI</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 859,21</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 73.250,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Amarok Cabine Simples">
                    <img src="/landing-page-click-cons/src/img/amarok-cabine-simples.jpg" alt="Amarok Cabine Simples" title="Amarok Cabine Simples" class="img-fluid" />
                    <h3 class="modelos-descricao">Amarok Cabine Simples</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 594,35</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 50.670,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>

        </section>

        <section class="row modelos-container">

            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo 1.0">
                    <img src="/landing-page-click-cons/src/img/polo-1.0.jpg" alt="Polo 1.0" title="Polo 1.0" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo 1.0</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 594,35</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 50.670,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo MSI 1.6">
                    <img src="/landing-page-click-cons/src/img/polo-msi-1.6.jpg" alt="Polo MSI 1.6" title="Polo MSI 1.6" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo MSI 1.6</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 670,83</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 57.190,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>        
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo Highline 200 TSI">
                    <img src="/landing-page-click-cons/src/img/polo-highline-200-tsi.jpg" alt="Polo Highline 200 TSI" title="Polo Highline 200 TSI" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo Highline 200 TSI</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 859,21</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 73.250,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Amarok Cabine Simples">
                    <img src="/landing-page-click-cons/src/img/amarok-cabine-simples.jpg" alt="Amarok Cabine Simples" title="Amarok Cabine Simples" class="img-fluid" />
                    <h3 class="modelos-descricao">Amarok Cabine Simples</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 594,35</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 50.670,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>

        </section>

        <section class="row modelos-container">

            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo 1.0">
                    <img src="/landing-page-click-cons/src/img/polo-1.0.jpg" alt="Polo 1.0" title="Polo 1.0" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo 1.0</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 594,35</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 50.670,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo MSI 1.6">
                    <img src="/landing-page-click-cons/src/img/polo-msi-1.6.jpg" alt="Polo MSI 1.6" title="Polo MSI 1.6" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo MSI 1.6</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 670,83</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 57.190,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>        
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Polo Highline 200 TSI">
                    <img src="/landing-page-click-cons/src/img/polo-highline-200-tsi.jpg" alt="Polo Highline 200 TSI" title="Polo Highline 200 TSI" class="img-fluid" />
                    <h3 class="modelos-descricao">Polo Highline 200 TSI</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 859,21</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 73.250,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Amarok Cabine Simples">
                    <img src="/landing-page-click-cons/src/img/amarok-cabine-simples.jpg" alt="Amarok Cabine Simples" title="Amarok Cabine Simples" class="img-fluid" />
                    <h3 class="modelos-descricao">Amarok Cabine Simples</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 594,35</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 50.670,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>

        </section>

        <section class="row">
            <div class="col">
                <h2 class="titulo-secao">Confira os <span class="txt-destaque">Modelos de motos</span></h2>
            </div>
        </section>

        <section class="row modelos-container">

            <article class="col-lg-3 col-md-6">
                <a href="#" title="Scrambler">
                    <img src="/landing-page-click-cons/src/img/scrambler.jpg" alt="Scrambler" title="Scrambler" class="img-fluid" />
                    <h3 class="modelos-descricao">Scrambler</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 703,67</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 40.900,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Scrambler">
                    <img src="/landing-page-click-cons/src/img/scrambler.jpg" alt="Scrambler" title="Scrambler" class="img-fluid" />
                    <h3 class="modelos-descricao">Scrambler</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 703,67</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 40.900,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Scrambler">
                    <img src="/landing-page-click-cons/src/img/scrambler.jpg" alt="Scrambler" title="Scrambler" class="img-fluid" />
                    <h3 class="modelos-descricao">Scrambler</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 703,67</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 40.900,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>
            <article class="col-lg-3 col-md-6">
                <a href="#" title="Scrambler">
                    <img src="/landing-page-click-cons/src/img/scrambler.jpg" alt="Scrambler" title="Scrambler" class="img-fluid" />
                    <h3 class="modelos-descricao">Scrambler</h3>
                    <p>Parcelas a partir de:</p>
                    <span class="preco">R$ 703,67</span>
                    <p>Crédito no valor de:</p>
                    <strong class="text-cinza">R$ 40.900,00</strong>
                </a>
                <a href="#" class="btn btn-verde mt-5">Quero uma proposta</a>
            </article>

        </section>
    </div>

</main>

<div id="call-to-action">
    <div class="container">
        <div class="row">
            <section class="col-lg-10">
                <h2 class="titulo-secao mb-4">Faça agora uma <span class="txt-destaque d-md-inline d-block">Proposta de Adesão</span></h2>

                <form class="form-inline">
                    <label class="sr-only" for="inputNome">Nome</label>
                    <input type="text" class="form-control mb-2 mr-md-2" id="inputNome" placeholder="Nome" required/>
                    
                    <label class="sr-only" for="inputWhatsapp">Whatsapp</label>
                    <input type="phone" class="form-control mb-2 mr-md-2" id="inputWhatsapp" placeholder="Whatsapp" required/>
                    
                    <label class="sr-only" for="inputEmail">E-mail</label>
                    <input type="email" class="form-control mb-2 mr-md-2" id="inputEmail" placeholder="E-mail" required/>

                    <button type="submit" class="btn btn-azul-escuro mb-2"><i class="fas fa-paper-plane text-verde"></i> Enviar</button>
                </form>
                <img src="/landing-page-click-cons/src/img/persona-call-to-action.png" alt="Especialista Click Consórcio" class="call-img" />
            </section>
        </div>
    </div>
</div>

<div id="contato" class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="titulo-secao">Entre em <span class="txt-destaque d-block">contato</span></h2>
            <p>Disponibilizamos canais exclusivos para atendimento de nossos clientes. Preencha o formulário, ou se preferir utilize outro canal de contato abaixo.</p>

            <div class="row mt-5 no-gutters contato-container">
                <div class="col-md-6">
                    <h4 class="contato-chamada">Tem alguma dúvida? <span class="txt-destaque d-block">Entre em Contato</span></h4>
                    <h5 class="contato-numeros"><i class="fas text-verde fa-phone-volume"></i> 11 2114.0015</h5>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <h4 class="contato-chamada">Envie um <span class="txt-destaque d-block">Whatsapp</span></h4>
                    <h5 class="contato-numeros"><i class="fab text-verde fa-whatsapp"></i> 11 93800.9001</h5>                    
                </div>
            </div>

            <form>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Nome" required />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="inputEmail">E-mail</label>
                        <input type="text" class="form-control" id="inputEmail" placeholder="E-mail" required />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="inputTelefone">Telefone</label>
                        <input type="phone" class="form-control" id="inputTelefone" placeholder="Telefone" required />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="inputAssunto">Assunto</label>
                        <select id="inputState" class="form-control" required>
                            <option selected>-- Selecione</option>
                            <option>Consórcio</option>
                            <option>Financiamento</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="inputMensagem">Assunto</label>
                        <textarea class="form-control" id="inputMensagem" rows="4" required></textarea>
                    </div>
                    
                </div>
                <button class="btn btn-azul-escuro float-right"><i class="fas fa-paper-plane text-verde"></i> Enviar</button>
            </form>
        </div>
        <div class="col d-none d-md-block">
            <img src="/landing-page-click-cons/src/img/persona-contato.png" alt="Especialista Click Consórcio" class="contato-img" />
        </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>