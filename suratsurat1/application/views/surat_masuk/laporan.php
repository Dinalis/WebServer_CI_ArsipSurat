<!DOCTYPE html>
<html>
<head>
	<title>Report Table Surat Masuk</title>
	<style type="text/css">
		#outtable{
			padding: 20px;
			border:1px solid #e3e3e3;
			width: 650px;
			border-radius: 5px;
		}
		.short{
			width: 15px;
		}
		.normal{
			width: 50px;
		}
		table{
			border-collapse: collapse;
			font-family: arial;
			color: #5E5B5C;
		}
		thead th{
			text-align: left;
			padding: 10px;
		}
		tbody td{
			border-top: 1px solid #e3e3e3;
			padding: 10px;
		}
		tbody tr:nth-child(even){
			background: #F6F5FA;
		}
		tbody tr:hover{
			background: #EAE9F5;
		}
	</style>
</head>
<body>
	<div id="outtable">
		<table>
			<thead>
				<tr>
					<th class="short">#</th>
					<th class="normal">Kode Surat</th>
                    <th class="normal">No Instansi</th>
                    <th class="normal">No Agenda</th>
                    <th class="normal">Isi Ringkasan</th>
                    <th class="normal">No Surat</th>
                    <th class="normal">Tgl Surat</th>
                    <th class="normal">Tgl Diterima</th>
                    <th class="normal">Penerima</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1;?>
				<?php foreach($surat_masuk as $srt):?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $srt->kode_surat; ?></td>
                        <td><?php echo $srt->nomor_instansi; ?></td>
                        <td><?php echo $srt->no_agenda; ?></td>
                        <td><?php echo $srt->isi_ringkasan; ?></td>
                        <td><?php echo $srt->no_surat; ?></td>
                        <td><?php echo $srt->tgl_surat; ?></td>
                        <td><?php echo $srt->tgl_diterima; ?></td>
                        <td><?php echo $srt->penerima; ?></td>
					</tr>
				<?php $no++; ?>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>