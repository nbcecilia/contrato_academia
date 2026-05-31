<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon"  href="css/estilo.css"/>
        <link rel="stylesheet"  href="css/estilo.css"/>
        <title>Cadastro Confirmado</title>
    </head>

    <body>

        <?php
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : 0;
        $data = isset($_POST["data"]) ? $_POST["data"] : 0;
        $responsavel = isset($_POST["responsavel"]) ? $_POST["responsavel"] : 0;
        $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : 0;
        $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : 0;
        $email = isset($_POST["email"]) ? $_POST["email"] : 0;
        $tel = isset($_POST["tel"]) ? $_POST["tel"] : 0;
        $endereco= isset($_POST["endereco"]) ? $_POST["endereco"] : 0;
        $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : 0;
        $luta = isset($_POST["luta"]) ? $_POST["luta"] : 0;
        $plano = isset($_POST["plano"]) ? $_POST["plano"] : 0;
        $infoMedica = isset($_POST["infoMedica"]) ? $_POST["infoMedica"] : 0;
        $especial = isset($_POST["especial"]) ? $_POST["especial"] : 0;
        ?>

        <div>
            <h2 class="h2" align="center">Contrato de Prestação de Serviços de Aulas de Artes Marciais</h2><br>

            <table align="center">
                <td><img src="img/logo-min.jpg" alt="logo"/></td>
            </table>

            <hr width="90%" />

            <p>Dados Contratante:</p>
            <p>Nome: <font><?php echo $nome ?></font></p>  
            <p>Sexo:<font><?php echo $sexo ?></font></p>
            <p>Nome do Responsável: <font><?php echo $responsavel ?></font></p>
            <p>Data de nascimento: <font><?php echo $data ?></font></p>
            <p>CPF: <font><?php echo $cpf ?></font> 
            <p>E-mail: <font><?php echo $email ?></font><br>
            
            <hr width="90%" />

            <p>Modalidade e frequência:</p>
            <p>Modalidade:<font><?php echo $luta?></font></p>
            <p>Frequência:<font><?php echo $plano?></font></p>

            <hr width="90%" />

            <p>Endereço:<font><?php echo $endereco ?></font></p>
            <p>Cidade:<font><?php echo $cidade?></font></p>
            <p>Telefone: <font><?php echo $tel ?></font></p>


            <hr width="90%" />

            <p>Há alguma informação médica relacionada ao estudante, que você gostaria que a escola estivesse ciente? <font><?php echo $infoMedica?></font></p>
            <p>O aluno necessita de alguma adaptação especial? <font><?php echo $especial?></font></p>

            <hr width="90%" />

            <p>Dados Contratado:</p>
            <p>Contratado: A TOKKA – Escola de Lutas  CNPJ: 66.790.246/0001-12</p>
            <p>Endereço: QNM 08 Conjunto B Lote 34</p>
            <p>Telefone: (61)998693504</p>
            <p>Instrutor responsável: Klevisson Araújo
        
            <hr width="90%" />

            <p>As partes acima identificadas têm, entre si, justo e acertado o presente contrato de prestação de serviços de aulas de artes
            marciais, que se regerá pelas cláusulas e condições a seguir:</p>
            <p>CLÁUSULA 1 — DO OBJETO</p>
            <p>1.1 O presente contrato tem como objeto a prestação de serviços de aulas de artes marciais na modalidade contratada, observada a frequência escolhida pelo(a) CONTRATANTE, em dias e horários previamente disponibilizados pelo CONTRATADO.</p>
            <p>CLÁUSULA 2 — DO VALOR E FORMA DE PAGAMENTO</p>
            <p>2.1 O CONTRATANTE pagará ao CONTRATADO o valor correspondente ao plano selecionado, conforme indicado neste instrumento, a serem pagos até o dia 10 (dez) de cada
            mês, via dinheiro, pix ou transferência bancária.</p>
            <p>2.2 O inadimplemento poderá acarretar a suspensão da participação do CONTRATANTE nas aulas até a regularização dos
            valores pendentes.</p>
            <p>CLÁUSULA 3 — DAS RESPONSABILIDADES</p>
            <p>3.1 O CONTRATADO compromete-se a ministrar as aulas de acordo com as técnicas próprias da modalidade, observando
            as normas de segurança e zelando pelo adequado estado de conservação dos equipamentos e instalações.</p>
            <p>3.2 O CONTRATANTE compromete-se a respeitar as normas internas, regras de vestimenta, higiene, segurança e conduta
            estabelecidas pela academia.</p>
            <p>3.3 O CONTRATANTE declara estar apto à prática de atividades físicas e ciente de que a prática de artes marciais envolve
            esforço físico e riscos inerentes, responsabilizando-se pelas informações de saúde prestadas.</p>
            <p>3.4 O CONTRATANTE assume responsabilidade por eventuais problemas de saúde ou lesões decorrentes da prática das
            atividades, isentando o CONTRATADO de responsabilidade nos casos de imprudência, descumprimento das orientações
            recebidas ou existência de condições médicas não informadas previamente.</p>
            <p>3.5 Caso o CONTRATANTE seja o responsável legal por menor de idade, declara, para todos os fins de direito, que assume,
            em nome do menor, integral responsabilidade pelos riscos decorrentes da prática das atividades contratadas, estendendo-se a
            isenção de responsabilidade aqui prevista ao menor sob sua guarda.</p>
            <p>CLÁUSULA 4 — DAS FALTAS E REPOSIÇÕES</p>
            <p>4.1 O não comparecimento do CONTRATANTE às aulas não gera direito à reposição, desconto, compensação ou reembolso
            de valores.</p>
            <p>CLÁUSULA 5 — DA DURAÇÃO DO CONTRATO </p>
            <p>5.1 O presente contrato terá duração mínima de 3 (três) meses, contados a partir da data de sua assinatura.
            <p>CLÁUSULA 6 — DA RESCISÃO </p>
            <p>O presente contrato poderá ser rescindido: </p>
            <p>6.1 Por qualquer das partes, mediante aviso prévio de 30 (trinta) dias. </p>
            <p>6.2 Em caso de inadimplemento ou descumprimento de cláusulas contratuais. </p>
            <p>6.3 O CONTRATADO poderá rescindir imediatamente o presente contrato em caso de conduta agressiva, desrespeito às
            normas internas, comportamento inadequado ou atitudes que coloquem em risco os demais alunos, professores ou
            colaboradores. </p>
            <p>6.4 O CONTRATADO não está obrigado à devolução dos valores pagos. </p>
            <p>CLÁUSULA 7 — DO USO DE IMAGEM </p>
            <p>7.1 O CONTRATANTE ou o RESPONSÁVEL LEGAL (no caso de aluno menor de 18 anos) autoriza, de forma gratuita e
            por prazo indeterminado, o uso de sua imagem e/ou do menor, capturados em fotos e vídeos durante as atividades da TOKKA
            – Escola de Lutas. </p>
            <p>7.2 A autorização é concedida para fins de divulgação e publicidade da academia, em todos os meios de comunicação, digitais
            ou impressos, incluindo redes sociais, sem que disso resulte qualquer obrigação de indenização ou compensação financeira. </p>
            <p>CLÁUSULA 8 — DAS DISPOSIÇÕES FINAIS </p>
            <p>8.1 Este contrato é firmado em duas vias de igual teor e forma, assinadas pelas partes para que produza seus efeitos legais. </p>

            <p>&nbsp;</p>
            <p class="p2" align="center">
                _________________________________________________________</p>
            <p class="p2" align="center">ASSINATURA CONTRATANTE</p>
            <p class="p2" align="center"><br><br><br>
                _________________________________________________________</p>
            <p class="p2" align="center">ASSINATURA CONTRATADO</p>
            <p>&nbsp;</p>
            <form>
                <input type="button" value="IMPRIMIR" onClick="window.print()"/>
            </form>
        </div>
    </body>
</html>