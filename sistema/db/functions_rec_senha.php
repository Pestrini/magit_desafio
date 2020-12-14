<?php
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');
require('conexao.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function verifica_dados($mysql){
    if(isset($_POST['env'])&& $_POST['env']=="form"){
        $email = addslashes($_POST['email']);
        $sql = $mysql->prepare("SELECT * FROM client WHERE Email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $get = $sql->get_result();
        $total = $get->num_rows;

        if($total>0){
           $dados = $get->fetch_assoc();
            add_dados_recover($mysql, $email);
        }else{
            echo "E-mail não encontrado!";
        }
    }
}

function add_dados_recover($mysql, $email){
   
    $rash = md5(rand());
    $sql = $mysql->prepare("UPDATE Client SET Acesstoken = (?) WHERE Email = '$email'");
    $sql->bind_param("s", $rash);
    $sql->execute();
    if($sql){
        enviar_email($mysql, $email);
    }
}

function enviar_email($mysql, $email){
    
    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='teekkoo2020@gmail.com';
        $mail->Password='ggd56789';
        $mail->Port= 587;   

        $mail->setFrom('teekkoo2020@gmail.com');
        $mail->addAddress($email);
        
        $mail->isHTML(true);
        $mail->Subject='Troque a Senha da Sua Conta';
        $mail->Body='<p>Ouve um Pedido para Solicitação da troca de Senha, Acesse o Link abaixo e para trocar sua senha!</p><br>
                        <a class="left" href="http://localhost/sistema/paginas/Nova_senha.php">Atualizar Senha Aqui</a>';

        if($mail->send()){
            echo ("
            <script>
            window.location.href = \"verifica_email.php\";
            </script>
            ");
        }else
            echo "email nao enviado";

    }catch (Exception $e){
        echo "erro ao enviar mensagem:{$mail->ErrorInfo}";
    }
    
   
}
?>