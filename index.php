<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro - Termo de Adesão</title>

    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <div>
            <h2>PRESTAÇÃO DE SERVIÇOS DE AULAS DE ARTES MARCIAIS</h2>
    
                <td><img src="img/logo-min.jpg" alt="logo"></td><br>

            <h3>Caros Alunos e/ou Responsáveis,</h3>

<p>Bem-vindo(a) à A Tokka Escola de Lutas. Por favor, utilize este formulário para realizar sua adesão às aulas oferecidas por nossa equipe.</p>
<p>Precisamos de informações completas e corretas do(a) aluno(a) para garantir um atendimento adequado, segurança durante os treinamentos e organização das turmas. 
Portanto, solicitamos que todos os campos sejam preenchidos com atenção.</p>
<p>Os termos de adesão e inscrições são analisados em até 48 horas. 
Após a confirmação do cadastro, você receberá uma mensagem ou e-mail com as informações sobre o início das aulas, horários e demais orientações importantes.
</p> <br><br>

                
        <form class="marg" action="cadastroconfirmado.php" method="POST" target="_blank">
        <h2 class="h2">TERMO DE ADESÃO</h2><br>

        <h3>Dados do Contratante</h3><br>
        <label for="nome">Nome do Aluno:</label>
        <input class="preencher" type="text" id="nome" name="nome" minlength="5" maxlength="30" size= "60" required placeholder="Digite o nome completo"> <br><br>

        <label for="">Data de nascimento: </label>
        <input class="preencher" id="date" type="date" name="data" size="8"> <br> <br>
        
        <label for="responsavel">Nome do Responsável(se necessário):</label>
        <input  class="preencher" type="text" id="responsavel" name="responsavel" minlength="5" maxlength="30" size= "55" placeholder="Digite seu nome completo"> <br> <br>

        <label for="cpf">CPF:</label>
        <input class="preencher" type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
        
        <label for="sexo">Sexo:</label> 
                    <input type="radio" name="sexo" value="masculino" > Masculino
                    <input type="radio" name="sexo" value="feminino" > Feminino
                    <input type="radio" name="sexo" value="não informado" > Não informado <br><br>
        
        <label for="email">E-mail:</label>
        <input class="preencher" type="email" id="email" name="email"  autocomplete="email" required placeholder="seuemail@exemplo.com">

        <label for="itel">Telefone:</label>
        <input  class="preencher" type="tel" name="tel" id="itel" autocomplete="tel" pattern="^\(\d{2}\)\d{4,5}-\d{4}$" required> <br><br>

        <label for="logradouro">Endereço:</label>
        <input class="preencher" type="text" name="logradouro" id="logradouro"size="60"><br>
        <label for="cidade">Cidade:</label> 
        <input  class="preencher" type="text" id="cidade" name="cidade" required><br><br>

        <label for="ifoto">Envie uma foto:</label><br>
        <input class="preencher" type="file" name="foto" id="ifoto"><br><br>

        <label>Escolha a modalidade de luta:</label><br>
        <input type="radio" name="luta" value="Muay Thai">Muay Thai <br>
        <input type="radio" name="luta" value="Jiu-Jitsu">Jiu-Jitsu <br> <br>
     
        <label>Escolha a frequência:</label><br>
        <input class="preencher" type="radio" id="plano2x" name="plano" value="2x-100" required>
        <label for="plano2x">2x na semana — <strong>R$ 100,00</strong></label><br>
        <input type="radio" id="plano3x" name="plano" value="3x-130">
        <label for="plano3x">3x na semana — <strong>R$ 130,00</strong></label><br>
        <input type="radio" id="plano5x" name="plano" value="5x-180">
        <label for="plano5x">5x na semana — <strong>R$ 180,00</strong></label> <br><br><br>

        <hr width="90%">
        <h3>Informações complementares:</h3>
                Há alguma informação médica relacionada ao aluno, que você gostaria 
                 de informar?<br>
                <input type="radio" name="infoMedica" value="sim">Sim
                <input type="radio" name="infoMedica" value="não" checked>Não
                <input class="preencher"  type="text" size="60" placeholder="Se sim, informe aqui">
<br>
                O aluno necessita de alguma adaptação especial?<br>
                <input type="radio" name="especial" value="sim">Sim
                <input type="radio" name="especial" value="não" checked>Não
                <input class="preencher" type="text" size="60" placeholder="Se sim, informe aqui">
<br><br><br>

<textarea class="marg" cols="80" rows="10"> 
    Observações: 
    </textarea><br><br>

    <input  type="checkbox" id="ciente" name="ciente" required> Declaro que as informações prestadas são verdadeiras.<br><br>
   
    <button type="submit">Enviar</button>
    </form>
    </div>
</body>
</html>