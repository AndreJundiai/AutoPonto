<?php


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="UTF-8">
<div class="container">
    <form name="dadosNotebook" action="conexao.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td>Nome: </td>
                    <td><input type="text" name="nome" value=""></td>
                </tr>
                <tr>
                    <td>Modelo: </td>
                    <td><input type="text" name="modelo" value=""></td>
                </tr>
                <tr>
                    <td>Memoria Ram: </td>
                    <td><input type="text" name="memoriaRam" value=""></td>
                </tr>
                <tr>
                    <td>Sistema Operacional: </td>
                    <td><input type="text" name="sistemaOperacional" value=""></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="acao" value="inserir1"></td>
                    <td><input type="submit" name="Enviar" value="Enviar"></td>
                </tr>
            </tbody>
        </table> 
    </form>
</div>
