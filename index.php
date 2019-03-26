<!DOCTYPE html>
    <head>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		
		<?php
            if (date('D') == 'Wed' || date('D') == 'Thu') { 
              //ONLY SHOW WED-THU
              $strTrackSuitday = "False";
              $strBGcolor = "#ff0000";
              $strTextcolor = "#ffffff";
              $strTrackSuit = "UNIFORM :-(";
            } elseif (date('D') == 'Mon' || date('D') == 'Tue' || date('D') == 'Fri') { 
              //ONLY SHOW MON-TUE-FRI 
              $strTrackSuitday = "True"; 
              $strBGcolor = "#1aa211";
              $strTextcolor = "#ffffff"; 
              $strTrackSuit = "TRACKSUIT :-)";
            } else { 
              //ONLY SHOW SAT-SUN 
              $strTrackSuitday = "False";
              $strBGcolor = "#336699";
              $strTextcolor = "#ffffff";
              $strTrackSuit = "ENJOY THE WEEKEND!"; }
        ?>      
			
      		<style>
              body {
                color: <?php
                  echo $strTextcolor;
                  ?>;
                background-color: <?php
                  echo $strBGcolor;
                  ?>;
                font-family: 'Lato', sans-serif;
                font-weight: bold;
                font-size: 24px;
                text-align: center;
                line-height: 34px;
              }

              #footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                font-size: 18px;
                font-weight: normal;
              }

              a {
                color: white;
                font-weight: normal;
                font-size: 18px;
              }
                    
            </style>      
      
	</head>
    
	<body>
      <?php
		  echo "<p>It's " . date('l jS F Y') . " today <br><br>";
		  echo $strTrackSuit;
		  echo "</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
      ?>
      <div id="footer"><a href="mailto:stuartheenan@gmail.com" target="_top">stuartheenan@gmail.com</a><br>Copyright &copy; <?php echo date("Y")." "; ?></div>
    </body>
</html>