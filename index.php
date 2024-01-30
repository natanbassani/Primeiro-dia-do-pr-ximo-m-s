function primeiroDiaProximoMes($qtdeMeses=0)
{
	$dt = new DateTime('first day of next month');

	$datas = array( $dt->format('Y-m-d') );

	for ($i = 0; $i < $qtdeMeses; $i++) {
		$dt->modify('+1 month');

		$datas[] = $dt->format('Y-m-d');
	}

	return $datas;
}
