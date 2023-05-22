<?php
include('koneksidb.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Tgl lahir');
$sheet->setCellValue('G1', 'Agama');
$sheet->setCellValue('H1', 'Kelas');
$sheet->setCellValue('I1', 'No HP');
$sheet->setCellValue('J1', 'email');
$sheet->setCellValue('K1', 'Alamat');

$query = mysqli_query($conn,"select * from db_report");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
    $sheet->setCellValue('C'.$i, $row['jkelamin']);
    $sheet->setCellValue('D'.$i, $row['nisn']);
    $sheet->setCellValue('E'.$i, $row['nik']);
    $sheet->setCellValue('F'.$i, $row['tempattgllahir']);
    $sheet->setCellValue('G'.$i, $row['agama']);
	$sheet->setCellValue('H'.$i, $row['kelas']);
    $sheet->setCellValue('I'.$i, $row['nohp']);
    $sheet->setCellValue('J'.$i, $row['email']);
	$sheet->setCellValue('K'.$i, $row['alamat']);	
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Report Peserta Didik.xlsx');
?>