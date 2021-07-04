<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Struk</title>
	 <link rel="stylesheet" href="assets\css\bootstrap.min.css">
 
	<style>
	.font{
		font-size: 25px;
	}
	</style>

</head>
<body>
	<div class="col-11" style="margin: auto;">
		
	<center>
		<br>
		<br>
		<h2> Bukti Pembelian</h2>
		<h3>JL.Raya Babat no 197 - LAMONGAN</h3>
		<br>
		<br>
		<hr style="border-bottom: 2px solid black">
		<hr style="border-bottom: 2px solid black">

	</center>
		<br>
		<table border="0" cellpadding="10" cellspacing="0">
			   			<thead>
						   <tr>
			   					<th><h4>Kode Transaksi </h4></th>
			   					<td class="font">: <?= "BD".$data['kode_transaksi'] ?></td>
			   				</tr>
			   			</thead>
			   			<tbody>
						   <tr>
			   					<th><h4>Admin </h4></th>
			   					<td class="font">: <?= $data['admin'] ?></td>
			   				</tr>
			   				<tr>
			   					<th><h4>Costumer </h4></th>
			   					<td class="font">: <?= $data['costumer'] ?></td>
			   				</tr>
			   				<tr>
			   					<th><h4>Tanggal Transaksi </h4></th>
			   					<td class="font">: <?= $data['tanggal_transaksi'] ?></td>
			   				</tr>
			   				<tr>
			   					<th><h4>Jumlah satuan </h4></th>
			   					<td class="font">: <?= $data['jumlah_pembelian'] ?></td>
			   				</tr>
			   				<tr>
			   					<th><h4>Total transaksi </h4></th>
			   					<td class="font">: <?= $data['total_harga'] ?></td>
			   				</tr>
							   <tr>
			   					<th><h4>nama kereta </h4></th>
			   					<td class="font">: <?= $data['kereta'] ?></td>
			   				</tr>
							   <tr>
			   					<th><h4>kelas </h4></th>
			   					<td class="font">: <?= $data['kelas'] ?></td>
			   				</tr>
							   </tr>
							   <tr>
			   					<th><h4>jam keberangkatan </h4></th>
			   					<td class="font">: <?= $data['jadwal'] ?></td>
			   				</tr>
							   </tr>
							   <tr>
			   					<th><h4>tujuan </h4></th>
			   					<td class="font">: <?= $data['tujuan'] ?></td>
			   				</tr>
							   </tr>


			   			</tbody>
			   		</table>
		<br>
		<hr style="border-bottom: 2px solid black">	
		<hr style="border-bottom: 2px solid black">		
		<br>
		<center>
			<div class="col-12">
					</div>
					<br>
					<h5>Terima Kasih</h5>
					</center>
					</div>
								

								<script>
									window.print();
								</script>


</body>
</html>