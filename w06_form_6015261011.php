<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>ระบบเสนอหัวข้อโครงงาน</h1>
<form action="project_data.php" method="get">
    <fieldset id="sect1">
        <legend>ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน</legend>
        <label for="std">รหัสนักศึกษา</label><input type="text" name="sid">
        <label for="fname">ชื่อ</label><input type="text" name="sid">
        <label for="laname">นามสกุล</label><input type="text" name="sid">
        <br><br>
        <label for="program">สาขาวิชา</label>
        <select name="program">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="2">เทคโนโลยีสารสนเทศ</option>
            <option value="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
            <option value="4">ภูมิสารสนเทศ</option>
            <option value="5">คอมพิวเตอร์ศึกษา</option>
        </select>
        <label for="faculty">คณะ</label>
        <select name="faculty">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="2">เทคโนโลยีสารสนเทศ</option>
            <option value="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
            <option value="4">ภูมิสารสนเทศ</option>
            <option value="5">คอมพิวเตอร์ศึกษา</option>
        </select><br><br>
        <label for="std_year">ชั้นปี</label>
        <input type="radio" name="std_year" value="1"><label>ปี 1</label>
        <input type="radio" name="std_year" value="2"><label>ปี 2</label>
        <input type="radio" name="std_year" value="3"><label>ปี 3</label>
        <input type="radio" name="std_year" value="4"><label>ปี 4</label>
        <input type="radio" name="std_year" value="5"><label>ปี 5</label>
    </fieldset>
    <fieldset id="sect1">
        <legend>ส่วนที่ 2 ข้อมูลโครงงาน</legend>
                    <label for="prj_name_th">ชื่อโครงงาน(ภาษาไทย)</label>
                    <textarea type="textarea" name="KO" list="Kokan"></textarea><br><br>
                    <label for="prj_name_en">ชื่อโครงงาน(ภาษาอังกฤษ)</label>
                    <textarea type="textarea" name="KO" list="Kokan"></textarea><br><br>
        <label for="prj_type">ประเภทโครงงาน</label>
                    <select name="prj_type">
                    <option value="1">วิทยาการคอมพิวเตอร์</option>
                    <option value="2">เทคโนโลยีสารสนเทศ</option>
                    <option value="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
                    <option value="4">ภูมิสารสนเทศ</option>
                    <option value="5">คอมพิวเตอร์ศึกษา</option>
        </select>
                    <p><label>เครื่องมือที่ใช้</label>
                    <input  type="checkbox" for="prj_tool[]" value="1"><label> html </label>
                    <input  type="checkbox" for="prj_tool[]"value="2"><label> css </label>
                    <input  type="checkbox" for="prj_tool[]"value="3"><label> javaScript </label>
                    <input  type="checkbox" for="prj_tool[]"value="4"><label> Bootstrap </label>
                    <input  type="checkbox" for="prj_tool[]"value="5"><label> Material Design </label>
                    <input  type="checkbox" for="prj_tool[]"value="6"><label> Angular </label><br>
                    <input  type="checkbox" for="prj_tool[]"value="7"><label> React </label>
                    <input  type="checkbox" for="prj_tool[]"value="8"><label> PHP </label>
                    <input  type="checkbox" for="prj_tool[]"value="9"><label> MySQL </label>
                    <input  type="checkbox" for="prj_tool[]"value="10"><label> ChartJS </label><br><br>
 
        <label for="prj_teacher">อาจารย์ที่ปรึกษา</label>
                    <select name="prj_teacher">
                    <option value="1">ผศ.บุญเรือน พฤกษ์ศศิธร</option>
                    <option value="2">ผศ.ทิพย์วรรณ์ ฟูเฟื่อง</option>
        </select>
                    <p><button type="submit" id='mySubmit'>submit</button>
                    <button type="reset" id='mySubmit1'>reset</button>
    </fieldset>
</form>
</body>
</html>