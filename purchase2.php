<?php	


			$allPlanValue = array("advertFirst","advertMiddle", "advertLast", "net1", "net2", "net3", "webMan1", "webMan2", "webMan3", "webSchool1", "webSchool2", "webSchool3", "webPersonal1", "webPersonal2", "webPersonal3", "webOrg1", "webOrg2", "webOrg3", );
			
			$currentSelection = $_POST["allPrice"];
			$arrlength = count($allPlanValue);
			
			if ($currentSelection=="advertFirst" || $currentSelection=="advertMiddle" || $currentSelection=="advertLast"){
			$message="Online Advertisement";
			}
			elseif($currentSelection=="net1" || $currentSelection=="net2" || $currentSelection=="net3"){
			$message="Networking";
			}
			elseif($currentSelection=="webMan1" || $currentSelection=="webMan2" || $currentSelection=="webMan3"){
			$message="Website Management";
			}
			elseif($currentSelection=="webSchool1" || $currentSelection=="webSchool2" || $currentSelection=="webSchool3"){
			$message="School Website Design";
			}
			elseif($currentSelection=="webPersonal1" || $currentSelection=="webPersonal2" || $currentSelection=="webPersonal3"){
			$message="Personal Website Design";
			}
			elseif($currentSelection=="webOrg1" || $currentSelection=="webOrg2" || $currentSelection=="webOrg3"){
			$message="Organisational Website Design";
			};
		
			if($currentSelection=="advertFirst"){
				$plan="Economy Plan";
			}
			elseif($currentSelection=="net1"){
				$plan="Economy Plan";
			}
			elseif($currentSelection=="webMan1"){
				$plan="Economy Plan";
			}
			elseif($currentSelection=="webSchool1"){
				$plan="Economy Plan";
			}
			elseif($currentSelection=="webPersonal1"){
				$plan="Economy Plan";
			}
			elseif($currentSelection=="webOrg1"){
					$plan="Economy Plan";
			}
			elseif($currentSelection=="advertMiddle"){
				$plan="Standard Plan";
			}
			elseif($currentSelection=="net2"){
				$plan="Standard Plan";
			}
			elseif($currentSelection=="webMan2"){
				$plan="Standard Plan";
			}
			elseif($currentSelection=="webSchool2"){
				$plan="Standard Plan";
			}
			elseif($currentSelection=="webPersonal2"){
				$plan="Standard Plan";
			}
			elseif($currentSelection=="webOrg2"){
					$plan="Standard Plan";
			}
			elseif($currentSelection=="advertLast"){
				$plan="Premium Plan";
			}
			elseif($currentSelection=="net3"){
				$plan="Premium Plan";
			}
			elseif($currentSelection=="webMan3"){
				$plan="Premium Plan";
			}
			elseif($currentSelection=="webSchool3"){
				$plan="Premium Plan";
			}
			elseif($currentSelection=="webPersonal3"){
				$plan="Premium Plan";
			}
			elseif($currentSelection=="webOrg3"){
					$plan="Premium Plan";
				}
?>
			