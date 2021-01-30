# Help Desk

[![GitHub](https://img.shields.io/github/license/fabianobasso/Jogo_De_Xadrez)](https://github.com/fabianobasso/Help_Desk/blob/master/LICENSE) 

# Sobre o projeto

Help Desk é um projeto de aplicativo web para área de suporte técnico  de informática de empresas. Com ele se torna mais fácil a abertura de chamados para o pessoal do TI da empresa.

### Como Funciona:
O usuário cadastrado no sistema efetua seu login e pode relatar qualquer problema relacionado a informática que vai ser redirecionado para área de TI. 
Já para quem é da área de TI, vai ter um controle de todos os chamados abertos pelos setores da empresa e direcionar o técnico até o local para resolver o problema


# Layout

<table>
    <tr>
        <td><b>Tela Inicial do Aplicativo</b></td>
    </tr>
    <tr>
        <td><img src="https://github.com/fabianobasso/assets/blob/master/img/HelpDesk/helpTelaPrincipal1.png" width="200" height="100" ></td>
    </tr>
</table>

&nbsp;
&nbsp;
# Tecnologias utilizadas

### Informações
Nessa versão 1.0 do aplicativo não é usado um banco de dado, os dados são armazenados em dois arquivos texto **user.hd** (armazena os dados do usuário) e o **chamados.hd** (armazena os dados do chamados abertos) mas garante uma integridade total.

Foi usado session recurso do PHP para trabalhar com seção para verificar se o usuário foi autenticado no sistema.

Foi criado dois perfil para sistema:.

**Administrador** consegue cadastrar novos usuários no sistema, consegue visualizar todos os chamados abertos.

**Usuário** consegue apenas abrir o chamado e consultar apenas seu próprio chamado aberto.


### Back end
- PHP
- JavaScript

### Front end
- HTML5
- CSS
- BOOTSTRAP 4

# Como executar o projeto

**Pré-requisitos:**. 
- Sistema Operacional Linux, Windows e MAC
- XAMPP instalado ou qualquer outro para simular servidor web (Somente necessário o php para funcionar)
- Navegador de internet.

```bash
# clonar repositório
git clone https://github.com/fabianobasso/Help_Desk.git
```
- Copiar a pasta do projeto para pasta publica do XAMPP
- Abrir o projeto no navegador.

**OBS:** os arquivos **user.hd** e **chamados.hd**, são criados na primeira vez que executar o aplicativo de forma automática.
Usuário padrão criado: **adm@hd.com** com a senha **123456**.

Lembro que essa é a versão 1.0 do aplicativo, ela é a base do aplicativo essa versão foi desenvolvida para mostrar meus conhecimento com a linguagem e entrar como um projeto para meu currículo por isso ele é distribuído sobre a licença [![GitHub](https://img.shields.io/github/license/fabianobasso/Jogo_De_Xadrez)](https://github.com/fabianobasso/Help_Desk/blob/master/LICENSE).

# Autor

Fabiano Basso Antonio.

**OBS:** A versão 2.0 desse aplicativo já está disponível, com muito mais features com uso de banco de dados e seguindo toda regra de negócio. caso tenha interesse pode entrar em contato comigo pelo meu Linkedin.

**Linkedin:** https://www.linkedin.com/in/fabiano-basso

 
