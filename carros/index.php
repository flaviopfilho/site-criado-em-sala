<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<title>Carros</title>
	<h1 class="titulo" style="text-align: center;">Carros do filme Velozes & Furiosos</h1>
</head>
<body>
	<?php $carros= [
		["foto" => "skyline.png",
		"nome" => "Skyline",
		"descricao" => "O Nissan Skyline é um carro compacto que começou a ser fabricado no Japão em 1957 e evoluiu de um sedã familiar para um ícone automotivo."],

		["foto" => "dodge.png",
		"nome" => "Dodge Americano",
		"descricao" => "Um Dodge americano é um tipo de carro, conhecida por seus veículos de alto desempenho, especialmente os cars como o Challenger e o Charger."],

		["foto" => "RX-7.png",
		"nome" => "RX-7",
		"descricao" => "O Mazda RX-7 é um carro esportivo japonês produzido de 1978 a 2002, conhecido por seu design elegante e, principalmente, pelo motor rotativo Wankel."],

		["foto" => "mitsubishi.png",
		"nome" => "Mitsubishi Eclipse ",
		"descricao" => "O Mitsubishi Eclipse é um veículo de origem japonesa que, é um SUV compacto.Ele é movido por um motor 1.5 a gasolina turbo que entrega 165 cavalos de potência."],
	];

	?>

	<div class="row">
		<?php foreach ($carros as $carro) {?>
			<div class="col-3 mt-4">
				<div class="card" style="width: 18rem; height: 380px;">
					<img src="<?php echo $carro['foto']?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?php echo $carro['nome'] ?></h5>
						<p class="card-text"><?php echo $carro['descricao'] ?></p>
					</div>
				</div>
			</div>
		
	<?php } ?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>