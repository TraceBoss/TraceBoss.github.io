<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>TraceBoss</title>

  <!-- Bootstrap core CSS -->
  <link href="../dist/css/bootstrap.css" rel="stylesheet">


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./starter-template.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../assets/js/ie-emulation-modes-warning.js"></script>
  <link href="../dist/css/custom.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700' rel='stylesheet' type='text/css'>
<style>
  body{
    font-family: Source Sans Pro;
  }
</style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <nav>
    <div class="container2">  
      <div id="navbar">
        <div class="container4">  
          <table class=custom>
            <tr>
              <td class="custom title"><b class="bold">T R A C E </b><b class="light">B O S S</b></td>
              <td class="custom"><a href="../index.html"lass="custom">DashBoard</a></td>
              <td class=custom><a href="./Create.html">Create</a></td>
              <td class=custom><a href="./Assign.html">Assign</a></td>
              <td class=custom><a href="./Dispatch.html">Dispatch</a></td>
              <td class=custom><a href="#">POD</a></td>
              <td class=custom><a href="#">Invoice</a></td>
              <td class=custom><a href="./setting.html" class="custom2 custom3"><span class="glyphicon glyphicon-cog"></span></a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </nav>

  <div class="containerSetting SettingTitle">
    <p class="color">S E T T I N G / <strong>C U S T O M  B R O K E R</strong></p> 
  </div>

  <div class="containerForm">
    <div class="containerFormInner">
      <form method="post" action="settingCustomBroker.php">    
        <div id="readroot" class="settingSpace2">
          <table>
            <tr>
              <td class="text1 textField">Custom Broker Name</td>
              <td class="text3 textField"></td>
              <td class="text1 textField">Branch Name</td>
              <td class="text3 textField"></td>
              <td class="text1 textField">Hours of Operation</td>
            </tr>
            <tr> 
              <td class="text1"><input name=cbName[] type="text" class="text1" placeholder="Custome Broker Name"></td>
              <td class="text3"></td>
              <td class="text1"><input name=brName[] type="text" class="text1" placeholder="Branch Name"></td>
              <td class="text3"></td>
              <td class="text1"><input name=hourOp[] type="text" class="text1" placeholder="Hours of Operation"></td>

            </tr>
          </table>
          <table>
            <tr class="space"> </tr>
            <tr > 
              <td class="text2 textField">Address</td>
              <td class="text3 textField"></td>
              <td class="text1 textField">Email</td>
            </tr>
            <tr> 
              <td class="text2"><input name=address[] type="text" class="text1" placeholder="Address"></td>
              <td class="text3"></td>
              <td class="text1"><input name=email[] type="text" class="text1" placeholder="Email"></td>
            </tr>
          </table>
          <table> 
            <tr class="space"> </tr>
            <tr > 
              <td class="text2 textField">Contact Name</td>
              <td class="text3 textField"></td>
              <td class="text1 textField">Office Phone</td>
            </tr>
            <tr> 
              <td class="text2"><input name=coName[] type="text" class="text1" placeholder="Contact Name"></td>
              <td class="text3"></td>
              <td class="text1"><input name=oPhone[] type="text" class="text1" placeholder="Office Phone"></td>
            </tr>
          </table>
          <table > 
            <tr class="space"> </tr>
            <tr> 
              <td class="text1 textField">Fax</td>
              <td class="text3 textField"></td>
              <td class="text1 textField">Toll Free</td>
              <td class="text3 textField"></td>
              <td class="text1 textField"></td>

            </tr>
            <tr>
              <td class="text1"><input name=fax[] type="text" class="text1" placeholder="Fax"></td>
              <td class="text3"></td>
              <td class="text1"><input name=tollfree[] type="text" class="text1" placeholder="Toll Free"></td>
              <td class="text3"></td>
              <td class="text1"></td>
            </tr>
          </table>
        </div>
        <input type="button" class=button5 onclick="addRow(this.form);" id="Add Another Customer" value="Add Another Customer" />
        </br>
        </br>
        </br>
        <table>
          <tr>
            <td class=text5><input type="button" class="button7" value="Cancel" onclick="location.href='./settingCustomer.html';"/></td>
            <td class=text4><input type="submit" class="button6" value="Save"></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <div class="settingSpace"/>
  <div class="containerSetting">
     <div class="settingTableSpace"> 
      <table class="settingTable">
        <tr>
          <td>NO</td>
          <td>Custom</td>
          <td>Branch Name</td>
          <td>Address</td>
          <td>View </td>
          <td>Action</td>
        </tr>
        <?php
  $conn = mysql_connect('localhost','root','');
  mysql_select_db('TraceBoss',$conn);
  $sql = "SELECT * FROM `CustomBroker` WHERE 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "  <td>" . $row["BID"] . "</td><td> " . $row["BrokerName"] . "</td>
          <td>" . $row["Address"] . "</td><td>VIEW</td>
          <td><button id='". $row["BID"] ."E' class=addne2 type=button ><span class='glyphicon glyphicon glyphicon-edit green'></span></button><button id='". $row["BID"] ."R' class=addne2 type=button ><span class='glyphicon glyphicon glyphicon-trash red'></span></button></td>";

      }
  } else {
      echo "0 results";
  }
?>
      </table>
    </div>
  </div>
<script>

var rowNum = 0;
function addRow(frm) {
  rowNum ++;

  var row2 = '<div id="readroot'+rowNum+'" class="settingSpace2"><table><tr><td class="text1 textField">Custom Broker Name</td><td class="text3 textField"></td><td class="text1 textField">Branch Name</td><td class="text3 textField"></td><td class="text1 textField">Hours of Operation</td></tr><tr><td class="text1"><input name=cbName[] type="text" class="text1" placeholder="Custome Broker Name"></td><td class="text3"></td><td class="text1"><input name=brName[] type="text" class="text1" placeholder="Branch Name"></td><td class="text3"></td><td class="text1"><input name=hourOp[] type="text" class="text1" placeholder="Hours of Operation"></td></tr></table><table><tr class="space"> </tr><tr > <td class="text2 textField">Address</td><td class="text3 textField"></td><td class="text1 textField">Email</td></tr><tr> <td class="text2"><input name=address[] type="text" class="text1" placeholder="Address"></td><td class="text3"></td><td class="text1"><input name=email[] type="text" class="text1" placeholder="Email"></td></tr></table><table><tr class="space"> </tr><tr ><td class="text2 textField">Contact Name</td><td class="text3 textField"></td><td class="text1 textField">Office Phone</td></tr><tr> <td class="text2"><input name=coName[] type="text" class="text1" placeholder="Contact Name"></td><td class="text3"></td><td class="text1"><input name=oPhone[] type="text" class="text1" placeholder="Office Phone"></td></tr></table><table > <tr class="space"> </tr><tr> <td class="text1 textField">Fax</td><td class="text3 textField"></td><td class="text1 textField">Toll Free</td><td class="text3 textField"></td><td class="text1 textField"></td><td class="text1"><td class="text3 textField"></td><td class="text1 textField"></td></tr><tr><td class="text1"><input name=fax[] type="text" class="text1" placeholder="Fax"></td><td class="text3"></td><td class="text1"><input name=tollfree[] type="text" class="text1" placeholder="Toll Free"></td><td class="text3"></td><td class="text1"><input class="button5red" type="button" onclick="removeRow('+rowNum+')" value="Delete Row"></td></tr></table></div>';

  jQuery('#readroot').append(row2);
}

function removeRow(rnum) {
  jQuery('#readroot'+rnum).remove();
}
</script>

  <div class="settingSpace"/>      
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="../dist/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>