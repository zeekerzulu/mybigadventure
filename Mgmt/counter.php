<?php
	$type = 'unique';
	$hitFile = 'Mgmt/hitcounter.txt';
	$visitFile = 'Mgmt/visitcounter.txt';
	$ipFile = 'Mgmt/ips.txt';
	$agentFile = 'Mgmt/agents.txt';
	$ip = $_SERVER['REMOTE_ADDR'];
	$match = false;
	$agent = $_SERVER['HTTP_USER_AGENT'];
	if (strstr($agent,'AOL ')) {
		$match = true;
	} else {
		if(is_file($ipFile)){
			$fp = @fopen($ipFile, "rb") or die("Couldn't open file");  
			while($data = fscanf($fp,"%s\r\n")) {
				list($ipAddr) = $data;
				if($ipAddr == $ip){
					$match = true;
					break;
				}
			}
		}
	}
	$fp2 = @fopen($hitFile, "rb") or die("Couldn't open file");
	$hits = fgets($fp2, 100);
	$hits = $hits+1;
	if ($hits > 10) {
		$fp2 = @fopen($hitFile, "w") or die("Couldn't open file");
		fwrite ($fp2, $hits);
		fclose($fp2);
	}
	if(!$match){
		$fp2 = @fopen($visitFile, "rb") or die("Couldn't open file");
		$visits  = fgets($fp2, 100);
		$visits = $visits+1;
		fclose($fp2);
		$fp2 = @fopen($visitFile, "w") or die("Couldn't open file");
		fwrite ($fp2, $visits);
		fclose($fp2);
		if(is_file($ipFile)){
			$fp2 = @fopen($ipFile, "a+") or die("Couldn't open file");
			fwrite ($fp2, $ip . "\r\n");
			fclose($fp2);
		} else {
			$fp2 = @fopen($ipFile, "w") or die("Couldn't open file");
			fwrite ($fp2, $ip . "\r\n");
			fclose($fp2);
		}
		if(is_file($agentFile)){
			$fp3 = @fopen($agentFile, "a+") or die("Couldn't open file");
			fwrite ($fp3, $agent . "\r\n");
			fclose($fp3);
		} else {
			$fp3 = @fopen($agentFile, "w") or die("Couldn't open file");
			fwrite ($fp3, $agent . "\r\n");
			fclose($fp3);
		}
	} else {
		$fp2 = @fopen($visitFile, "rb") or die("Couldn't open file");
		$visits  = fgets($fp2, 1024);
		fclose($fp2);
	}
	$counter = "";
	if ($visits < 10) $zerocnt = 5;
	elseif ($visits < 100) $zerocnt = 4;
	elseif ($visits < 1000) $zerocnt = 3;
	elseif ($visits < 10000) $zerocnt = 2;
	elseif ($visits < 100000) $zerocnt = 1;
	else $zerocnt = 0;
	 for($i=0;$i<$zerocnt;$i++) {
  	 $counter .= "<img src='Graphics/0.gif'>";
	}
	for($i=0;$i<strlen($visits);$i++) {
		$imgnum = substr($visits ,$i,1);
		$counter .= "<img src='Graphics/$imgnum.gif'>";
	}
?>