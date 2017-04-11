<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>validate form inputs</title>
<style type="text/css">
body,td,th {
	font-size: 24px;
}
</style>
</head >


<body background="bg.jpg">
<p align="center">&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <p align="center">
    <label for="fname">Firstname:</label>
    <input type="text" name="fname" id="fname" />
  </p>
  <p align="center">
    <label for="lname">Lastname:</label>
    <input type="text" name="lname" id="lname" />
  </p>
  <p align="center">Birthday:
    <input type="date" name="bday2" />
  </p>
  <p align="center">
    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </p>
  <p align="center">Province:
    <label for="province"></label>
    <select name="province" id="province">
       <option value="เชียงราย">เชียงราย</option>
      <option value="เชียงใหม่">เชียงใหม่</option>
      <option value="น่าน">น่าน</option>
      <option value="พะเยา">พะเยา</option>
      <option value="แพร่">แพร่</option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
      <option value="ลำปาง">ลำปาง</option>
      <option value="ลำพูน">ลำพูน</option>
      <option value="อุตรดิตถ์">อุตรดิตถ์</option>
      <option value="กาฬสินธุ์">กาฬสินธุ์</option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="ชัยภูมิ">ชัยภูมิ</option>
      <option value="นครพนม">นครพนม</option>
      <option value="นครราชสีมา">นครราชสีมา</option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="มหาสารคาม">มหาสารคาม</option>
      <option value="มุกดาหาร">มุกดาหาร</option>
      <option value="ยโสธร">ยโสธร</option>
      <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
      <option value="เลย">เลย</option>
      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
      <option value="สกลนคร">สกลนคร</option>
      <option value="สุรินทร์">สุรินทร์</option>
      <option value="หนองคาย">หนองคาย</option>
      <option value="หนองบัวลำภู">หนองบัวลำภู</option>
      <option value="อำนาจเจริญ">อำนาจเจริญ</option>
      <option value="อุดรธานี">อุดรธานี</option>
      <option value="อุบลราชธานี">อุบลราชธานี</option>
      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
      <option value="กำแพงเพชร">กำแพงเพชร</option>
      <option value="ชัยนาท">ชัยนาท</option>
      <option value="นครนายก">นครนายก</option>
      <option value="นครปฐม">นครปฐม</option>
      <option value="นครสวรรค์">นครสวรรค์</option>
      <option value="นนทบุรี">นนทบุรี</option>
      <option value="ปทุมธานี">ปทุมธานี</option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
      <option value="พิจิตร">พิจิตร</option>
      <option value="พิษณุโลก">พิษณุโลก</option>
      <option value="เพชรบูรณ์">เพชรบูรณ์</option>
      <option value="ลพบุรี">ลพบุรี</option>
      <option value="สมุทรปราการ">สมุทรปราการ</option>
      <option value="สมุทรสงคราม">สมุทรสงคราม</option>
      <option value="สมุทรสาคร">สมุทรสาคร</option>
      <option value="สระบุรี">สระบุรี</option>
      <option value="สิงห์บุรี">สิงห์บุรี</option>
      <option value="สุโขทัย">สุโขทัย</option>
      <option value="สุพรรณบุรี">สุพรรณบุรี</option>
      <option value="อ่างทอง">อ่างทอง</option>
      <option value="อุทัยธานี">อุทัยธานี</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
      <option value="ชลบุรี">ชลบุรี</option>
      <option value="ตราด">ตราด</option>
      <option value="ปราจีนบุรี">ปราจีนบุรี</option>
      <option value="ระยอง">ระยอง</option>
      <option value="สระแก้ว">สระแก้ว</option>
      <option value="กาญจนบุรี">กาญจนบุรี</option>
      <option value="ตาก">ตาก</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
      <option value="เพชรบุรี">เพชรบุรี</option>
      <option value="ราชบุรี">ราชบุรี</option>
      <option value="กระบี่">กระบี่</option>
      <option value="ชุมพร">ชุมพร</option>
      <option value="ตรัง">ตรัง</option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
      <option value="นราธิวาส">นราธิวาส</option>
      <option value="ปัตตานี">ปัตตานี</option>
      <option value="พังงา">พังงา</option>
      <option value="พัทลุง">พัทลุง</option>
      <option value="ภูเก็ต">ภูเก็ต</option>
      <option value="ยะลา">ยะลา</option>
      <option value="ระนอง">ระนอง</option>
      <option value="สงขลา">สงขลา</option>
      <option value="สตูล">สตูล</option>
      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
    </select>
  </p>
  <div id="demo">
  <p align="center">
<button type="button" onclick="loadDoc()">Submit</button>

   	
     <input type="reset" name="cancel" id="cancel" value="Cancel" />
    
  </p>
  </div>
  
 <div id="pic" class="pic">
 </div>
 <div id="text" class="text"></div>
 
</form>


<script type="text/javascript">

  // Original JavaScript code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  function setCookie(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }

</script>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		 document.getElementById("pic").innerHTML  = 
			"<img src= '77_Province/sign/"+document.getElementById("province").value+".png'></>" +this.responseText;
      
    }
  };
  xhttp.open("GET","77_Province/motto/"+document.getElementById("province").value+ ".txt",true);
  document.getElementById("text").innerHTML ="Hi "+document.getElementById("fname").value+" "+document.getElementById("lname").value
  xhttp.send();
}
</script>





</body>
</html>
