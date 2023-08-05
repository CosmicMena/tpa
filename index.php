<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPA | Agorra</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="logo">
        <img src="logo.png">
        <h3>@EduardoMena</h3>
    </div>
    <video id="video-background" autoplay loop muted preload="auto" controls>
        <source src="afrika.mp4" type="video/mp4">
        Seu navegador não suporta vídeos HTML5.
    </video>
    <?php
        function obterDataFormatada() {
            $dataAtual = date('d/m/Y');
            return $dataAtual;
        }

        // Exemplo de uso
        $dataFormatada = obterDataFormatada();
    ?>
    <footer id="foot">
        <div class="data" id="data">
            <div class="hora" id="hora">
            <script>
                $(document).ready(function() {
                    setInterval(function() {
                        // Faz uma requisição AJAX para obter a hora atual do servidor
                        $.ajax({
                            url: 'hora_atual.php',
                            type: 'GET',
                            success: function(data) {
                                // Atualiza o elemento com a hora atual retornada pelo servidor
                                $('#horaAtual').text(data);
                            }
                        });
                    }, 1000); // Atualiza a cada 1 segundo
                });
            </script>
                <p class="hora2" id="horaAtual"></p>
                <p>TPA/informação</p>
                <span><?php echo $dataFormatada;?></span>
            </div>
        </div>
        <div class="info" id="info">
            <div class="titulo" id="titu">
                <h2 id="texto1">
                    <?php
                        include_once('config.php'); 
                        $sql = "SELECT * FROM info";
                        $result = $conexao->query($sql);
                        $row = $result->fetch_assoc();
                        echo "$row[titulo]";
                    ?>
                </h2>
            </div>
            <div class="texto" id="textoo">
                <p id="rodapeTexto">
                    <?php
                        include_once('config.php'); 
                        $sql = "SELECT * FROM info";
                        $result = $conexao->query($sql);
                        $row = $result->fetch_assoc();
                        echo "$row[texto]";
                    ?>
                </p>
            </div>
        </div>
    </footer>

    <div class="circ">
        <marquee direction="right">
            O século XX foi marcado por movimentos, revoltas e acontecimentos. No continente africano foi o tempo das independências, que caminharam juntas à Guerra Fria, quando União Soviética e Estados Unidos polarizaram o mundo e, no contexto africano, foram decisivas com suas posições – por diferentes motivos – contrárias ao colonialismo. As duas superpotências mundiais foram fundamentais na difusão do anticolonialismo e no apoio às jovens nações de África.
        </marquee>
    </div>

    <script>
        // Atualizar os dados a cada 5 segundos
        setInterval(function() {
            $.ajax({
                url: 'get_data.php',
                type: 'GET',
                success: function(data) {
                    var jsonData = JSON.parse(data);
                    $('#texto1').text(jsonData.titulo);
                    $('#rodapeTexto').text(jsonData.texto);

                    if (jsonData.controle == 0) {
                        fecharRodape();
                    } else if (jsonData.controle == 1) {
                        abrirRodape();
                    }
                }
            });
        }, 3000);
    </script>
</body>
</html>