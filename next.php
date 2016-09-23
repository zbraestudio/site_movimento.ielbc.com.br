<?
$subpage = true;
include('incs/inc.header.php');
?>
    <!-- Main -->
    <div id="main" class="pg_next">
        <div class="inner">

            <div id="pagina_topo_bg" style="background-image: url(images/next-topo.png);">
            </div>
            <p>Tá lançado nossa primeira série no NEXT, chamada VINTAGE.<br>
                Um convite para viajarmos juntos até a <i>era-bíblica</i>, pra entendermos um pouco melhor alguns conceitos básicos da nossa caminhada cristã.</p>
            <h2>Quando vai rolar?</h2>
            <p>A verdade é que já está rolando! Todas às sextas, depois das 22h30min.<br>
                Exceto no segundo final de semana de cada mês, que será ao sábado, depois das 20hrs.
            </p>

            <hr>

            <h2>Vídeos</h2>

            <ul class="video_lista">
                <?
                $youtube_lista = 'PLCrgWS5wXc-pla_pBTL4L2XJbLXfYxN6Q';
                $url_api = 'https://www.googleapis.com/youtube/v3/playlistItems?playlistId=' . $youtube_lista . '&key=' . $youtube_api_key . '&part=snippet';
                $youtube_content = file_get_contents($url_api);
                $youtube = json_decode(utf8_encode($youtube_content));


                //die($youtube_api_key);
                foreach($youtube->items as $item){

                    $youtubeID = $item->snippet->resourceId->videoId;

                    ?>
                    <li>
                        <a href="https://youtu.be/<?= $youtubeID; ?>" target="_blank" title="Assista esse episódio agora!">
                            <div class="capa" style="background-image: url(https://i.ytimg.com/vi/<?= $youtubeID; ?>/maxresdefault.jpg);"></div>
                        </a>
                    </li>
                    <?
                }
                ?>
            </ul>

            <div style="clear: both;"></div>

            <hr>

            <h2>QUIZ</h2>

            <p>Aproveite a faça perguntas no <a href="<?= $url_site; ?>quiz">nosso Quiz</a>.<br>As perguntas selecionadas serão respondidas durante os NEXT’s.</p>

        </div>
    </div>
<?
include('incs/inc.footer.php');
?>