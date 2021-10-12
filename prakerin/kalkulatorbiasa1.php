<?php
if ($_GET):
    $a = (double) @$_GET['a'];
	$b = (double) @$_GET['b'];
	$operator = @$_GET['operator'];
	
	switch ($operator) {
		case '+':
		     $hasil = $a + $b;
			 break;
		case '-':
             $hasil = $a - $b;
             break;
        case '*':
             $hasil = $a * $b;
             break;
        case '/':
             $hasil = $a / $b;
           	 break;
	}
    ?>
    <div style="margin-top: 1rem">
    Hasil: <strong><?php echo $hasil ?></strong>
    </div>
    <?php
endif; ?>	