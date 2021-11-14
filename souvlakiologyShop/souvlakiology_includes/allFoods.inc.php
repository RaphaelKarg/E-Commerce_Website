<?php
    /******************* for OREKTIKA.PHP PAGE *******************/
    //If the user click the submit1 button
    if(isset($_POST['submit1'])){
        /**** Start the session ****/
        session_start();
        
        /**** OTHER VARIABLE SESSIONS ****/
        $_SESSION['patates1'] = $_POST['patatestig'];
        $_SESSION['patates2'] = $_POST['patatestigSauceGiourtiou'];
        $_SESSION['patates3'] = $_POST['patatestigGoudaMpeikonMagion'];
        $_SESSION['tyrokroketes'] = $_POST['tyrokroketes'];
        $_SESSION['souvlakiM'] = $_POST['souvlakiManitariwn'];
        $_SESSION['psomi'] = $_POST['psomi'];

        $cost1 = 0;
        /* Price calculation */
        if(isset($_POST['patatestig'])){
            $cost1 += 2.20;
        }
        if(isset($_POST['patatestigSauceGiourtiou'])){
            $cost1 += 2.20;
        }
        if(isset($_POST['patatestigGoudaMpeikonMagion'])){
            $cost1 += 3.50;
        }
        if(isset($_POST['tyrokroketes'])){
            $cost1 += 4.50;
        }
        if(isset($_POST['souvlakiManitariwn'])){
            $cost1 += 2.50;
        }
        if(isset($_POST['psomi'])){
            $cost1 += 0.50;
        }
        /**** TOTAL COST SESSION VARIABLE ****/
        $_SESSION['totalcost1'] = $cost1;
        
        //Send the datas in header location
        header("Location: ../menuorder.php?orektika");
        exit();
    }
    /******************* for KREATA.PHP PAGE *******************/
    //If the user click the submit2 button
    if(isset($_POST['submit2'])){
        /**** Start the session ****/
        session_start();

        /**** SANDWICH VARIABLE SESSIONS ****/ 
        $_SESSION['gyrosXoirinosSand'] = $_POST['gxoirino'];
        $_SESSION['gyrosKotopouloSand'] = $_POST['gkotopoulo'];
        $_SESSION['souvlakiXoirinoSand'] = $_POST['sxoirino'];
        $_SESSION['souvlakiKotopouloSand'] = $_POST['skotopoulo'];
        $_SESSION['mpiftekiGemistoSand'] = $_POST['mpgemisto'];
        /**** PORTIONS VARIABLE SESSIONS *****/
        $_SESSION['clubSnitselKotop'] = $_POST['pclub'];
        $_SESSION['souvlakiKotopouloMer'] = $_POST['meridaSouvlakiKotop'];
        $_SESSION['souvlakiXoirinoMer'] = $_POST['meridaSouvlakiXoir'];
        $_SESSION['gyroKotopouloMer'] = $_POST['meridaGyroKotop'];
        $_SESSION['gyroXoirinoMer'] = $_POST['meridaGyroXoir'];

        $cost2 = 0;
        if(isset($_POST['gxoirino'])){
            $cost2 += 2.80;
        }
        if(isset($_POST['gkotopoulo'])){
            $cost2 += 2.60;
        }
        if(isset($_POST['sxoirino'])){
            $cost2 += 2.70;
        }
        if(isset($_POST['skotopoulo'])){
            $cost2 += 2.50;
        }
        if(isset($_POST['mpgemisto'])){
            $cost2 += 3.00;
        }

        if(isset($_POST['pclub'])){
            $cost2 += 7.20;
        }
        if(isset($_POST['meridaSouvlakiKotop'])){
            $cost2 += 6.00;
        }
        if(isset($_POST['meridaSouvlakiXoir'])){
            $cost2 += 6.50;
        }
        if(isset($_POST['meridaGyroKotop'])){
            $cost2 += 6.30;
        }
        if(isset($_POST['meridaGyroXoir'])){
            $cost2 += 7.00;
        }
        /**** TOTAL COST SESSION VARIABLE ****/
        $_SESSION['totalcost2'] = $cost2;
        
        //Send the datas in header location
        header("Location: ../menuorder.php?kreata");
        exit();
    }
    /******************* for SALATES.PHP PAGE *******************/
    if(isset($_POST['submit3'])){
         /**** Start the session ****/
        session_start();

        /**** SALADS VARIABLE SESSIONS *****/
        $_SESSION['Chef'] = $_POST['chef'];
        $_SESSION['Ceasar'] = $_POST['caesar'];
        $_SESSION['Xoriatiki'] = $_POST['xoriatiki'];
        $_SESSION['Green'] = $_POST['green'];
        
        $cost3 = 0;
        if(isset($_POST['chef'])){
            $cost3 += 5.50;
        }
        if(isset($_POST['caesar'])){
            $cost3 += 5.50;
        }
        if(isset($_POST['xoriatiki'])){
            $cost3 += 5.50;
        }
        if(isset($_POST['green'])){
            $cost3 += 3.80;
        }
        /**** TOTAL COST SESSION VARIABLE ****/
        $_SESSION['totalcost3'] = $cost3;

        header("Location: ../menuorder.php?salates");
        exit();
    }
    /******************* for ALOIFES.PHP PAGE *******************/
    if(isset($_POST['submit4'])){
         /**** Start the session ****/
        session_start();

        /**** ALOIFES VARIABLE SESSIONS *****/
        $_SESSION['Tzatziki'] = $_POST['tzatziki'];
        $_SESSION['Tyrosalata'] = $_POST['tyrosalata'];
        $_SESSION['Tyrokafteri'] = $_POST['tyrokayteri'];
        $_SESSION['Melitzanosalata'] = $_POST['melitzanosalata'];
        $_SESSION['Rosiki'] = $_POST['rosiki'];

        $cost4 = 0;
        if(isset($_POST['tzatziki'])){
            $cost4 += 2.00;
        }
        if(isset($_POST['tyrosalata'])){
            $cost4 += 2.00;
        }
        if(isset($_POST['tyrokayteri'])){
            $cost4 += 2.00;
        }
        if(isset($_POST['melitzanosalata'])){
            $cost4 += 2.00;
        }
        if(isset($_POST['rosiki'])){
            $cost4 += 2.00;
        }
        /**** TOTAL COST SESSION VARIABLE ****/
        $_SESSION['totalcost4'] = $cost4;

        header("Location: ../menuorder.php?aloifes");
        exit();
    }
    
?>