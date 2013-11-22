<?php
	class CSV {
	
		public function open($a){
			$file= fopen("$a","r");
			$hand= fopen("$a","r");
			$cols = count(fgetcsv($hand,1000,","));
			$total = 0;
			
			while($r = fgetcsv($file,1000,",")){
				$cells = array();
				foreach($r as $i){$cells[] = $i;}
				$cells[] = $r[0];
				$result['rows'][] = $cells;
				$total+=1;
			}
			
			$result['cols'] = $cols;
			$result['total'] = $total;
			fclose($file);
			fclose($hand);
			return $result;
		}
	}
?>