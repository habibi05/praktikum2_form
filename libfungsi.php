<?php

function kelulusan($nilai) {
	if ($nilai > 55) {
		return "<p class='btn btn-success'>LULUS</p>";
	} else {
		return "<p class='btn btn-danger'>TIDAK LULUS</p>";
	}	
}

function grade($nilai) {
	if ($nilai >= 85 || $nilai >= 100) {
		return "A";
	} elseif ($nilai >= 70 || $nilai >= 84) {
		return "B";
	} elseif ($nilai >= 56 || $nilai >= 69) {
		return "C";
	} elseif ($nilai >= 36 || $nilai >= 55) {
		return "D";
	} elseif ($nilai >= 0 || $nilai >= 35) {
		return "E";
	} else {
		return "I";
	}
}

function predikat($nilai) {
	switch ($nilai) {
		case 'A':
			return 'Sangat Memuaskan';
			break;

		case 'B':
			return 'Memuaskan';
			break;

		case 'C':
			return 'Cukup';
			break;

		case 'D':
			return 'Kurang';
			break;

		case 'E':
			return 'Sangat Kurang';
			break;
		
		default:
			return 'Tidak Ada';
			break;
	}
}

?>