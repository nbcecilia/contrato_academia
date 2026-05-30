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
    
                <td><img src="img/logo_remove.png" alt="logo"></td><br>

            <h3>Caros Alunos e/ou Responsáveis,</h3>

<p>Bem-vindo(a) à nossa escola de lutas. Por favor, utilize este formulário para realizar sua adesão às aulas oferecidas por nossa equipe.</p>
<p>Precisamos de informações completas e corretas do(a) aluno(a) para garantir um atendimento adequado, segurança durante os treinamentos e organização das turmas. 
Portanto, solicitamos que todos os campos sejam preenchidos com atenção.</p>
<br><br>
        
        <form class="marg" action="cadastroconfirmado.php" method="POST" target="_blank">
        <h2 class="h2">TERMO DE ADESÃO</h2><br>

        <h3>Dados do Contratado</h3><br>
        <label for="contratado">Contratado:</label>
        <input class="preencher" type="text" id="contratado" name="contratado" minlength="5" maxlength="30" size= "60" required placeholder="Digite o nome da empresa" autocomplete="contratado"><br>
        <label for="cnpj">CNPJ:</label>
        <input class="preencher" type="text" id="cnpj" name="cnpj" placeholder="xx.xxx.xxx/xxxx-xx" autocomplete="cnpj" required><br>
        <label for="logradouro2">Endereço:</label>
        <input class="preencher" type="text" name="logradouro2" id="logradouro2"size="60" placeholder="Digite o endereço" required autocomplete="logradouro2"><br>
        <label for="cidade2" reqired autocomplete="cidade2">Cidade:</label> 
        <input  class="preencher" type="text" id="cidade2" name="cidade2" placeholder="Ex:Brasília"required>
        <label for="estado2" required autocomplete="estado2">Estado:</label> 
        <select id="estado2" class="campo" name="estado2" onchange="update()">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select><br>
        <label for="itel2" required autocomplete="tel2">Telefone:</label>
        <input  class="preencher" type="tel2" name="tel2" id="itel2" pattern="^\(\d{2}\)\d{4,5}-\d{4}$" placeholder="(xx)xxxxx-xxxx"required><br>
        <label for="instrutor" required autocomplete="instrutor">Instrutor Responsável:</label>
        <input class="preencher" type="text" id="instrutor" name="instrutor" minlength="5" maxlength="30" size= "60" required placeholder="Digite o nome do instrutor responsável"><br><br>
        
        <hr width="90%">

        <h3>Dados do Contratante</h3><br>
        <label for="nome">Nome do Aluno:</label>
        <input class="preencher" type="text" id="nome" name="nome" minlength="5" maxlength="30" size= "60" required placeholder="Digite o nome completo"><br>

        <label for="cpf">CPF:</label>
        <input class="preencher" type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx" required>
        
        <label for="sexo">Sexo:</label> 
        <input type="radio" name="sexo" value="Masculino" > Masculino
        <input type="radio" name="sexo" value="Feminino" > Feminino
        <input type="radio" name="sexo" value="Não informado" > Não informado <br>

        <label for="">Data de nascimento: </label>
        <input class="preencher" id="date" type="date" name="data" size="8"><br><br>

        <label for="responsavel">Nome do Responsável(se necessário):</label>
        <input  class="preencher" type="text" id="responsavel" name="responsavel" minlength="5" maxlength="30" size= "55" placeholder="Digite seu nome completo">

        <label for="cpf">CPF(responsável):</label>
        <input class="preencher" type="text" id="cpf2" name="cpf2" placeholder="000.000.000-00"><br><br>
        
        <label for="email">E-mail:</label>
        <input class="preencher" type="email" id="email" name="email" required placeholder="seuemail@exemplo.com">

        <label for="itel">Telefone:</label>
        <input  class="preencher" type="tel" name="tel" id="itel" pattern="^\(\d{2}\)\d{4,5}-\d{4}$" placeholder="(xx)xxxxx-xxxx"required> <br>

        <label for="logradouro">Endereço:</label>
        <input class="preencher" type="text" name="logradouro" id="logradouro"size="60" placeholder="Digite o endereço"><br>
        <label for="cidade">Cidade:</label> 
        <input  class="preencher" type="text" id="cidade" name="cidade" placeholder="Ex:Brasília"required>
        
        <label for="estado">Estado:</label> 
        <select id="estado" class="campo" name="estado" onchange="update()">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select><br><br>

        <label>Escolha a Modalidade:</label><br>
        <input type="radio" name="luta" value="Muay Thai">Muay Thai <br>
        <input type="radio" name="luta" value="Jiu-Jítsu">Jiu-Jítsu <br> <br>
     
        <label>Escolha o plano/frequência:</label><br>
        <input class="preencher" type="radio" id="plano2x" name="plano" value="2x/sem - R$100" required>
        <label for="plano2x">2x na semana — <strong>R$ 100,00</strong></label><br>
        <input type="radio" id="plano3x" name="plano" value="3x/sem - R$130">
        <label for="plano3x">3x na semana — <strong>R$ 130,00</strong></label><br>
        <input type="radio" id="plano5x" name="plano" value="5x/sem - R$180">
        <label for="plano5x">5x na semana — <strong>R$ 180,00</strong></label> <br><br>
    
        <label for="ifoto">Envie uma foto:</label><br>
        <input class="preencher" type="file" name="foto" id="ifoto"><br><br>

        <hr width="90%">
        <h3>Informações complementares:</h3>
                Há alguma informação médica relacionada ao aluno, que você gostaria 
                 de informar?<br>
                <input type="radio" name="infoMedica" value="Sim">Sim
                <input type="radio" name="infoMedica" value="Não" checked>Não
                <input class="preencher"  type="text" size="60" placeholder="Se sim, informe aqui"><br>
                O aluno necessita de alguma adaptação especial?<br>
                <input type="radio" name="especial" value="Sim">Sim
                <input type="radio" name="especial" value="Não" checked>Não
                <input class="preencher" type="text" size="60" placeholder="Se sim, informe aqui">
<br><br><br>

Observações:<br>
<textarea type="text" id="obs" name="obs" value="obs" class="marg" cols="80" rows="10" placeholder="Opcional:use este espaço para informar restrições médicas, lesões, nível de experiência anterior ou seus principais objetivos com o treino."></textarea><br><br>

<input  type="checkbox" id="ciente" name="ciente" required> Declaro que as informações prestadas são verdadeiras.<br><br>
<button type="submit">Enviar</button>
    </form>

    </div>
</body>
</html>