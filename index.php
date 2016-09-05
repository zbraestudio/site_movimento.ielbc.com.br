<?
include('incs/inc.header.php');
?>

<div id="main">
	<div class="inner">
		<header>
			<h1>Uma Igreja pra quem não gosta de igreja e para pessoas de quem a igreja não gosta.</h1>
			<p>Pra você nos conhecer de verdade, precisa participar de um de nossos projetos abaixo. Corre!</p>
		</header>
		<section class="tiles">
			<article class="style1">
				<span class="image">
					<img src="images/pic01.jpg" alt="" />
				</span>
				<a href="">
					<h2><?= file_get_contents('./images/logo_next.svg');  ?></h2>
					<div class="content">
						<p>Estamos sempre perto de muita gente, mas ser próximo é diferente, precisa dar um passo a mais.</p>
					</div>
				</a>
			</article>
			<article class="style2">
				<span class="image">
					<img src="images/pic02.jpg" alt="" />
				</span>
				<a href="">
					<h2><?= file_get_contents('./images/logo_talmidim.svg');  ?></h2>
					<div class="content">
						<p>Pessoas precisam de Deus. Pessoas precisam de pessoas. Pessoalmente, queremos crescer.</p>
					</div>
				</a>
			</article>
			<?

			/*
			<article class="style3">
				<span class="image">
					<img src="images/pic03.jpg" alt="" />
				</span>
				<a href="">
					<h2><?= file_get_contents('./images/logo_lirios.svg');  ?></h2>
					<div class="content">
						<p>De mulher pra mulher. Depois de ter criado tudo, viu que faltava ainda elas para chamar sua perfeita criação de completa. </p>
					</div>
				</a>
			</article>

			*/
			?>
			<article class="style4">
				<span class="image">
					<img src="images/pic04.jpg" alt="" />
				</span>
				<a href="">
					<h2><?= file_get_contents('./images/logo_deeper.svg');  ?></h2>
					<div class="content">
						<p>Música é uma desculpa, pra falarmos do amor de Deus. Adoração é um estilo de viver. </p>
					</div>
				</a>
			</article>

		</section>
	</div>
</div>
<?
include('incs/inc.footer.php');
?>