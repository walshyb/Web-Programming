<?php
  $name = 'Megan Doty';
  $message= "Welcome, $name";
  
  $snerson_leader = array( 'Name' => $name, 'Age' => 'A hunnit', 'Calories' => 2000000000, 'Rank' => 'Leader');
  
  $snerson_minions = array(
      array( 'Name' => 'Shauna Keating', 'Time' => strtotime('one hour ago'), 'Calories' => '∞', 'Rank' => 'Minion'),
      array( 'Name' => 'Victoria Bottali', 'Time' => strtotime('one hour ago'), 'Calories' => '∞', 'Rank' => 'Minion'),
      array( 'Name' => 'Erik Bates', 'Time' => strtotime('one hour ago'), 'Calories' => '∞', 'Rank' => 'Minion'),
      array( 'Name' => 'Aston Sanders', 'Time' => strtotime('one hour ago'), 'Calories' => '∞', 'Rank' => 'Minion')
      );
      
  $total = 0;
  
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  
  <body>
    
    <div class="container">
        <h1>Hello, world!</h1>
        <h2><?=$message?></h2>
        
        <div class="panel panel-success">
          <div class="panel-heading" style="font-size: 26pt;"></a>>The Snersons</div>
          <div class="panel-body">
            <dl class="dl-horizontal">
              
              <dt style="font-size: 21pt;">Name</dt>
              <dd style="font-size: 21pt;"><?=$snerson_leader['Name']?></dd>
              
              <dt>Age</dt>
              <dd><?=$snerson_leader['Age']?></dd>
              
              <dt>Calories</dt>
              <dd><?=$snerson_leader['Calories']?></dd>
              
              <dt style="font-size: 18pt;">Rank</dt>
              <dd style="font-size: 18pt;"><strong><?=$snerson_leader['Rank']?></strong></dd>
            </dl>
                
            <?php
              foreach ($snerson_minions as $i => $snerson): ?>
                <dl class="dl-horizontal">
                  
                  <?=$i?>
          
                <dt style="font-size: 21pt;">Name</dt>
                <dd style="font-size: 21pt;"><?=$snerson['Name']?></dd>
                
                <dt>Time</dt>
                <dd><?=date('M d Y h:i:sa', $snerson['Time'])?></dd>
                
                <dt>Calories</dt>
                <dd><?=$snerson['Calories']?></dd>
                
                <dt style="font-size: 18pt;">Rank</dt>
                <dd style="font-size: 18pt;"><?=$snerson['Rank']?></dd>
              </dl>
                
              <?php endforeach; ?>
              <?php var_dump($snerson_minions); ?>
          </div>
        </div>

        <table class="table table-hover">
            <caption>Optional table caption.</caption>
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Mark</td>

              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Mark</td>
                <td>@Mark</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>the Mark</td>
                <td>@Mark</td>
              </tr>
            </tbody>
          </table>
        
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <script>
    
    (function(){ //immediately running function
      
      $(".btn-success").on('click', function() {
        $(".progress-bar").animate({width: "99%"}, 400);
      });
      
      someName = function () {  //global variable -- AMAZING
        $(".progress-bar").animate({width: myFirstObjectEver.width}, 400);
      }
      
      var myFirstObjectEver = {  //ever, yeah
        hey: "what's up hello",
        width: 0
      };
      
      //someName();
      
      setTimeout(someName , 2000);
    })() 
    </script>
  </body>
</html>