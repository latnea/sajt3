<?php

$comp=mysqli_query($link, "SELECT * FROM `comp3D` WHERE `id`<=20 ORDER BY `rate` DESC ") or exit();

/* -------------------------------------------------------------------------------------------------------------*/ // vivod vseh predprijatij


function IsChecked ($chkname, $value) {
	if(!empty($_POST[$chkname])) {
		foreach($_POST[$chkname] as $chkval) {
			if ($chkval==$value) {
				return true;
			}
		}
	}
	return false;
}

if(IsChecked ('choice1', 'f1p')) { 
	$_SESSION['p']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice1', 'f1s')) { 
	$_SESSION['s']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice1', 'f1m')) { 
	$_SESSION['m']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice1', 'f12pr')) { 
	$_SESSION['pr']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice1', 'f12sk')) { 
	$_SESSION['sk']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice1', 'f12mo')) { 
	$_SESSION['mo']='';
	header("Location: index.php?modules=print&page=print");
}

if(isset($_POST['getfiltr'])){
	if(empty($choice1)) {
		$fail = 'Вы ничего не выбрали';
	}
}

/*


// ------ 3e + 3s

if(isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2sk'], $_POST['f2mo'])) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();
//----- ------ 2e + 3s

	} elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f2pr'], $_POST['f2sk'], $_POST['f2mo'])) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

	}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2sk'], $_POST['f2mo'])) {
		$_SESSION['p']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

	}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2sk'], $_POST['f2mo'])) {
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

		    }elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1pr'], $_POST['f2sk'], $_POST['f2mo'])) {
				$_SESSION['p']='';
				$_SESSION['pr']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f2pr'], $_POST['f2sk'], $_POST['f2mo'])) {
				$_SESSION['s']='';
				$_SESSION['pr']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2sk'], $_POST['f2mo'])) {
				$_SESSION['m']='';
				$_SESSION['pr']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				header("Location: index.php?modules=print&page=print");
				exit();


// ------ 3e + 2s

	}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2sk'])) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		header("Location: index.php?modules=print&page=print");
		exit();

	}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2mo'])) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

	}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f1m'], $_POST['f2sk'], $_POST['f2mo'])) {
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['p']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

// ------ 3e + 1s

			}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f1m'], $_POST['f2pr'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				$_SESSION['m']='';
				$_SESSION['pr']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f1m'], $_POST['f2sk'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				$_SESSION['m']='';
				$_SESSION['sk']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f1m'], $_POST['f2mo'])) {
				$_SESSION['s']='';
				$_SESSION['m']='';
				$_SESSION['p']='';
				$_SESSION['mo']='';
				header("Location: index.php?modules=print&page=print");
				exit();


// ------ 1e + 3s

			}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f2sk'], $_POST['f2mo'], $_POST['f2pr'])) {
				$_SESSION['p']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				$_SESSION['pr']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f2sk'], $_POST['f2mo'], $_POST['f2pr'])) {
				$_SESSION['s']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				$_SESSION['pr']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr'], $_POST['f1m'], $_POST['f2sk'], $_POST['f2mo'], $_POST['f2pr'])) {
				$_SESSION['m']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				$_SESSION['pr']='';
				header("Location: index.php?modules=print&page=print");
				exit();



// ------ 2e + 2s

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f2pr'], $_POST['f2sk'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['pr']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f2pr'], $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['pr']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'],  $_POST['f2sk'], $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['sk']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();



					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2sk'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1m'],  $_POST['f2sk'], $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['sk']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();



					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2sk'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2mo'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f1m'],  $_POST['f2sk'], $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['sk']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();



// ----2e + 1s	-------

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f2pr'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'], $_POST['f2sk'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1s'],  $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1m'], $_POST['f2pr'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1m'], $_POST['f2sk'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f1m'],  $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f1m'], $_POST['f2pr'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f1m'], $_POST['f2sk'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f1m'],  $_POST['f2mo'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


// ------2s + 1e	-------

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f2pr'], $_POST['f2sk'])) {
						$_SESSION['p']='';
						$_SESSION['sk']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f2pr'], $_POST['f2sk'])) {
						$_SESSION['s']='';
						$_SESSION['pr']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2sk'])) {
						$_SESSION['m']='';
						$_SESSION['sk']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f2pr'], $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['mo']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f2pr'], $_POST['f2mo'])) {
						$_SESSION['s']='';
						$_SESSION['mo']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1m'], $_POST['f2pr'], $_POST['f2mo'])) {
						$_SESSION['m']='';
						$_SESSION['mo']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f2sk'], $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['sk']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f2sk'], $_POST['f2mo'])) {
						$_SESSION['s']='';
						$_SESSION['mo']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1m'], $_POST['f2sk'], $_POST['f2mo'])) {
						$_SESSION['m']='';
						$_SESSION['mo']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();




//-------1s + 1e	-------


					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f2pr'])) {
						$_SESSION['p']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f2sk'])) {
						$_SESSION['p']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1p'], $_POST['f2mo'])) {
						$_SESSION['p']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f2pr'])) {
						$_SESSION['s']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f2sk'])) {
						$_SESSION['s']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1s'], $_POST['f2mo'])) {
						$_SESSION['s']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr'], $_POST['f1m'], $_POST['f2pr'])) {
						$_SESSION['m']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1m'], $_POST['f2sk'])) {
						$_SESSION['m']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr'], $_POST['f1m'], $_POST['f2mo'])) {
						$_SESSION['m']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

		
//-------3 e	-------


} elseif(isset($_POST['getfiltr'] , $_POST['f1p'], $_POST['f1s'], $_POST['f1m'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				$_SESSION['m']='';
				header("Location: index.php?modules=print&page=print");
				exit();

//-------2 e	-------
		
		} elseif(isset($_POST['getfiltr'] , $_POST['f1p'], $_POST['f1m'])) {
				$_SESSION['p']='';
				$_SESSION['m']='';
				header("Location: index.php?modules=print&page=print");
				exit();

		} elseif(isset($_POST['getfiltr'] , $_POST['f1p'], $_POST['f1s'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				header("Location: index.php?modules=print&page=print");
				exit();

		} elseif(isset($_POST['getfiltr'] , $_POST['f1m'], $_POST['f1s'])) {
				$_SESSION['m']='';
				$_SESSION['s']='';
				header("Location: index.php?modules=print&page=print");
				exit();

		//-------1 e	-------
			
					} elseif(isset($_POST['getfiltr'] , $_POST['f1p'])) {
							$_SESSION['p']='';
							header("Location: index.php?modules=print&page=print");
							exit();

					} elseif(isset($_POST['getfiltr'] , $_POST['f1m'])) {
							$_SESSION['m']='';
							header("Location: index.php?modules=print&page=print");
							exit();

					} elseif(isset($_POST['getfiltr'] , $_POST['f1s'])) {
					$_SESSION['s']='';
					header("Location: index.php?modules=print&page=print");
					exit();


				//-------3s	-------

							}	elseif(isset($_POST['getfiltr'] , $_POST['f2pr'], $_POST['f2sk'], $_POST['f2mo'])) {
									$_SESSION['pr']='';
									$_SESSION['sk']='';
									$_SESSION['mo']='';
									header("Location: index.php?modules=print&page=print");
									exit();

				//-------2s	-------

							} 	elseif(isset($_POST['getfiltr'] , $_POST['f2pr'], $_POST['f2mo'])) {
									$_SESSION['pr']='';
									$_SESSION['mo']='';
									header("Location: index.php?modules=print&page=print");
									exit();

							}	elseif(isset($_POST['getfiltr'] , $_POST['f2pr'], $_POST['f2sk'])) {
									$_SESSION['pr']='';
									$_SESSION['sk']='';
									header("Location: index.php?modules=print&page=print");
									exit();

							}	elseif(isset($_POST['getfiltr'] , $_POST['f2mo'], $_POST['f2sk'])) {
									$_SESSION['mo']='';
									$_SESSION['sk']='';
									header("Location: index.php?modules=print&page=print");
									exit();

				//-------1s	-------

							}	elseif(isset($_POST['getfiltr'] , $_POST['f2pr'])) {
									$_SESSION['pr']='';
									header("Location: index.php?modules=print&page=print");
									exit();

							}	elseif(isset($_POST['getfiltr'] , $_POST['f2sk'])) {
									$_SESSION['sk']='';
									header("Location: index.php?modules=print&page=print");
									exit();
							}	elseif(isset($_POST['getfiltr'] , $_POST['f2mo'])) {
									$_SESSION['mo']='';
									header("Location: index.php?modules=print&page=print");
									exit();
							}
				
 ------------------------------------------------------------------------------------------------------------------------------*/  //printeri, skaneri, mater, pechatj, skanir, modelir



?>

